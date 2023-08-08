<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <?php get_template_part("template-parts/mv-content"); ?>
                    <div class="p-mv__main p-mv__main--info">
                        <div class="p-mv__top">
                            <div class="p-mv__top-head">
                                <div class="c-title">
                                    <h2 class="c-title__ja">ご案内</h2>
                                    <p class="c-title__en">information</p>
                                </div>
                            </div>
                            <p class="p-mv__top-text c-text">デベパン動物園の今を発信。テキストテキストテキスト</p>
                            <div class="p-mv__slider p-mv__slider--info js-mv-slider">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : ?>
                                        <?php the_post(); ?>
                                        <div class="p-mv__slider-item p-mv__slider-item--info">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo get_image_html('/images/noimg.png', 'no-image');
                                            }
                                            ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-cards">
        <div class="p-cards">
            <div class="p-cards__inner l-inner">
                <div class="p-cards__wrap">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <div class="p-cards__card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="p-card">
                                        <figure class="p-card__img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo get_image_html('/images/noimg.png', 'no-image');
                                            }
                                            ?>
                                        </figure>
                                        <div class="p-card__date">
                                            <p class="p-card__date-post">投稿日：<?php the_time('Y.m.d'); ?></p>
                                            <p class="p-card__date-update">更新日：<?php the_modified_date('Y.m.d') ?></p>
                                        </div>
                                        <div class="p-card__tag c-tag"><?php my_the_post_category(true) ?></div>
                                        <h3 class="p-card__title"><?php the_title(); ?></h3>
                                        <p class="p-card__text c-text"><?php the_excerpt(); ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="p-cards__nav">
                    <div class="p-nav">
                        <?php the_display_pagenation($query); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>