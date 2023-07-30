<?php get_header(); ?>
<main>
    <div class="l-singleMv">
        <div class="p-singleMv">
            <div class="p-singleMv__inner l-inner">
                <div class="p-singleMv__items">
                    <div class="p-singleMv__item">
                        <img src="./images/info2/mv_01.png" alt="メインビュー" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-article">
        <div class="p-article">
            <div class="p-article__inner l-inner">
                <div class="p-article__box">
                    <div class="p-article__box-inner">
                        <div class="p-article__date">
                            <span><?php the_time('Y.m.d'); ?>記事</span>
                            <span><?php the_modified_date('Y.m.d') ?>更新</span>
                        </div>
                        <div class="p-article__tag c-tag"><?php my_the_post_category(true) ?></div>
                        <h2 class="p-article__title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="p-article__nav">
                    <div class="p-nav">
                        <div class="p-nav__btn">
                            <a href="#" class="c-btn">一覧をみる</a>
                        </div>
                        <div class="p-nav__arrows">
                            <div class="p-nav__arrow">
                                <?php
                                $image_html = get_image_html('/images/common/prev-arrow2.svg', '前のページへ');
                                $text = '前のページへ';
                                $link_title = $image_html . '<span>' . $text . '</span>';
                                previous_post_link(
                                    '%link',
                                    $link_title
                                );
                                ?>
                            </div>
                            <div class="p-nav__arrow">
                                <?php
                                $image_html = get_image_html('/images/common/next-arrow2.svg', '次のページへ');
                                $text = '次のページへ';
                                $link_title = '<span>' . $text . '</span>' . $image_html;
                                previous_post_link(
                                    '%link',
                                    $link_title
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>