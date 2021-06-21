<?php include('inc/product_card.php'); ?>
<?php 

$pageTitle = 'Home';
include('inc/header.php') ?>

			<div class="jumbotron pt-3 pb-5">
				<h1 class="display-4">Welcome to Marketpro!</h1>
				<p class="lead">The best place to make your shopping online.</p>
				<hr class="my-4">
				<p>Everything you want in one place.</p>
				<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Start shopping!</a>
				</p>
			</div>

			<div class="container-fluid">
				<div class="row">
					<?php 
						foreach ($offers as $offer) {
							echo product_card($offer);
						} 
					?> 
				</div>
		 	</div>

<?php include('inc/footer.php')	?>		
