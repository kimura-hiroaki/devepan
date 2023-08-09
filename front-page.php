<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <?php get_template_part("template-parts/mv-content"); ?>
                    <div class="p-mv__items js-mv-slider">
                        <?php for ($i = 1; $i < 4; $i++) : ?>
                            <?php $mainview_name = "mainview_{$i}"; ?>
                            <?php if (get_field($mainview_name)) : ?>
                                <?php
                                $mainview = get_field($mainview_name);
                                $mainview_pc_url = $mainview['pc'];
                                $mainview_sp_url = $mainview['sp'];
                                ?>
                                <?php if ($mainview_pc_url != "" || $mainview_sp_url != "") : ?>
                                    <picture class="p-mv__item">
                                        <source srcset="<?php echo esc_url($mainview_pc_url); ?>" media="(min-width:768px)" />
                                        <img src="<?php echo esc_url($mainview_sp_url); ?>" alt="Welcome to DEBEPAN" />
                                    </picture>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="l-info">
        <div class="p-info">
            <div class="p-info__inner l-inner">
                <div class="p-info__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">ご案内</h2>
                        <div class="c-title__img">
                            <?php echo get_image_html('/images/common/title.svg', '足跡のイラスト'); ?>
                        </div>
                        <p class="c-title__en">information</p>
                    </div>
                </div>
                <div class="p-info__units">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);
                    $i = 1;
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : ?>
                            <?php
                            $query->the_post();
                            $category = get_the_category();
                            ?>
                            <div class="p-info__unit">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="p-info__unit-number">
                                        <span>0<?php echo $i; ?></span>
                                    </div>
                                    <div class="p-info__unit-tag c-tag">
                                        <object><?php my_the_post_category(true); ?></object>
                                    </div>
                                    <p class="p-info__unit-text c-text"><?php the_title(); ?></p>
                                </a>
                            </div>
                            <?php $i += 1; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="p-info__tree01 u-desktop">
                    <?php echo get_image_html('/images/top/info_tree_01.png', '木のイラスト'); ?>
                </div>
                <div class="p-info__tree02 u-desktop">
                    <?php echo get_image_html('/images/top/info_tree_01.png', '木のイラスト'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    $about_id = 12; // aboutページのIDに置き換える
    $about_data = get_post($about_id);
    if ($about_data) : ?>
        <?php
        $title = $about_data->post_title;
        $thumbnail_id = get_post_thumbnail_id($about_id);
        $thumbnail_url = get_the_post_thumbnail_url($about_id, 'full');
        $excerpt = get_the_excerpt($about_id);
        ?>
        <section class="l-about">
            <div class="p-about">
                <div class="p-about__inner l-inner">
                    <div class="p-about__title">
                        <div class="c-title">
                            <h2 class="c-title__ja"><?php echo $title; ?></h2>
                            <div class="c-title__img">
                                <?php echo get_image_html('/images/common/title.svg', '足跡のイラスト'); ?>
                            </div>
                            <p class="c-title__en">about debepan</p>
                        </div>
                    </div>
                    <p class="p-about__text c-text">
                        <?php echo $excerpt; ?>
                    </p>
                    <div class="p-about__btn">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-btn"> もっと見る </a>
                    </div>
                    <div class="p-about__map">
                        <picture class="p-about__map-tag">
                            <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/top/about_02_pc.png'); ?>" media="(min-width:768px)" />
                            <?php echo get_image_html('/images/top/about_02_sp.png', 'デベパンのアニマルマップ'); ?>
                        </picture>
                        <figure class="p-about__map-img">
                            <?php if ($thumbnail_id) : ?>
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="地図" />
                            <?php else : ?>
                                <?php echo get_image_html('/images/noimg.png', 'no-image'); ?>
                            <?php endif; ?>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="l-animals">
        <div class="p-animals">
            <div class="p-animals__inner l-inner">
                <div class="p-animals__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">動物たち</h2>
                        <div class="c-title__img">
                            <?php echo get_image_html('/images/common/title.svg', '足跡のイラスト'); ?>
                        </div>
                        <p class="c-title__en">about animals</p>
                    </div>
                </div>
                <?php if (get_field('animal') != "") : ?>
                    <?php $choice_animals = get_field('animal'); ?>
                    <div class="p-animals__cards">
                        <?php for ($i = 1; $i < 3; $i++) : ?>
                            <?php
                            $choice_name = "choice_{$i}";
                            $choice_animal_id = $choice_animals[$choice_name];
                            $choice_animal_data = get_post($choice_animal_id);
                            $title = $choice_animal_data->post_title;
                            $thumbnail_id = get_post_thumbnail_id($choice_animal_id);
                            $thumbnail_url = get_the_post_thumbnail_url($choice_animal_id, 'full');
                            $time = date('Y.m.d', strtotime($choice_animal_data->post_date));
                            $excerpt = $choice_animal_data->post_excerpt;
                            $area = get_area($choice_animal_id);
                            $tags = get_the_terms($choice_animal_id, 'item_tag');
                            ?>
                            <div class="p-animals__cards">
                                <?php
                                if ($i == 1) {
                                    $add_class = "";
                                } else {
                                    $add_class = "p-animals__wrap--reverse";
                                }
                                ?>
                                <div class="p-animals__wrap <?php echo $add_class; ?>">
                                    <div class="p-animals__card">
                                        <div class="p-animals__card--top">
                                            <figure class="p-animals__card-img">
                                                <?php if ($thumbnail_id) : ?>
                                                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo $title; ?>" />
                                                <?php else : ?>
                                                    <?php echo get_image_html('/images/noimg.png', 'no-image') ?>
                                                <?php endif; ?>
                                            </figure>
                                            <div class="p-animals__card--date c-tag c-tag--none"><?php echo $time; ?></div>
                                        </div>
                                        <div class="p-animals__card--bottom">
                                            <?php if (!empty($tags) && !is_wp_error($tags)) : ?>
                                                <?php foreach ($tags as $tag) : ?>
                                                    <div class="p-animals__card-tag c-tag c-tag--cat">#<?php echo $tag->name; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                    if ($i == 1) {
                                        $add_class = "";
                                    } else {
                                        $add_class = "p-animals__card--sub02";
                                    }
                                    ?>
                                    <div class="p-animals__card p-animals__card--sub <?php echo $add_class; ?>">
                                        <h3 class="p-animals__card-title">動物名：<?php echo $title ?></h3>
                                        <p class="p-animals__card-area">出没エリア：<?php echo $area; ?></p>
                                        <p class="p-animals__card-text c-text">
                                            <?php echo $excerpt; ?>
                                        </p>
                                        <div class="p-animals__card-btn">
                                            <a href="<?php echo esc_url(get_permalink($choice_animal_id)); ?>" class="c-btn">
                                                もっと見る
                                                <?php echo get_image_html('/images/common/news-arrow2.svg', ''); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($i == 1) : ?>
                                    <hr class="p-animals__border" />
                                <?php endif; ?>
                            </div>
                        <?php endfor; ?>
                        <div class="p-animals__tree01 u-desktop">
                            <?php echo get_image_html('/images/top/animals_tree_01.png', '木のイラスト'); ?>
                        </div>
                        <div class="p-animals__tree02 u-desktop">
                            <?php echo get_image_html('/images/top/animals_tree_02.png', '木のイラスト'); ?>
                        </div>
                        <div class="p-animals__tree03 u-desktop">
                            <?php echo get_image_html('/images/top/animals_tree_03.png', '木のイラスト'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
    </section>
    <section class="l-access">
        <div class="p-access">
            <div class="p-access__inner l-inner">
                <div class="p-access__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">アクセス</h2>
                        <div class="c-title__img">
                            <?php echo get_image_html('/images/common/title.svg', '足跡のイラスト'); ?>
                        </div>
                        <p class="c-title__en c-title__en--white">access</p>
                    </div>
                </div>
                <picture class="p-access__map">
                    <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/top/access_01.jpg'); ?>" media="(min-width:768px)" />
                    <?php echo get_image_html('/images/top/access_01_sp.png', '地図'); ?>
                </picture>
                <div class="p-access__box">
                    <div class="p-access__info">
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>住所</p>
                            <p class="p-access__unit-text c-text">
                                〒000-0000　<br class="u-mobile" />
                                東京都ぞでぃ区デベ町2丁目-25-25
                            </p>
                        </div>
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>近隣施設</p>
                            <p class="p-access__unit-text c-text">お車でのご来園がおすすめです。</p>
                        </div>
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>アクセス</p>
                            <p class="p-access__unit-text c-text">お車でのご来園がおすすめです。</p>
                            <picture class="p-access__unit-img">
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/top/access_pc.svg'); ?>" media="(min-width:768px)" />
                                <?php echo get_image_html('/images/top/access_sp.png', '所要時間'); ?>
                            </picture>
                        </div>
                    </div>
                    <figure class="p-access__img">
                        <?php echo get_image_html('/images/top/access_02.png', '来てね'); ?>
                    </figure>
                </div>
                <div class="p-access__tree01 u-desktop">
                    <?php echo get_image_html('/images/top/access_tree_01.png', '木のイラスト'); ?>
                </div>
                <div class="p-access__tree02 u-desktop">
                    <?php echo get_image_html('/images/top/access_tree_02.png', '木のイラスト'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>