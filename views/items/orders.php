<div class="row">
	<div class="col-xs-12">
	<h2>Orders</h2>
	<table class="table table-striped">
	<?php foreach ($orders_items as $order) {
		echo '<tr>';
		echo '<td>'.$order['CardName'].'</td>';
		echo '<td>'.$order['DocDate'].'</td>';
		echo '<td>'.$order['DocNum'].'</td>';
		echo '<td>'.number_format($order['Quantity'],2).'</td>';
		echo '<td>'.'$'.number_format($order['Price'],2).'</td>';
		echo '</tr>';
	}		
	?>
	</table>
	</div>
</div>
