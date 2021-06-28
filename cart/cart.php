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
$pageTitle = 'Cart';
include __ROOT__ . 'partials/header.php';
include __ROOT__ . 'partials/product_cart.php';

if (isset($_SESSION['cart'])) {
	echo table_header();

	$total = 0;
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

			echo product_cart($offer, $quantity, $cost, $session_offer_id);
		}

	}

	echo table_footer($total);

} else {
	echo <<<HTML
	<div class="container">
		<h3 class="lead">There's no items on the cart</h3>
	</div>

	HTML;
}

include __ROOT__ . 'partials/footer.php';
?>
