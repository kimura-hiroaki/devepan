<footer class="l-footer">
    <div class="p-footer">
        <div class="p-footer__inner l-inner">
            <div class="p-footer__img">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo get_image_html('/images/common/logo.svg', 'ロゴ'); ?>
                </a>
            </div>
            <nav class="p-footer__nav">
                <ul class="p-footer__links">
                    <li class="p-footer__link">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo get_image_html('/images/common/panda.svg', 'HOME'); ?>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="p-footer__link">
                        <a href="<?php echo esc_url(home_url('/info')); ?>">
                            <?php echo get_image_html('/images/common/map.svg', 'ご案内'); ?>
                            <span>ご案内</span>
                        </a>
                    </li>
                    <li class="p-footer__link">
                        <a href="<?php echo esc_url(home_url('/animals')); ?>">
                            <?php echo get_image_html('/images/common/animal.svg', '動物たち'); ?>
                            <span>動物たち</span>
                        </a>
                    </li>
                    <li class="p-footer__link">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">
                            <?php echo get_image_html('/images/common/star.svg', '園について'); ?>
                            <span>園について</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="p-footer__copy">presenterd by debepan</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>