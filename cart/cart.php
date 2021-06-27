<?php session_start(); ?>
<?php 
include_once '../config/config.php';
require __ROOT__ . 'config/db.php'; ?>

<?php 

	// Getting the offer id
	try {
	
		$session_offer_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
				
		if (!filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING)) {
			throw new \Exception("No URL parameter. [action]");
		}
	
		$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
				
	} catch (\Throwable $th) {
		header('Location: 404.php');
		exit();
	}

	switch ($action) {
		case 'add':
			// we add one product with the id
			if (!isset($_SESSION['cart'][$session_offer_id])) {
				$_SESSION['cart'][$session_offer_id] = 0;
			}

			$_SESSION['cart'][$session_offer_id]++;
			break;

		case 'remove':
			// we remove one product
			$_SESSION['cart'][$session_offer_id]--;
			// if there's no products left, we delete cart
			if ($_SESSION['cart'][$session_offer_id] == 0) {
				unset($_SESSION['cart'][$session_offer_id]);
			}

			break;
		case 'empty':
			// empty the cart
			unset($_SESSION['cart']);
			break;
	}

?>
<?php 

if (isset($_SESSION['cart'])) {
	echo "<table border=\"1\" padding\"4\" width=\"40%\"";
	$total =0;
	foreach ($_SESSION["cart"] as $key => $quantity) {
		try {
			$result = $conn->prepare('SELECT `name`, `description`, `discount_price` FROM `offers` WHERE `offers`.`id` =?');

			$result->execute([$session_offer_id]);

		} catch(\Throwable $e) {    
			echo "Message : " . $e->getMessage() . '<br/>';
			echo "Code : " . $e->getCode() . '<br/>';
		}

		$offers = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($offers as $offer_id => $offer) {
			$price = $offer['discount_price'];
			$cost = $price * $quantity;
			$total = $total + $cost;

			echo "<tr>";
			echo 	"<td align=\"center\">{$offer['name']}</td>";
			echo 	"<td align=\"center\">{$quantity} <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$session_offer_id\">X</a></td>";
			echo 	"<td align=\"center\">{$cost}</td>";
			echo "</tr>";
		}

	}

	echo "<tr>";
	echo 	"<td colspan=\"2\" align=\"right\">Total:</td>";
	echo 	"<td colspan=\"2\" align=\"center\">$total</td>";
	echo "</tr>";
	echo "<tr>";
	echo 	"<td colspan=\"3\" align=\"right\"><a href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?')\">Empty cart</a></td>";
	echo "</tr>";

	echo "</table>";

} else {
	echo 'There\'s no items on the cart';
}

echo "<a href=\"index.php\">Buy again</a>";
?>
