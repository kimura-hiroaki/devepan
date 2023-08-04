<?php
$search_word = $_GET['s'];
$search_genre = $_GET['search_genre'];
$search_category = $_GET['search_category'];

if (isset($search_genre)) {
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

if (isset($search_category)) {
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

$search_args = array(
    'post_type' => 'animals',
    's' => $search_word,
    'tax_query' => array(
        'relation' => 'AND',
        $taxquery_genre,
        $taxquery_category
    )
);

$the_query = new WP_Query($search_args);
get_search_form();
?>

<?php /* Start the Loop */ ?>
<?php if ($the_query->found_posts) : ?>
    <?php while ($the_query->have_posts()) {
        $the_query->the_post();

        the_title();
    };
    wp_reset_postdata(); ?>
<?php else : ?>
    <div>
        <p>該当する内容がありません。</p>
    </div>
<?php endif; ?>