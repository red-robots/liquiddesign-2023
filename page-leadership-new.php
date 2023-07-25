<?php 
/* 
 * Template Name: Leadership New
 * @since         1.0
 * @alter         2.0
*/

get_header(); 
$i=0;
?>


<?php while( have_posts() ) : the_post(); ?>
<?php if( have_rows('leadership') ):  ?>
<div class="wrap">
	<section class="">
	<div class="box-content leadership ">

		<div class="leadership-pic">
			<?php while( have_rows('leadership') ): the_row(); $i++;
				$leader_name = get_sub_field('leader_name');
				$leader_link = get_sub_field('leader_link');
				$leader_image = get_sub_field('leader_image');
					if( $i == 1 ){
						$class = 'leadership-left';
					} else {
						$class = 'leadership-right';
					}
				?>
			<div class="<?php echo $class; ?>">
				<img src="<?php echo $leader_image['url']; ?>" alt="<?php echo $leader_image['alt']; ?>">
				<a href="<?php echo $leader_link['url']; ?>"><?php echo $leader_name; ?></a>
			</div>
			<?php endwhile; ?>
		</div><!-- #leadership pic --> 
	
		
<?php  endif; ?>
</div>
<div class="leadership-text">
	<div class="text">
	<?php the_content(); ?>
	</div>
</div>
</section>
</div>
    <section class="newld leadership">
        <?php include( locate_template('parts/layout-leadership.php') ); ?>
        <?php include( locate_template('parts/contact.php') ); ?>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>