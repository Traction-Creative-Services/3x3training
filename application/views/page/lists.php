<div class="container">
	<h1><?php echo $category['title']; ?></h1>
	<p class="lead"><?php echo $category['description']; ?></p>
	<?php foreach($category['videos'] as $video ) {	?>
		<h3><?php echo $video['title']; ?></h3>
		<video height="240" width="320" controls>
			<source src="<?php echo site_url('assets/videos/'.$video['src']); ?>" format="video/mp4">
		</video>
		<div style="clear:both; min-height:10px;"></div>
	<?php } ?>
</div>