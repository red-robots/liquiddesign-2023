<?php 
	if( $alignment == 'left' ) {
		$class = 'right';
	} else {
		$class = 'left';
	}


	if( get_sub_field('autoplay') === 'yes'){
		$aPlay = 'autoplay muted loop playsinline';
	} else {
		$aPlay = '';
	}
?>
<div class="<?php echo 'box-'. $i ?> <?php echo $class; ?> ld-block">
	<?php 
	// echo '<pre>';
	// print_r($video);
	// echo '</pre>'; 
	?>
	<div class="video">
		<video class="video-desktop"  <?php echo $aPlay; ?>>
			<source src="<?php echo $video['url'] ?>" type="<?php echo $video['mime_type'] ?>">
			Your browser does not support HTML video.
		</video>
	</div>
</div>