<?php 
echo '<h1>'.$items_item['ItemCode'].'</h1>';
echo '<h2>'.$items_item['ItemName'].'</h2>'; 
?>
<div class = "row">
	<div class="col-xs-4">
	<?php 
		// the double urlencode is to allow %2f in the image file name e.g. SETCC10%2F2.jpg
		$image = "\\images\\" . urlencode(urlencode($items_item['ItemCode'])) . ".jpg"; 
		echo "<img src=\"" . $image . "\" width='160' height='160'></img>";
	?>
	</div>
	<div class="col-xs-8">
	<?php 
		echo 'Last Purchase Price: ' . number_format($items_item['LastPurPrc'], 2) . '</br>';
		echo 'Avg Price: ' . number_format($items_item['AvgPrice'], 2) . '</br>';
		echo 'SAP Qty: ' . number_format($items_item['OnHand'], 2) . '</br>';
	?>
	</div>
</div>
