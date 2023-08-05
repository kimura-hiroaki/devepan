<div class="p-nav">
    <?php
    $prev_image_html = get_image_html('/images/common/prev-arrow2.svg', '前のページへ');
    $prev_text = '前のページへ';
    $prev_link_title = $prev_image_html . '<span>' . $prev_text . '</span>';
    $next_image_html = get_image_html('/images/common/next-arrow2.svg', '次のページへ');
    $next_text = '次のページへ';
    $next_link_title = '<span>' . $next_text . '</span>' . $next_image_html;
    $big = 9999999999;
    $arg = array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total'   => $query->max_num_pages,
        'type'    => 'list',
        'mid_size' => 0,
        'prev_next' => true,
        'prev_text' => $prev_link_title,
        'next_text' => $next_link_title,
    );
    echo paginate_links($arg);
    ?>
</div>