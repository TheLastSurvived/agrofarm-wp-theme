<?php get_header(); ?>

<section class="page-section">
    <div class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title section-title">', '</h1>'); ?>
            </header>

            <div class="entry-content">
                <?php
                if (has_post_thumbnail()) {
                    echo '<div class="page-featured-image">';
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                    echo '</div>';
                }

                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'your-theme-textdomain'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

           
        </article>
    </div>
</section>

<?php get_footer(); ?>