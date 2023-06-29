<?php 
	if( $alignment == 'left' ) {
		$class = 'left';
	} else {
		$class = 'right';
	}
 ?>
<div class="<?php echo 'box-'. $i ?> <?php echo $class; ?> text">
	<div>
		<?php if( $title ){ ?>
			<div class="titles">
		    	<h2 class="main"><?php echo $title; ?></h2>
		    	<?php if( $sub_title ){ ?>
			        <h2 class="sub"><?php echo $sub_title; ?></h2>
			    <?php } ?>
			    <div class="square"></div>
			</div>
		<?php } ?>
	    <?php echo $content; ?>
	    <?php if( $button ) { ?>
	        <div class="button">
	            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
	                <?php echo $button['title']; ?>
	            </a>
	        </div>
	        <div class="clearfix"></div>
	    <?php } ?>
    </div>
</div>