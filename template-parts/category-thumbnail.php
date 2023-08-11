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
<?php else : ?>
    <div class="p-mv__slider-item p-mv__slider-item--info">
        <?php echo get_image_html('/images/animals/rinrin.jpg', 'パンダ'); ?>
    </div>
<?php endif; ?>