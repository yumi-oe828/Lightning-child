<?php wp_footer(); ?>
<footer class="footer">
    <div class="footer-inner l-container">
        <div class="footer-image">
            <a href="<?php echo home_url(); ?>">
                <img src="http://portforio.local/wp-content/uploads/2026/02/header-logo-1.svg"
                    alt="yumi's portfolio logo">
            </a>
        </div>
        <nav class="footer-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'container' => false,
                'menu_class' => 'footer-nav-list'
            ));
            ?>
        </nav>
    </div>
</footer>
</body>
</html>