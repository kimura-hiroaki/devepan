<?php global $query; ?>
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
<?php else : ?>
    <?php echo get_image_html('/images/animals/rinrin.jpg', 'パンダ'); ?>
<?php endif; ?>