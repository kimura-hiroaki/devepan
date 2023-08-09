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
                                    <h2 class="c-title__ja"><?php echo get_page_title("ja"); ?></h2>
                                    <p class="c-title__en"><?php echo get_page_title("en"); ?></p>
                                </div>
                            </div>
                            <div class="p-mv__slider js-mv-slider">
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
                                <?php get_template_part("template-parts/taxonomy-thumbnail"); ?>
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
                    <?php $query = new WP_Query($search_args); ?>
                    <?php get_template_part("template-parts/taxonomy-card"); ?>
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