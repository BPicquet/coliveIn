<?php
/*
 * Template Name: Mentions légales
 * Description: The template for displaying the legal notice
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section id="legal-notice-title" class="legal-notice-title">
        <div class="legal-notice-title__container container">
            <h1><?php the_title(); ?></h1>
            <p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserve les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet sont :</p>
        </div>
    </section>

    <section id="legal-notice-content" class="legal-notice-content">
        <div class="legal-notice-content__container container">
            <p><?php the_content(); ?></p>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>