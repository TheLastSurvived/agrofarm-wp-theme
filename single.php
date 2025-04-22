<?php get_header(); ?>

<!-- Баннер для страницы новости -->
<section class="news-banner">
    <div class="container">
        <div class="banner-content">
            <h1><?php the_title(); ?></h1>
            <div class="news-meta">
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                <span class="news-category"><?php the_category(', '); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Контент новости -->
<section class="news-section">
    <div class="container">
        <article class="news-single">
            <?php if (has_post_thumbnail()) : ?>
                <div class="news-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <div class="news-content">
                <?php the_content(); ?>
                
                <div class="news-tags">
                    <?php the_tags('<span>Теги:</span> ', ', ', ''); ?>
                </div>
                
                <div class="news-navigation">
                    <div class="nav-previous"><?php previous_post_link('%link', '← Предыдущая новость'); ?></div>
                    <div class="nav-next"><?php next_post_link('%link', 'Следующая новость →'); ?></div>
                </div>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>