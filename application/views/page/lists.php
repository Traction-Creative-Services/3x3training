<div class="container">
	 <h1><?php echo $section[0]->sectionTitle; ?></h1>
	<p class="lead"><?php echo $section[0]->sectionDesc; ?></p>
	<?php foreach($section as $video ) {	?>
	<div class="row">
		<div class="col-md-12">
			<h3><?php echo $video->vidTitle; ?></h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<video height="240" width="320" controls>
				<source src="<?php echo site_url($video->src); ?>" format="video/mp4">
			</video>
		</div>
		<div class="col-md-6">
			<?php echo $video->vidDesc; ?>
		</div>
	</div>
	<?php } ?>
</div>