
    <!-- Подвал -->
    <footer>
    <?php wp_footer(); ?>
        <div class="container">
            <div class="footer-links">
            <nav>
                <a class="logo" href="<?php echo home_url(); ?>">Агро<span>Ферм</span></a>
                
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                ));
                ?>
            </nav>
            </div>
            <p>&copy; 2025 АгроФерм. Все права защищены.</p>
        </div>
    </footer>
    <?php wp_footer(); ?> <!-- Для скриптов WordPress -->

</body>
</html>