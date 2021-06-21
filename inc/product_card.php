<?php

$offers = array();

$offers[001] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);
$offers[002] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);
$offers[003] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);
$offers[004] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);
$offers[005] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);
$offers[006] = array(
	'name' => 'Special sushi',
	'intro' => 'All japanese flavor in one bite',
	'description' => 'You definitely cannot lose this offer',
	'image' => 'img/sushi.jpg',
	'price' => 389,
	'discount_price' => 49
);

function product_card($offer)
{
	return <<<EOT
							<div class="col-md-4 pb-3">
								<div class="card" style="width: 18rem;">
									<img src="{$offer["image"]}" class="card-img-top" alt="{$offer["name"]}">
									<div class="card-body">
										<h5 class="card-title">{$offer["name"]}</h5>
										<p class="card-text">{$offer["intro"]}</p>
										<a href="#" class="btn btn-primary">View more details!</a>
									</div>
								</div>
							</div>

		EOT;
}


