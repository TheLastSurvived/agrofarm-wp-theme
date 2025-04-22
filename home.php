<?php

get_header(); ?>

<!-- Баннер новостей -->
<section class="news-banner" >
    <div class="container">
        <div class="banner-content">
            <h1>Новости компании</h1>
            <p>Будьте в курсе последних событий и новостей АгроФерм</p>
        </div>
    </div>
</section>

<!-- Основной контент новостей -->
<section class="news-section">
    <div class="container">
        <div class="news-grid">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $news_query = new WP_Query(array(
                'post_type'      => 'post',
                'category_name' => 'news',
                'posts_per_page' => 6,
                'paged'         => $paged
            ));

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>
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
                        'total'     => $news_query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => __('« Назад'),
                        'next_text' => __('Вперед »'),
                    ));
                    ?>
                </div>

                <?php wp_reset_postdata();
            else : ?>
                <p class="no-news">Новостей пока нет.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>