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
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Kiwi+Maru:wght@400;500&display=swap" rel="stylesheet" />
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script defer src="./js/script.js"></script>
    </head>
    <body>
        <header class="l-header">
            <div class="p-header">
                <div class="p-header__inner l-inner">
                    <h1 class="p-header__logo">
                        <a href="#">
                            <img src="./images/common/logo.svg" alt="ロゴ" />
                        </a>
                    </h1>
                    <nav class="p-header__globalNav">
                        <div class="p-globalNav">
                            <ul class="p-globalNav__menus">
                                <li class="p-globalNav__menu is-selected">
                                    <a href="#">
                                        <img src="./images/common/panda.svg" alt="HOME" />
                                        <span>HOME</span>
                                    </a>
                                </li>
                                <li class="p-globalNav__menu">
                                    <a href="#">
                                        <img src="./images/common/map.svg" alt="ご案内" />
                                        <span>ご案内</span>
                                    </a>
                                </li>
                                <li class="p-globalNav__menu js-subMenu">
                                    <a href="#">
                                        <img src="./images/common/animal.svg" alt="動物たち" />
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
                                        <img src="./images/common/star.svg" alt="園について" />
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
                                                <img src="./images/common/panda.svg" alt="HOME" />
                                                <span>HOME</span>
                                            </a>
                                        </li>
                                        <li class="p-drawer__menu">
                                            <a href="#">
                                                <img src="./images/common/map.svg" alt="ご案内" />
                                                <span>ご案内</span>
                                            </a>
                                        </li>
                                        <li class="p-drawer__menu js-drawer-subMenu is-open">
                                            <a href="">
                                                <img src="./images/common/animals.svg" alt="動物たち" />
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
                                                <img src="./images/common/star.svg" alt="園について" />
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
                                    <span>2022.09.20記事</span>
                                    <span>2022.09.22更新</span>
                                </div>
                                <div class="p-article__tag c-tag">イベント</div>
                                <h2 class="p-article__title">世界ゴリラの日祭りを開催</h2>
                                <p>
                                    平成２９年９月２４日、ダイアン・フォッシー・国際ゴリラ財団により、９月２４日は「世界ゴリラの日」に設定されました。これにちなみ、デベパン動物園では、ゴリラの保全や普及啓発に向けた取組を下記のとおり実施しますのでお知らせします。
                                </p>
                                <ul>
                                    <li><p>■日時<br>　20222022年９月２４日（土）午後2時３０分～午後4時00分</p></li>
                                    <li><p>■場所<br>　デベパン動物園 多目的ルーム</p></li>
                                    <li><p>■参加対象者<br>　小学生とその保護者</p></li>
                                    <li><p>■募集人数<br>　40名<br>※申込多数の場合は、抽選で参加者を決定します。</p></li>
                                    <li><p>■募集方法<br>　当日先着順</p></li>
                                </ul>
                                <div class="p-article__wrap">
                                    <img src="./images/info2/article_01.png" alt="ゴリラの写真" />
                                    <p>この子たちのことをもっと知ってほしい！ そんな思いで開催します。 ぜひ参加して、ゴリラについて詳しくなって下さい！ 世界ごりら日も併せて覚えてくださいね！！</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-article__nav">
                            <div class="p-nav">
                                <div class="p-nav__btn">
                                    <a href="#" class="c-btn">一覧をみる</a>
                                </div>
                                <div class="p-nav__arrows">
                                    <div class="p-nav__arrow">
                                        <a href="#">
                                            <img src="./images/common/prev-arrow2.svg" alt="前のページへ" />
                                            <span>前のページへ</span>
                                        </a>
                                    </div>
                                    <div class="p-nav__arrow">
                                        <a href="#">
                                            <span>次のページへ</span>
                                            <img src="./images/common/next-arrow2.svg" alt="次のページへ" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="l-footer l-footer--none">
            <div class="p-footer">
                <div class="p-footer__inner l-inner">
                    <div class="p-footer__img">
                        <img src="./images/common/logo.svg" alt="ロゴ" />
                    </div>
                    <nav class="p-footer__nav">
                        <ul class="p-footer__links">
                            <li class="p-footer__link">
                                <a href="#">
                                    <img src="./images/common/panda.svg" alt="HOME" />
                                    <span>HOME</span>
                                </a>
                            </li>
                            <li class="p-footer__link">
                                <a href="#">
                                    <img src="./images/common/map.svg" alt="ご案内" />
                                    <span>ご案内</span>
                                </a>
                            </li>
                            <li class="p-footer__link">
                                <a href="#">
                                    <img src="./images/common/animal.svg" alt="動物たち" />
                                    <span>動物たち</span>
                                </a>
                            </li>
                            <li class="p-footer__link">
                                <a href="#">
                                    <img src="./images/common/star.svg" alt="園について" />
                                    <span>園について</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="p-footer__copy">presenterd by debepan</p>
                </div>
            </div>
        </footer>
    </body>
</html>
