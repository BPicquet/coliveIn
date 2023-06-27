    <?php
        if (!is_page_template('page-contact.php')) { 
            echo get_template_part('./template-parts/footer-brochure'); 
        }
    ?>
    
    <footer id="footer" class="footer">
        <div class="footer__container container">
            <div class="footer__container__top">
                <div>
                    <img src="<?= get_template_directory_uri() . '/assets/img/logo-colivin-dark.png' ?>" alt="">
                    <p><?= carbon_get_theme_option('crb_theme_options_postal_adress'); ?></p>
                    <p><?= carbon_get_theme_option('crb_theme_options_city'); ?></p>
                    <p>Tél. <?= carbon_get_theme_option('crb_theme_options_phone_number'); ?></p>
                </div>
                <div>
                    <p>Suivez-nous sur les réseaux sociaux:</p>
                    <div>
                        <a href="<?= carbon_get_theme_option('crb_theme_options_facebook'); ?>" target="_blank"><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="<?= carbon_get_theme_option('crb_theme_options_instagram'); ?>" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
                        <a href="<?= carbon_get_theme_option('crb_theme_options_linkedin'); ?>" target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer__container__bottom">
                <p><?php bloginfo('description'); ?></p>
                <div>
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'footer',
                            'container' => 'ul',
                        ]); 

                        wp_nav_menu([
                            'theme_location' => 'footer-2',
                            'container' => 'ul',
                        ]); 
                    ?>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>