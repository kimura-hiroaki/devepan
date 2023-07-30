<div class="p-nav__arrows">
    <div class="p-nav__arrow">
        <?php
        $image_html = get_image_html('/images/common/prev-arrow2.svg', '前のページへ');
        $text = '前のページへ';
        $link_title = $image_html . '<span>' . $text . '</span>';
        if (is_single()) {
            previous_post_link(
                '%link',
                $link_title
            );
        } else {
            previous_posts_link($link_title);
        }
        ?>
    </div>
    <div class="p-nav__arrow">
        <?php
        $image_html = get_image_html('/images/common/next-arrow2.svg', '次のページへ');
        $text = '次のページへ';
        $link_title = '<span>' . $text . '</span>' . $image_html;
        if (is_single()) {
            next_post_link(
                '%link',
                $link_title
            );
        } else {
            next_posts_link($link_title);
        }
        ?>
    </div>
</div>