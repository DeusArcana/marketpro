<?php

require __ROOT__ . 'config/db.php';

$stmt = $conn->prepare("SELECT * FROM `offers` WHERE `offers`.`id`=?");
$stmt->execute([$offer_id]);

$offer = $stmt->fetch();

function product_detail($offer) {
	return <<<HTML
<img src="{$offer['image']}" alt="">
						<h1 class="display-4">{$offer['name']}</h1>
						<hr class="my-4">
						<p class="lead col-md-8 fs-4">{$offer['intro']}</p>
						<p class="col-md-8 fs-4">{$offer['description']}</p>
						<P><a href="#" class="btn btn-outline-success">Antes: {$offer['price']} - <strong>Ahora: {$offer['discount_price']}</strong></a></P>

HTML;
}
