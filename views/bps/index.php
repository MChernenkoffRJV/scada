<!-- 
<div class='col-lg-10'>
	<fieldset>
		<legend>Select Your Option</legend>
		<a href="#" class="btn btn-success">List the News Items</a> 
		<a href="create" class="btn btn-success">Create a News Item</a> 
		</fieldset>
</div>
-->
	
	<table class="table table-striped">
	<?php foreach ($bps as $bps_item): ?>

    <tr>
	<!-- <td><?php //var_dump($bps_item); ?></td> -->
	<td><?php  
	if (empty($bps_item['link'])) {
		echo $bps_item['cardname'];
	}
	else {
		echo '<a href="' . $bps_item['link'] . '">'.'<img src="/images/yellow_arrow.gif" height=16 width=16>'.$bps_item['cardname'].'</a>';
	} ?>
	</td> 
	<td><a href="<?php echo 'bps/' . $bps_item['cardcode'] ?>">
	<!-- <img src="c:/wamp/www/images/yellow_arrow.gif" height=16 width=16></img> -->
	<img src="/images/yellow_arrow.gif" height=16 width=16><?php echo $bps_item['cardcode'] ?>
	</a></td>
	</tr>
<!-- 
    <div class="main">
        <?php // echo $bps_item['CardCode'] ?>
    </div>
    <p></p>
--> 

<?php endforeach ?>
	</table>