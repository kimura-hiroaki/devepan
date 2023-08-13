<?php get_header(); ?>
<main>
    <div class="l-singleMv">
        <div class="p-singleMv">
            <div class="p-singleMv__inner l-inner">
                <div class="p-singleMv__items js-mv-slider">
                    <div class="p-singleMv__item">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            echo get_image_html('/images/noimg.png', 'no-image');
                        }
                        ?>
                    </div>
                    <?php $field_name = "mainview" ?>
                    <?php if (get_field($field_name) != "") : ?>
                        <?php for ($i = 1; $i < 3; $i++) : ?>
                            <?php
                            $mainview = get_field($field_name);
                            $array_name = "image_{$i}";
                            $mainview_url = $mainview[$array_name];
                            ?>
                            <?php if ($mainview_url != "") : ?>
                                <div class="p-singleMv__item">
                                    <img src="<?php echo esc_url($mainview_url); ?>" alt="メインビュー" />
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="l-article">
        <div class="p-article">
            <div class="p-article__inner l-inner">
                <div class="p-article__box">
                    <div class="p-article__box-inner">
                        <div class="p-article__text c-text">年齢：<?php the_field("age"); ?></div>
                        <div class="p-article__text c-text">生まれ：<?php the_field("birth"); ?></div>
                        <h2 class="p-article__title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <?php
                        // 現在の投稿のIDを取得
                        $current_post_id = get_the_ID();
                        // カスタム投稿タイプで現在の投稿に関連するタクソノミーのタームを取得
                        $terms = get_the_terms($current_post_id, 'genre');
                        $args = array(
                            'post_type' => 'animals',
                            'posts_per_page' => 3,
                            'post__not_in' => array($current_post_id),
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'genre',
                                    'field' => 'id',
                                    'terms' => $terms[0]->term_id,
                                ),
                            )
                        );
                        $query = new WP_Query($args);
                        ?>
                        <?php if ($query->have_posts()) : ?>
                            <div class="p-article__subTitle c-subTitle">別の<?php echo $terms[0]->name; ?>を見る</div>
                            <div class="p-article__items">
                                <?php while ($query->have_posts()) : ?>
                                    <?php $query->the_post(); ?>
                                    <div class="p-article__item">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo get_image_html('/images/noimg.png', 'no-image');
                                            }
                                            ?>
                                            <div class="p-article__item__title"><?php the_title(); ?></div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="p-article__nav">
                    <div class="p-nav">
                        <div class="p-nav__btn">
                            <a href="<?php echo esc_url(home_url('/animals')); ?>" class="c-btn">一覧をみる</a>
                        </div>
                        <?php get_template_part("template-parts/pagination-single"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>