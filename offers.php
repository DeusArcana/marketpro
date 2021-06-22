<?php include('inc/product_card.php'); ?>
<?php 
$pageTitle = 'Offers';
include('inc/header.php') ?>

			<div class="container bg-light border rounded-3 mb-4">
				<div class="p-5 mb-4 bg-light rounded-3">
					<div class="container-fluid py-5">
						<h1 class="display-4">Offers</h1>
						<hr class="my-4">
						<p class="lead col-md-8 fs-4">Enjoy our bests discounts.</p>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<?php 
						foreach ($offers as $key => $offer) {
							echo product_card($key, $offer);
						} 
					?> 
				</div>
		 	</div>

<?php include('inc/footer.php')	?>		
