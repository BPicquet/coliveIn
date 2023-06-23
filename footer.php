    <?= get_template_part('./template-parts/footer-brochure'); ?>
    
    <footer id="footer" class="footer">
        <div class="footer__container container">
            <div class="footer__container__top">
                <div>
                    <img src="<?= get_template_directory_uri() . '/assets/img/logo-colivin-dark.png' ?>" alt="">
                    <p>8 allée champêtre</p>
                    <p>62161 Duisans</p>
                    <p>Tél. 06 07 69 38 50</p>
                </div>
                <div>
                    <p>Suivez-nous sur les réseaux sociaux:</p>
                    <div>
                        <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer__container__bottom">
                <p>Ensemble, vivons une seconde jeunesse.</p>
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