<?php 
$t=0;
if( have_rows('leadership_layout') ):
    while ( have_rows('leadership_layout') ) : the_row(); $i++; $t++; ?>

        <?php if( get_row_layout() == 'title' ):
                $quote = get_sub_field('title'); 
                $align = get_sub_field('alignment'); 
                ?>

                <div class="ld-box leadership-title" >
                	<h1 style="text-align: <?php echo $align; ?>"><?php echo $quote; ?></h1>
                </div>

        

        <?php elseif( get_row_layout() == 'full_width_photo' ): 
        		$photo = get_sub_field('photo'); 

                include( locate_template('parts/block-photo.php') ); 
        	?>

        		

        <?php elseif( get_row_layout() == 'image__text' ): 
                $alignment = get_sub_field('alignment');
                $title = get_sub_field('title'); 
                $sub_title = get_sub_field('sub_title');
                $content = get_sub_field('content');
                $button = get_sub_field('button');
                $image = get_sub_field('image');
                $image_width = get_sub_field('image_width');
                $remainder = 100 - $image_width;
                ?>

                <div class="ld-box <?php echo $image_width.'-'.$remainder; ?> leadership">
                    <?php 
                    if( $alignment == 'left' ) { 
                        
                        ?>
                        <style type="text/css">
                        	<?php echo '.box-'. $i ?>.left {
                                width: 100%;
                            }
                            <?php echo '.box-'. $i ?>.right {
                                width: 100%;
                            }
                        	@media (min-width: 768px) {
	                            <?php echo '.box-'. $i ?>.left {
	                                width: <?php echo $remainder; ?>%;
	                            }
	                            <?php echo '.box-'. $i ?>.right {
	                                width: <?php echo $image_width; ?>%;
	                            }
	                        }
                        </style>
                    <?php
                        include( locate_template('parts/block-text-leadership.php') );  
                        include( locate_template('parts/block-image-leadership.php') ); 

                    } elseif( $alignment == 'right' ) { ?>

                        <style type="text/css">
                        	<?php echo '.box-'. $i ?>.left {
                                width: 100%;
                            }
                            <?php echo '.box-'. $i ?>.right {
                                width: 100%;
                            }
                        	@media (min-width: 768px) {
	                            <?php echo '.box-'. $i ?>.left {
	                                width: <?php echo $image_width; ?>%;
	                            }
	                            <?php echo '.box-'. $i ?>.right {
	                                width: <?php echo $remainder; ?>%;
	                            }
	                        }
                        </style>
                    <?php
                        include( locate_template('parts/block-image-leadership.php') ); 
                        include( locate_template('parts/block-text-leadership.php') );
                    } else {
                        include( locate_template('parts/block-text-leadership.php') );
                    }
                    ?>
                </div>

        <?php elseif( get_row_layout() == 'video' ): ?>
                
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>