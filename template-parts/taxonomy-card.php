<?php global $query; ?>
<?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : ?>
        <?php $query->the_post(); ?>
        <?php
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
                        <object><a href="<?php echo esc_url($term_link); ?>"><?php echo $terms[0]->name; ?></a></object>
                    </div>
                    <h3 class="p-card__title"><?php the_title(); ?></h3>
                    <p class="p-card__text c-text"><?php the_excerpt(); ?>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>