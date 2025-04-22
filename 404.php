<?php get_header(); ?>

<section class="error-404 not-found">
    <div class="container">
        <div class="page-content">
            <h1>404</h1>
            <h2><?php esc_html_e('Страница не найдена', 'your-theme-textdomain'); ?></h2>
            <p><?php esc_html_e('К сожалению, запрашиваемая страница не существует или была перемещена.', 'your-theme-textdomain'); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">
                <?php esc_html_e('Вернуться на главную', 'your-theme-textdomain'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>