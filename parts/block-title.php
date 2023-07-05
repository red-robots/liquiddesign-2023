<?php 
	if( $alignment == 'left' ) {
		$class = 'right';
	} else {
		$class = 'left';
	}
 ?>
<div class="<?php echo 'box-'. $i ?> <?php echo $class; ?> ld-block">
   <div class="img-parallaxz" data-speed="1">
    	<img src="<?php echo $image['url']; ?>"  class="" src="<?php echo $image['alt']; ?>">
    </div>
</div>