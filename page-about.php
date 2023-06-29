<?php
/* 
*Template Name: About
*/

get_header(); 

?>


<?php while( have_posts() ) : the_post(); ?>
    <section class="newld about">
        <?php include( locate_template('parts/layouts.php') ); ?>
        <?php include( locate_template('parts/contact.php') ); ?>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>