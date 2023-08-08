<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <?php get_template_part("template-parts/mv-content"); ?>
                    <div class="p-mv__main">
                        <div class="p-mv__top">
                            <div class="p-mv__top-head">
                                <div class="c-title">
                                    <h2 class="c-title__ja">動物たち</h2>
                                    <p class="c-title__en">Animals</p>
                                </div>
                            </div>
                            <div class="p-mv__slider js-mv-slider">
                                <?php
                                $args = array(
                                    'post_type' => 'animals',
                                    'posts_per_page' => 6,
                                );
                                $query = new WP_Query($args);
                                ?>
                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : ?>
                                        <?php $query->the_post(); ?>
                                        <div class="p-mv__slider-item">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo get_image_html('/images/noimg.png', 'no-image');
                                            }
                                            ?>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-mv__box p-mv__box--small">
                            <div class="p-mv__box-head c-bigText">動物たちの日常</div>
                            <div class="p-mv__box-tags">
                                <?php
                                $arg = array(
                                    'taxonomy' => 'genre',
                                    'orderby' => 'ID',
                                    'order' => 'DESC',
                                );
                                $terms = get_terms($arg);
                                ?>
                                <?php if (!is_wp_error($terms)) : ?>
                                    <?php foreach ($terms as $term) : ?>
                                        <?php $term_link = get_term_link($term); ?>
                                        <div class="p-mv__box-tag c-tag"><a href="<?php echo esc_url($term_link); ?>"><?php echo $term->name; ?></a></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_search_form(); ?>
    <div class="l-cards">
        <div class="p-cards">
            <div class="p-cards__inner l-inner">
                <div class="p-cards__wrap">
                    <?php
                    $search_word = $_GET['s'];

                    if (isset($_GET['search_genre'])) {
                        $search_genre = $_GET['search_genre'];
                        $taxquery_genre[] = array(
                            'taxonomy' => 'genre',
                            'terms' => $search_genre,
                            'field' => 'slug',
                            'operator' => 'AND',
                            'include_children' => false
                        );
                    } else {
                        $taxquery_genre[] = '';
                    }

                    if (isset($_GET['search_category'])) {
                        $search_category = $_GET['search_category'];
                        $taxquery_category[] = array(
                            'taxonomy' => 'condition',
                            'terms' => $search_category,
                            'field' => 'slug',
                            'operator' => 'AND',
                            'include_children' => false
                        );
                    } else {
                        $taxquery_category[] = '';
                    }
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $search_args = array(
                        'post_type' => 'animals',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        's' => $search_word,
                        'tax_query' => array(
                            'relation' => 'AND',
                            $taxquery_genre,
                            $taxquery_category
                        )
                    );
                    $query = new WP_Query($search_args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : ?>
                            <?php
                            $query->the_post();
                            $terms = get_the_terms(get_the_ID(), 'condition');
                            $term_link = get_term_link($terms[0]);
                            ?>
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
                                        <div class="p-card__tag c-tag">
                                            <a href="<?php echo esc_url($term_link); ?>"><?php echo $terms[0]->name; ?></a>
                                        </div>
                                        <h3 class="p-card__title"><?php the_title(); ?></h3>
                                        <p class="p-card__text c-text"><?php the_excerpt(); ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div>
                            <p>該当する内容がありません。</p>
                        </div>
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