<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <?php get_template_part("template-parts/mv-content"); ?>
                    <div class="p-mv__main p-mv__main--info">
                        <div class="p-mv__top">
                            <div class="p-mv__top-head">
                                <div class="c-title">
                                    <h2 class="c-title__ja">ご案内</h2>
                                    <p class="c-title__en">information</p>
                                </div>
                            </div>
                            <p class="p-mv__top-text c-text">デベパン動物園の今を発信。テキストテキストテキスト</p>
                            <div class="p-mv__slider p-mv__slider--info js-mv-slider">
                                <?php get_template_part("template-parts/category-thumbnail"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-cards">
        <div class="p-cards">
            <div class="p-cards__inner l-inner">
                <div class="p-cards__wrap">
                    <?php get_template_part("template-parts/category-card"); ?>
                </div>
                <div class="p-cards__nav">
                    <div class="p-nav">
                        <?php global $wp_query; ?>
                        <?php the_display_pagenation($wp_query); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>