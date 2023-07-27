<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="robots" content="noindex" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>デベパン</title>
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
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="ロゴ" />
                    </a>
                </h1>
                <nav class="p-header__globalNav">
                    <div class="p-globalNav">
                        <ul class="p-globalNav__menus">
                            <li class="p-globalNav__menu is-selected">
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/panda.svg"
                                        alt="HOME" />
                                    <span>HOME</span>
                                </a>
                            </li>
                            <li class="p-globalNav__menu">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/map.svg"
                                        alt="ご案内" />
                                    <span>ご案内</span>
                                </a>
                            </li>
                            <li class="p-globalNav__menu js-subMenu">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/animal.svg"
                                        alt="動物たち" />
                                    <span>動物たち</span>
                                </a>
                                <div class="p-globalNav__nav">
                                    <ul class="p-globalNav__subMenus">
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・パンダ</span></a>
                                        </li>
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・キリン</span></a>
                                        </li>
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・レッサーパンダ</span></a>
                                        </li>
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・ゴリラ</span></a>
                                        </li>
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・ハシビロコウ</span></a>
                                        </li>
                                        <li class="p-globalNav__subMenu">
                                            <a href="#"><span>・カピバラ</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="p-globalNav__menu">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/star.svg"
                                        alt="園について" />
                                    <span>園について</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="p-globalNav__contact">
                            <li class="p-globalNav__contact-link">
                                <a href="#">
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
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/panda.svg"
                                                alt="HOME" />
                                            <span>HOME</span>
                                        </a>
                                    </li>
                                    <li class="p-drawer__menu">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/map.svg"
                                                alt="ご案内" />
                                            <span>ご案内</span>
                                        </a>
                                    </li>
                                    <li class="p-drawer__menu js-drawer-subMenu is-open">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/animals.svg"
                                                alt="動物たち" />
                                            <span>動物たち</span>
                                        </a>
                                        <ul class="p-drawer__subMenus">
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・パンダ</span></a>
                                            </li>
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・キリン</span></a>
                                            </li>
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・レッサーパンダ</span></a>
                                            </li>
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・ゴリラ</span></a>
                                            </li>
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・ハシビロコウ</span></a>
                                            </li>
                                            <li class="p-drawer__subMenu">
                                                <a href="#"><span>・カピバラ</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="p-drawer__menu">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/star.svg"
                                                alt="園について" />
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