<?php
$i = 'contact';
$alignment = get_field('alignment', 'option');
$title = get_field('title', 'option'); 
$sub_title = get_field('sub_title', 'option');
$content = get_field('content', 'option');
$button = get_field('button', 'option');
$image = get_field('image', 'option');
$image_width = get_field('image_width', 'option');
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