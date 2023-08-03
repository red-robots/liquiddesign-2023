 <?php
/*
Template Name: Contact
*/
get_header(); 
$map = get_field('map');
$parking = get_field('parking');
?>

<div id="grid" class="page-pad"> 
<div class="wrap">   
    <div id="content">
        
        	<?php if(have_posts()) : while(have_posts()) : the_post() ?>
			
			
			
			
			<div class="about-single-pic">
                <h1 class="page-title"><?php the_title(); ?></h1>
    			<?php the_content(); ?>

                <div class="contact-page ">
                    <div class="map">
                        <?php echo $map; ?>
                     </div>
                    <div class="parking">
                        <img src="<?php echo $parking['url']; ?>" alt="<?php echo $parking['alt']; ?>">
                    </div>

                </div>
                
            
            </div>
            
            <div class="about-page-entry">
            	
                
				<br />
                <?php echo do_shortcode('[gravityform id="1" name="Contact Us" title="false" description="false"]'); ?>
                
              
            </div><!-- #page-entry -->
                
            
                
            <?php endwhile; endif; ?>
       
        
	</div><!-- #content -->
    
    <?php //get_sidebar('page'); ?>
</div><!-- #wrap -->    
</div><!-- #grid -->
<?php get_footer('page'); ?>