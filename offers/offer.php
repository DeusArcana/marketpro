<?php 

namespace offers;

include_once '../config/config.php';
include __ROOT__ . 'partials/product_card.php'; 

try {
	if (!filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
		throw new \Exception("No URL parameter.");
	}

	$offer_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
		
	if (!isset($offers[$offer_id])) {
		throw new \Exception("No data.");
	} 

	$offer = $offers[$offer_id];
	
} catch (\Throwable $th) {
	header('Location: 404.php');
	exit();
}

$pageTitle = 'Offers';
include __ROOT__ . 'partials/header.php'; 

?>

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

<?php include __ROOT__ . 'partials/footer.php'	?>		
