<?php 
/* 
 * Template Name: Single Leadership
 * @since         1.0
 * @alter         2.0
*/

get_header('full'); ?>
<div class="wrap">   
<section class="newld"> 
<?php
$alignment = get_field('alignment');
$title = get_field('title'); 
$sub_title = get_field('sub_title');
$content = get_field('content');
$button = get_field('button');
$image = get_field('image');
$image_width = get_field('image_width');
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
</section>
</div><!-- #wrap -->
<?php get_footer('full'); ?>