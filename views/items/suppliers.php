<div class="row">
	<div class="col-xs-12">
	<h2>Suppliers</h2>
	<table class="table table-striped">
	<?php foreach ($suppliers_items as $supplier) {
		echo '<tr>';
		echo '<td>'.$supplier['cardname'].'</td>';
		echo '<td>'.$supplier['cardcode'].'</td>';
		echo '</tr>';
	}		
	?>
	</table>
	</div>
</div>
