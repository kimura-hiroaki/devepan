<?php get_header(); ?>
<main>
    <div class="l-singleMv">
        <div class="p-singleMv">
            <div class="p-singleMv__inner l-inner">
                <div class="p-singleMv__items">
                    <div class="p-singleMv__item">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimg.png'); ?>" alt="no-image">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-article">
        <div class="p-article">
            <div class="p-article__inner l-inner">
                <div class="p-article__box">
                    <div class="p-article__box-inner">
                        <div class="p-article__date">
                            <span><?php the_time('Y.m.d'); ?>記事</span>
                            <span><?php the_modified_date('Y.m.d') ?>更新</span>
                        </div>
                        <h2 class="p-article__title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>