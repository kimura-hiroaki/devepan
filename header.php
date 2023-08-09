<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="robots" content="noindex" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>デベパン動物園</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="summary" />
    <!-- ファビコン -->
    <link rel="icon" href="#" />

    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <div class="p-header">
            <div class="p-header__inner l-inner">
                <h1 class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo get_image_html('/images/common/logo.svg', 'ロゴ'); ?>
                    </a>
                </h1>
                <nav class="p-header__globalNav">
                    <div class="p-globalNav">
                        <ul class="p-globalNav__menus">
                            <?php
                            if (is_front_page()) {
                                $add_class_selected = "is-selected";
                            } else {
                                $add_class_selected = "";
                            }
                            ?>
                            <li class="p-globalNav__menu <?php echo $add_class_selected; ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php echo get_image_html('/images/common/panda.svg', 'HOME'); ?>
                                    <span>HOME</span>
                                </a>
                            </li>
                            <?php
                            if (is_home() || is_category()) {
                                $add_class_selected = "is-selected";
                            } else {
                                $add_class_selected = "";
                            }
                            ?>
                            <li class="p-globalNav__menu <?php echo $add_class_selected; ?>">
                                <a href="<?php echo esc_url(home_url('/info')); ?>">
                                    <?php echo get_image_html('/images/common/map.svg', 'ご案内'); ?>
                                    <span>ご案内</span>
                                </a>
                            </li>
                            <?php
                            if (is_post_type_archive('animals') || is_tax(array('genre', 'condition')) || is_search()) {
                                $add_class_selected = "is-selected";
                            } else {
                                $add_class_selected = "";
                            }
                            ?>
                            <li class="p-globalNav__menu js-subMenu <?php echo $add_class_selected; ?>">
                                <a href="<?php echo esc_url(home_url('/animals')); ?>">
                                    <?php echo get_image_html('/images/common/animals.svg', '動物たち'); ?>
                                    <span>動物たち</span>
                                </a>
                                <div class="p-globalNav__nav">
                                    <ul class="p-globalNav__subMenus">
                                        <?php
                                        $arg = array(
                                            'taxonomy' => 'genre',
                                            'orderby' => 'ID',
                                            'order' => 'DESC',
                                        );
                                        $terms = get_terms($arg);
                                        ?>
                                        <?php if (!is_wp_error($terms)) : ?>
                                            <?php foreach ($terms as $term) : ?>
                                                <?php $term_link = get_term_link($term); ?>
                                                <li class="p-globalNav__subMenu">
                                                    <a href="<?php echo esc_url($term_link); ?>"><span>・<?php echo $term->name; ?></span></a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                            <?php
                            if (is_page('about')) {
                                $add_class_selected = "is-selected";
                            } else {
                                $add_class_selected = "";
                            }
                            ?>
                            <li class="p-globalNav__menu <?php echo $add_class_selected; ?>">
                                <a href="<?php echo esc_url(home_url('/about')); ?>">
                                    <?php echo get_image_html('/images/common/star.svg', '園について'); ?>
                                    <span>園について</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="p-globalNav__contact">
                            <li class="p-globalNav__contact-link">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                                    <span class="u-desktop">お問い合わせ</span>
                                    <div class="p-globalNav__contact-img"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="p-header__hamburger">
                    <div class="p-hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="p-header__drawer">
                    <div class="p-drawer">
                        <div class="p-drawer__inner l-inner">
                            <nav class="p-drawer__nav">
                                <ul class="p-drawer__menus">
                                    <li class="p-drawer__menu">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <?php echo get_image_html('/images/common/panda.svg', 'HOME'); ?>
                                            <span>HOME</span>
                                        </a>
                                    </li>
                                    <li class="p-drawer__menu">
                                        <a href="<?php echo esc_url(home_url('/info')); ?>">
                                            <?php echo get_image_html('/images/common/map.svg', 'ご案内'); ?>
                                            <span>ご案内</span>
                                        </a>
                                    </li>
                                    <li class="p-drawer__menu js-drawer-subMenu is-open">
                                        <a href="">
                                            <?php echo get_image_html('/images/common/animals.svg', '動物たち'); ?>
                                            <span>動物たち</span>
                                        </a>
                                        <ul class="p-drawer__subMenus">
                                            <?php
                                            $arg = array(
                                                'taxonomy' => 'genre',
                                                'orderby' => 'ID',
                                                'order' => 'DESC',
                                            );
                                            $terms = get_terms($arg);
                                            ?>
                                            <?php if (!is_wp_error($terms)) : ?>
                                                <?php foreach ($terms as $term) : ?>
                                                    <?php $term_link = get_term_link($term); ?>
                                                    <li class="p-drawer__subMenu">
                                                        <a href="<?php echo esc_url($term_link); ?>"><span>・<?php echo $term->name; ?></span></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                    <li class="p-drawer__menu">
                                        <a href="<?php echo esc_url(home_url('/about')); ?>">
                                            <?php echo get_image_html('/images/common/star.svg', '園について'); ?>
                                            <span>園について</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>