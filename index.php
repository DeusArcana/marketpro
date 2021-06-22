<?php include('inc/product_card.php'); ?>
<?php 

$pageTitle = 'Home';
include('inc/header.php') ?>

			<div class="container bg-light border rounded-3 mb-4">
				<div class="p-5 mb-4 bg-light rounded-3">
					<div class="container-fluid py-5">
						<h1 class="display-4">Welcome to Marketpro!</h1>
						<p class="lead col-md-8 fs-4">The best place to make your shopping online.</p>
						<hr class="my-4">
						<p>Everything you want in one place.</p>
						<button class="btn btn-primary btn-lg" type="button">Start shopping!</button>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<?php 
						foreach (array_slice($offers, 0, 4) as $key => $offer) {
							echo product_card($key, $offer);
						} 
					?> 
				</div>
		 	</div>

<?php include('inc/footer.php')	?>		
