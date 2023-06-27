<?php
/*
 * Template Name: Politique de cookies
 * Description: The template for displaying the cookie policy
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section id="cookie-policy-title" class="cookie-policy-title">
        <div class="cookie-policy-title__container container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section id="cookie-policy-content" class="cookie-policy-content">
        <div class="cookie-policy-content__container container">
            <p><?php the_content(); ?></p>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>