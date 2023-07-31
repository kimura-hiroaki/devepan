<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <div class="p-mv__content">
                        <div class="p-content">
                            <div class="p-content__top">
                                <div class="c-title">
                                    <h2 class="c-title__ja">ご案内</h2>
                                    <p class="c-title__en">information</p>
                                </div>
                            </div>
                            <div class="p-content__date p-content__date--animals">
                                <p class="p-content__today">TODAY</p>
                                <div class="p-content__month">
                                    <span>2022</span>
                                    <span>9</span>
                                </div>
                                <div class="p-content__day">
                                    <span>FRY</span>
                                    <span>30</span>
                                </div>
                            </div>
                            <div class="p-content__tag c-tag">今日は開園日</div>
                            <div class="p-content__pickup">
                                <figure class="p-content__star">
                                    <img src="./images/common/bigStar.svg" alt="星のイラスト" />
                                </figure>
                                <div class="p-content__title">
                                    <img src="./images/common/pickup.svg" alt="今日のピックアップ動物" />
                                </div>
                                <figure class="p-content__img">
                                    <img src="./images/common/mv_02.png" alt="今日のピックアップ動物の写真" />
                                </figure>
                            </div>
                        </div>
                    </div>
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
                        <?php
                        global $wp_query;
                        $big = 9999999999;
                        $arg = array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'current' => max(1, get_query_var('paged')),
                            'total'   => $wp_query->max_num_pages,
                            'type'    => 'list',
                            'mid_size' => 0,
                            'prev_next' => false,
                        );
                        echo paginate_links($arg);
                        ?>
                        <?php get_template_part("template-parts/pagination-nextprev"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>