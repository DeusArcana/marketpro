<?php include('inc/product_card.php'); ?>
<?php 

try {
	if (isset($_GET["id"])) {
		$offer_id = $_GET["id"];
	
		if (isset($offers[$offer_id])) {
			$offer = $offers[$offer_id];
		} else {
			throw new Exception("No data");
		}
	} else {
		throw new Exception("No URL parameter.");
	}
} catch (\Throwable $th) {
	header('Location: 404.php');
	exit();
}

$pageTitle = 'Offers';
include('inc/header.php') ?>

			<div class="container bg-light border rounded-3 mb-4">
				<div class="p-5 mb-4 bg-light rounded-3">
					<div class="container-fluid py-5">
						<img src="<?php echo $offer['image'] ?>" alt="">
						<h1 class="display-4"><?php echo $offer['name'] ?></h1>
						<hr class="my-4">
						<p class="lead col-md-8 fs-4"><?php echo $offer['intro'] ?></p>
					</div>
				</div>
			</div>

<?php include('inc/footer.php')	?>		
