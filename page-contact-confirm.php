<?php
/*
Template Name: confirm
*/
?>
<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-pageMv">
            <div class="p-pageMv__inner l-inner">
                <div class="p-pageMv__box">
                    <div class="p-pageMv__box-head">お問い合わせフォーム</div>
                    <div class="p-pageMv__box-main">
                        <p class="p-pageMv__box-text">動物園に関するお問い合わせは、こちらのお問い合わせフォームよりご連絡ください。</p>
                        <p class="p-pageMv__caution">※　注意書きがあれば・・・</p>
                        <p class="p-pageMv__caution">※　注意書きがあれば・・・</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-contact">
        <div class="p-contact">
            <div class="p-contact__inner l-inner">
                <div class="p-contact__box">
                    <div class="p-contact__head">
                        <div class="p-contact__step">
                            <div class="p-contact__step-item">
                                <div class="p-contact__step-check"></div>
                                <p class="p-contact__step-text">入力</p>
                            </div>
                            <div class="p-contact__step-item is-checked">
                                <div class="p-contact__step-check"></div>
                                <p class="p-contact__step-text">確認</p>
                            </div>
                            <div class="p-contact__step-item">
                                <div class="p-contact__step-check"></div>
                                <p class="p-contact__step-text">完了</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-contact__main">
                        <?php echo do_shortcode('[contact-form-7 id="7d6251d" title="confirm"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>