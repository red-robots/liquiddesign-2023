<?php
/* 
*Template Name: Services
*/

get_header(); 

?>

<div id="grid">
<?php while( have_posts() ) : the_post(); ?>
    <section class="newld about">
        <?php include( locate_template('parts/layouts.php') ); ?>
        <?php include( locate_template('parts/contact.php') ); ?>
    </section>
<?php endwhile; ?>
</div><!-- #grid -->
<?php get_footer(); ?>