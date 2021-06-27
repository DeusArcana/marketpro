<?php

require __ROOT__ . 'config/db.php';

$stmt = $conn->query('SELECT * FROM `offers`');

$offers = $stmt->fetchAll();

function product_card($key, $offer)
{
	return <<<HTML
							<div class="col-md-3 pb-3">
								<div class="card d-inline" style="width: 18rem;">
									<img src="{$offer['image']}" class="card-img-top" alt="{$offer['name']}">
									<div class="card-body">
										<h5 class="card-title">{$offer['name']}</h5>
										<p class="card-text">{$offer['intro']}</p>
										<a href="/offers/offer.html?id={$offer['id']}" class="btn btn-outline-primary">View more details!</a>
										<a href="/cart/cart.html?id={$offer['id']}&action=add" class="btn btn-outline-success">Add to cart!</a>
									</div>
								</div>
							</div>

		HTML;
}
