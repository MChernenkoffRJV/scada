<div class="row">
	<div class="col-xs-12">
	<h2>Suppliers</h2>
	<table class="table table-striped">
	<?php foreach ($suppliers_items as $supplier) {
		echo '<tr>';
		echo '<td>'.$supplier['cardname'].'</td>';
		echo '<td>'.'<a href="/index.php/bps/' . $supplier['cardcode'].'">';
		echo '<img src="/images/yellow_arrow.gif" height=16 width=16>'.$supplier['cardcode'].'</a>';
		echo '</td>';
		echo '</tr>';
	}		
	?>
	</table>
	</div>
</div>
