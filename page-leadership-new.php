<?php 
/* 
 * Template Name: Leadership New
 * @since         1.0
 * @alter         2.0
*/

get_header(); 

?>


<?php while( have_posts() ) : the_post(); ?>
    <section class="newld leadership">
        <?php include( locate_template('parts/layout-leadership.php') ); ?>
        <?php include( locate_template('parts/contact.php') ); ?>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>