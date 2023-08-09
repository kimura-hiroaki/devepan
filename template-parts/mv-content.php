<div class="p-mv__content">
    <div class="p-content">
        <?php if (!is_front_page()) : ?>
            <div class="p-content__top">
                <div class="c-title">
                    <h2 class="c-title__ja"><?php echo get_page_title("ja"); ?></h2>
                    <p class="c-title__en"><?php echo get_page_title("en"); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php
        if (!is_front_page()) {
            $class = "p-content__date--animals";
        } else {
            $class = "";
        }
        ?>
        <div class="p-content__date <?php echo $class; ?>">
            <p class="p-content__today">TODAY</p>
            <div class="p-content__month">
                <span><?php echo get_japan_time('year'); ?></span>
                <span><?php echo get_japan_time('month'); ?></span>
            </div>
            <div class="p-content__day">
                <span><?php echo get_japan_dayofweek(); ?></span>
                <span><?php echo get_japan_time('day'); ?></span>
            </div>
        </div>
        <div class="p-content__tag c-tag">
            <?php if (is_openGarden()) {
                echo '今日は開園日';
            } else {
                echo '今日は閉園日';
            }
            ?>
        </div>
        <?php if (is_front_page()) : ?>
            <div class="p-content__box">
                <div class="p-content__box-head">週刊旬予報</div>
                <div class="p-content__box-main">
                    <?php
                    $args = array(
                        'post_type' => array('post', 'animals'),
                        'posts_per_page' => 3,
                        'date_query' => array(
                            array(
                                'before' => 'now',
                                'after' => '1 week ago',
                                'inclusive' => true, // その日を含めるかどうか
                            )
                        )
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : ?>
                            <?php $query->the_post(); ?>
                            <p class="p-content__box-text"><?php the_title(); ?></p>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="p-content__pickup">
            <figure class="p-content__star">
                <?php echo get_image_html('/images/common/bigStar.svg', '星のイラスト') ?>
            </figure>
            <div class="p-content__title">
                <?php echo get_image_html('/images/common/pickup.svg', '今日のピックアップ動物') ?>
            </div>
            <figure class="p-content__img">
                <?php
                $daily_post_ids = get_posts_daily_random();
                $daily_post_id = $daily_post_ids[0]; //今回は1投稿だが念のため
                $daily_post_date = get_post($daily_post_id);
                $daily_post_thumbnail_id = get_post_thumbnail_id($daily_post_id);
                $daily_post_thumbnail_url = get_the_post_thumbnail_url($daily_post_id, 'medium');
                ?>
                <?php if ($daily_post_thumbnail_id) : ?>
                    <img src="<?php echo esc_url($daily_post_thumbnail_url); ?>" alt="今日のピックアップ動物の写真" />
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimg.png'); ?>" alt="no-image">
                <?php endif; ?>
            </figure>
        </div>
        <?php if (is_front_page()) : ?>
            <div class="p-content__sns">
                <div class="p-content__sns-title">SNS</div>
                <ul class="p-content__sns-links">
                    <?php if (is_setSNS('instagram')) : ?>
                        <?php $instagram_url = get_theme_mod('instagram', null); ?>
                        <li class="p-content__sns-link">
                            <a href="<?php echo esc_url($instagram_url); ?>" target="_blank">
                                <?php echo get_image_html('/images/common/instagram.svg', 'instagram') ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_setSNS('facebook')) : ?>
                        <?php $facebook_url = get_theme_mod('facebook', null); ?>
                        <li class="p-content__sns-link">
                            <a href="<?php echo esc_url($facebook_url); ?>" target="_blank">
                                <?php echo get_image_html('/images/common/facebook.svg', 'facebook') ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_setSNS('twitter')) : ?>
                        <?php $twitter_url = get_theme_mod('twitter', null); ?>
                        <li class="p-content__sns-link">
                            <a href="<?php echo esc_url($twitter_url); ?>" target="_blank">
                                <?php echo get_image_html('/images/common/twitter.svg', 'twitter') ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>