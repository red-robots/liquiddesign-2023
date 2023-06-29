<?php if( have_rows('layout') ):
    while ( have_rows('layout') ) : the_row(); $i++; ?>

        <?php if( get_row_layout() == 'quote' ):
                $quote = get_sub_field('quote'); ?>

                <div class="quote"><?php echo $quote; ?></div>

        <?php elseif( get_row_layout() == 'just_text' ): 
        		$title = get_sub_field('title'); 
                $sub_title = get_sub_field('sub_title');
                $text_block = get_sub_field('text_block');
                $column_count = get_sub_field('column_count');

                include( locate_template('parts/block-text-only.php') ); 
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

                <div class="ld-box <?php echo $image_width.'-'.$remainder; ?>">
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
                        include( locate_template('parts/block-text.php') );  
                        include( locate_template('parts/block-image.php') ); 

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
                        include( locate_template('parts/block-image.php') ); 
                        include( locate_template('parts/block-text.php') );
                    } else {
                        include( locate_template('parts/block-text.php') );
                    }
                    ?>
                </div>

        <?php elseif( get_row_layout() == 'video' ): 
                $video = get_sub_field('video'); 
                $alignment = get_sub_field('alignment');
                $title = get_sub_field('title'); 
                $sub_title = get_sub_field('sub_title');
                $content = get_sub_field('content');
                $button = get_sub_field('button');

                if( $alignment == 'none' ) {
                	$boxClass = 'ld-box-video';
                } else {
                	$boxClass = 'ld-box';
                }
                ?>
                <div class="<?php echo $boxClass; ?> <?php echo $image_width.'-'.$remainder; ?>"> 
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
	                                width: 100%;
	                            }
	                            <?php echo '.box-'. $i ?>.right {
	                                width: 100%;
	                            }
	                        }
                        </style>

                    <?php 
                        include( locate_template('parts/block-text.php') ); 
                        include( locate_template('parts/block-video.php') );
                        
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
                        include( locate_template('parts/block-video.php') );
                        include( locate_template('parts/block-text.php') ); 
                    } else {
                        include( locate_template('parts/block-video.php') );
                        include( locate_template('parts/block-text.php') );
                    }
                    ?>
                </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>