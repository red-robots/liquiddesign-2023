<?php
/* 
*Template Name: Work
*/

get_header(); 

$gray_bar = get_field('gray_bar');
$additional_text = get_field('additional_text');

$tax = 'studio';
?>

<div id="grid" class="page-pad">

    <div class="wrap">
        <section class="newld work-desc">
            <div class="titles"><h1><?php the_title(); ?></h1></div>
            <?php the_content(); ?>
        </section>
    </div>

<?php $this_page_id = $wp_query->post->ID; ?>

<?php 
$termArgs = array(
	'taxonomy' => 'studio',
    'hide_empty' => false
);
$terms = get_terms( $termArgs );

// echo '<pre>';
// print_r($terms);
// echo '</pre>';

query_posts(array(
    'showposts' => 40, // how many pages to show
    'post_parent' => $this_page_id, // parent page
    'post_type' => 'page',  // this is a page not a post
    'orderby' => 'menu_order'
)); /// order by this order.

/* Say hello to the Loop... */

/* Anything placed in #sort is positioned by jQuery Masonry */ ?>
<div class="wrap">
<div class="sortz flexwork">
    
    <?php foreach( $terms as $term ): 
    	$termId = $term->term_id;
    	$featImage = get_field( 'featured_image', $tax.'_'.$termId );
    	$termLink = get_term_link( $termId, 'studio');

    	global $my_size, $force_feat_img, $embed_code, $vid_url;
    	
        // Gather custom fields
        //$embed_code = get_post_meta($post->ID, 'soy_vid', true);
        //$vid_url = get_post_meta($post->ID, 'soy_vid_url', true);
        //$force_feat_img = get_post_meta($post->ID, 'soy_hide_vid', true);
        //$show_title = get_post_meta($post->ID, 'soy_show_title', true);
        //$show_desc = get_post_meta($post->ID, 'soy_show_desc', true);
        //$box_size = get_post_meta($post->ID, 'soy_box_size', true); 
        
        if( $box_size == 'Medium (485px)' ){
            $my_size = 'col3';
            $embed_size = '495';
        } else if( $box_size == 'Large (660px)' ){
            $my_size = 'col4';
            $embed_size = '670';
        } else if( $box_size == 'Tiny (135px)' ){
            $my_size = 'col1';
            $embed_size = '145';
        }else{
            $my_size = 'col2';
            $embed_size = '320';
        }
        
       
    ?>
    <div class="all box col1<?php //echo $category_classes . $my_size; ?>">
        <div <?php post_class( 'box-content '.$content_class ) ?>>
            <div class="img-container">    
                <a href="<?php echo $termLink; ?>">
                    <img src="<?php echo $featImage['url']; ?>">
                </a>
            </div><!-- #img-container -->
        </div><!-- #box-content -->
    </div><!-- #box -->

    <?php endforeach; //endwhile; ?>
</div><!-- #sort -->


<?php 
$t=0;
if( have_rows('layouts') ): ?>
    <section class="newld">
    <?php while ( have_rows('layouts') ) : the_row(); $i++; $t++; ?>

    
        <?php if( get_row_layout() == 'gray_bar' ): ?>
            <div class="quote work"><?php the_sub_field('content'); ?></div>
       
        <?php elseif( get_row_layout() == 'text' ): ?>
            <div class="work-desc left">
                <?php the_sub_field('content'); ?>
            </div>
        <?php elseif( get_row_layout() == 'images' ): 
                $images = get_sub_field('images');
                // echo '<pre>';
                // print_r($images);
                // echo '</pre>';
            ?>
            <div class="work-img-section">
            <?php foreach( $images as $img ) { ?>
                <div class="img">
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                </div>
            <?php } ?>
            </div>
        <?php endif; ?>
    <?php endwhile;?>
    <?php include( locate_template('parts/contact.php') ); ?>
    </section>
<?php endif; ?>

</div><!-- wrap -->

</div><!-- #grid -->
<?php get_footer('category'); ?>