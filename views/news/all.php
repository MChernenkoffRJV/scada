<div class='col-lg-10'>
	<fieldset>
		<legend>Select Your Option</legend>
		<a href="#" class="btn btn-success">List the News Items</a> 
		<a href="create" class="btn btn-success">Create a News Item</a> 
		</fieldset>
</div>

<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>