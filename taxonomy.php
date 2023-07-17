<?php

get_header(); 
$termOb = get_queried_object();
$featBanner = get_field('featured_banner',$termOb);
// echo '<pre>';
// print_r($termOb);
// echo '</pre>';
//if( $featBanner ):
?>

<div class="page-pad">
    <div class="wrap studio-flexz js-blocksz">


    <div id="grid" class="new-tax">

        <div class="flexer">
      <div class="studio-desc">
          <!-- <h1><?php echo $termOb->name; ?></h1>
          <h2><?php echo $termOb->taxonomy; ?></h2> -->
          <div class="desc"><?php echo term_description(); ?></div>
      </div>
     



    <?php 
    if ( have_posts() ) : while(have_posts()) : the_post();  
        global $my_size, $force_feat_img, $embed_code, $vid_url;
          
            // Gather custom fields
            $embed_code = get_post_meta($post->ID, 'soy_vid', true);
            $vid_url = get_post_meta($post->ID, 'soy_vid_url', true);
            $force_feat_img = get_post_meta($post->ID, 'soy_hide_vid', true);
            $show_title = get_post_meta($post->ID, 'soy_show_title', true);
            $show_desc = get_post_meta($post->ID, 'soy_show_desc', true);
            $box_size = get_post_meta($post->ID, 'soy_box_size', true); 
            
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
            
            /* Check whether content is being displayed
             * This determines whether a border should be applied
             * above the postmeta section
            */
            if($show_title != 'No'){
                $content_class = 'has-content';
            } else if($show_desc != 'No' && $post->post_content){
                $content_class = 'has-content';
            }else {
                $content_class = 'no-content';
            }
            
            // Assign categories as class names to enable filtering
            $category_classes = '';
            
            foreach( ( get_the_category() ) as $category ) {
                $category_classes .= $category->category_nicename . ' ';
            } 

            $postTitle = get_the_title();
            $dataRel = sanitize_title_with_dashes($postTitle);

            $size = 'large';
                //$galLink = get_the_post_thumbnail_url( 'large' );
            // $galLink = 'hlleo';
                //echo $galLink;

                // echo '<pre>';
                // print_r($thumb);
                // echo '</pre>';
        ?>
        
        <div class="all box col1 studio-boxz js-blocksz <?php //echo $category_classes . $my_size; ?>">
            <?php //echo $galLink; ?>
            <div <?php post_class( 'box-content '.$content_class ) ?>>
                <?php 
                // Display video if available
                if( ( $embed_code || $vid_url ) && !$force_feat_img ):
                
                  if( $vid_url ){
                    echo '<div class="vid-container">'.apply_filters('the_content', '[embed width="' . $embed_size . '"]' . $vid_url . '[/embed]').'</div>';
                  } else {
                    echo '<div class="vid-container">'.$embed_code.'</div>';
                  } 
                
                // Display gallery
                elseif( has_post_format( 'gallery' ) && !$force_feat_img ):
                
                  get_template_part( 'includes/loop-gallery' );
                
                // Display featured image
                elseif ( has_post_thumbnail() ): 



                    ?>
                
                    <div class="img-container">    
                        <?php 
                       // Pull in title for first slide from the repeater field of the post
                            $ID = get_the_ID();
                            // specific post ID you want to pull
                            $post = get_post($ID); 
                            setup_postdata( $post );
                             
                                $i=0; if(have_rows('slides')) : while(have_rows('slides')) : the_row(); $i++;

                                    $info = get_sub_field('info');
                                    if( $i == 1 ) {
                                       
                                        $output = $info;
                                       
                                        break;
                                    } else {
                                        $output = '';
                                    }
                                endwhile; endif;
                             
                            wp_reset_postdata();

                            ?>
                            <a title="<?php echo $output; ?>" class="" href="<?php the_permalink();//the_post_thumbnail_url('large'); // ?>" data-rel="<?php echo $dataRel; ?>" >
                                <img class="lazy col1" src="<?php the_post_thumbnail_url('post-thumbnail'); ?>" data-original="<?php the_post_thumbnail_url('post-thumbnail'); ?>" >
                            </a>
                        
                        
                        <div class="actions">
                    <h2 class="hovertitle">
                        <a  class="" href="#">
                            <?php the_title(); ?>
                        </a>
                    </h2>
              </div><!-- #actions --> 
                        
                        
                    </div><!-- #img-container -->
                    
                    <?php //if( has_post_format( 'gallery' ) ) get_template_part( 'includes/gallery-list' ); ?>
                    
                







                <?php endif; // #has_post_thumbnail() ?>
                
                
                
                
                
            </div><!-- #box-content -->
        </div><!-- #box -->
        <?php endwhile; ?>
        </div>
        </div>

    </div><!-- #sort -->
</div><!-- wrap -->
<?php // Display pagination when applicable
if (  $wp_query->max_num_pages > 1 ) : ?>
	
<?php endif; ?>

<?php else :
/* If there are no posts */ ?>

<?php endif; ?>







<?php get_footer('category'); ?>