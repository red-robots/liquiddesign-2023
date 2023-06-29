<?php
/* Frontpage (Blog)
 *
 * @since   1.0
 * @alter   1.6
*/

get_header(); ?>

<div id="homepagecontainer">
	<?php get_template_part('includes/slider'); ?>
</div>

<section class="newld home">
    <?php include( locate_template('parts/layouts.php') ); ?>
</section>

<?php if ( function_exists('display_instagram') ) { ?>
	<div class="insta">
		<div class="insta-inside">
			<?php echo do_shortcode('[instagram-feed]'); ?>
		</div>
	</div>
<?php } ?>

<section class="newld ">
<?php include( locate_template('parts/contact.php') ); ?>
</section>

<div class="clearfix"></div>
    
<?php get_footer(); ?>