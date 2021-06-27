<?php

include_once '../config/config.php';
include __ROOT__ . 'config/db.php';
include __ROOT__ . 'partials/product_card.php';

foreach ($offers as $key => $offer) {
	echo product_card($key, $offer);
} 
