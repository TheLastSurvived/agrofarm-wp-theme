<?php get_header(); ?>

<!-- Баннер архива новостей -->
<section class="news-banner">
    <div class="container">
        <div class="banner-content">
            <h1><?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_post();
                    echo 'Автор: ' . get_the_author();
                    rewind_posts();
                } elseif (is_day()) {
                    echo 'Архив за: ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Архив за: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Архив за: ' . get_the_date('Y');
                } else {
                    echo 'Архив';
                }
            ?></h1>
            <p>Все публикации по выбранной категории</p>
        </div>
    </div>
</section>

<!-- Основной контент архива -->
<section class="news-section">
    <div class="container">
        <div class="news-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="news-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="news-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="news-content">
                            <div class="news-meta">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                <span class="news-category"><?php the_category(', '); ?></span>
                            </div>
                            <h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="news-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more">Читать далее</a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Пагинация -->
                <div class="news-pagination">
                    <?php
                    echo paginate_links(array(
                        'total'     => $wp_query->max_num_pages,
                        'current'   => max(1, get_query_var('paged')),
                        'prev_text' => __('« Назад'),
                        'next_text' => __('Вперед »'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p class="no-news">Новостей пока нет.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>