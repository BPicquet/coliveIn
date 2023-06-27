<?php
/*
 * Template Name: Contact
 * Description: The template for displaying the contact page
*/
?>

<?php get_header(); ?>

<section id="contact-form" class="contact-form">
    <div class="contact-form__container container">
        <h1>Demande de brochure</h1>
        <?= do_shortcode('[contact-form-7 id="35" title="Formulaire de brochure"]'); ?>
	</div>
</section>

<?php get_footer(); ?>