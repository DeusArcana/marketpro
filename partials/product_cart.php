<?php

function table_header()
{
	return <<<HTML
	
			<div class="container">
				<table class="table table-hover table-bordered" border="1" padding"4" width="40%">
					<thead>
						<tr>
							<th align="center">Product</th>
							<th align="center">Quantity</th>
							<th align="center">Total</th>
						</tr>
					</thead>
					<tbody>
HTML;
}

function product_cart($offer, $quantity, $cost, $session_offer_id) {
	return <<<HTML
		
						<tr>
							<td align="center">{$offer['name']}</td>
							<td align="center">{$quantity} <a class="btn btn-outline-warning" href="{$_SERVER['PHP_SELF']}?action=remove&id={$session_offer_id}">Delete one</a></td>
							<td align="center">{$cost}</td>
						</tr>
HTML;
}

function table_footer($total)
{
	return <<<HTML
			
						<tr>
							<td colspan="2" align="right">Total:</td>
							<td colspan="1" align="center">{$total}</td>
						</tr>
						<tr>
							<td colspan="3" align="right"><a href="/cart/cart.php?action=empty" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Empty cart</a></td>
						</tr>
					</tbody>
				</table>
				<a class="btn btn-outline-primary" href="../offers">Buy again</a>
			</div>

HTML;
}
