<div class="l-search">
    <div class="p-search">
        <div class="p-search__inner l-inner">
            <h2 class="p-search__title">
                <?php echo get_image_html('/images/common/search.svg', '検索'); ?>
                <span>条件検索</span>
            </h2>
            <form role="search" action="<?php echo esc_url(home_url('/')); ?>" method="get" class="p-search__form">
                <dl class="p-search__form-row">
                    <dt class="p-search__subtitle">動物名から探す</dt>
                    <dd>
                        <?php
                        $arg = array(
                            'taxonomy' => 'genre',
                            'orderby' => 'ID',
                            'order' => 'DESC',
                        );
                        $terms = get_terms($arg);
                        $i = 1;
                        ?>
                        <?php foreach ($terms as $term) : ?>
                            <!-- <?php var_dump($term); ?> -->
                            <?php $id_name = "animal_genre0{$i}"; ?>
                            <label>
                                <input type="radio" id="<?php echo $id_name ?>" name="search_genre" value="<?php echo $term->slug; ?>" />
                                <span>・<?php echo $term->name; ?></span>
                            </label>
                            <?php $i += 1; ?>
                        <?php endforeach; ?>
                    </dd>
                </dl>
                <dl class="p-search__form-row p-search__form-row--center">
                    <dt class="p-search__subtitle">カテゴリーから探す</dt>
                    <dd>
                        <?php
                        $arg = array(
                            'taxonomy' => 'condition',
                            'orderby' => 'ID',
                            'order' => 'DESC',
                        );
                        $terms = get_terms($arg);
                        $i = 1;
                        ?>
                        <?php foreach ($terms as $term) : ?>
                            <?php $id_name = "animal_condition0{$i}"; ?>
                            <label>
                                <input type="radio" id="<?php echo $id_name ?>" name="search_category" value="<?php echo $term->slug; ?>" />
                                <span class="c-tag">#<?php echo $term->name; ?></span>
                            </label>
                            <?php $i += 1; ?>
                        <?php endforeach; ?>
                    </dd>
                </dl>
                <dl class="p-search__form-row p-search__form-row--text">
                    <dt class="p-search__subtitle">名前から探す</dt>
                    <dd>
                        <input type="text" id="search" name="s" placeholder="リンリン" value="<?php the_search_query(); ?>" />
                    </dd>
                </dl>
            </form>
        </div>
    </div>
</div>