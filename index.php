<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <div class="p-mv__content">
                        <div class="p-content">
                            <div class="p-content__date">
                                <p class="p-content__today">TODAY</p>
                                <div class="p-content__month">
                                    <span><?php echo get_japan_time('year'); ?></span>
                                    <span><?php echo get_japan_time('month'); ?></span>
                                </div>
                                <div class="p-content__day">
                                    <span><?php echo get_japan_dayofweek(); ?></span>
                                    <span><?php echo get_japan_time('day'); ?></span>
                                </div>
                            </div>
                            <div class="p-content__tag c-tag">
                                <?php if (is_openGarden()) {
                                    echo '今日は開園日';
                                } else {
                                    echo '今日は閉園日';
                                }
                                ?>
                            </div>
                            <div class="p-content__box">
                                <div class="p-content__box-head">週刊旬予報</div>
                                <div class="p-content__box-main">
                                    <p class="p-content__box-text">パンダと触れ合う</p>
                                    <p class="p-content__box-text">キリンにご飯あげよう</p>
                                    <p class="p-content__box-text">カピバラと歩こう</p>
                                </div>
                            </div>
                            <div class="p-content__pickup">
                                <figure class="p-content__star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/bigStar.svg"
                                        alt="星のイラスト" />
                                </figure>
                                <div class="p-content__title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/pickup.svg"
                                        alt="今日のピックアップ動物" />
                                </div>
                                <figure class="p-content__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_02.png"
                                        alt="今日のピックアップ動物の写真" />
                                </figure>
                            </div>
                            <div class="p-content__sns">
                                <div class="p-content__sns-title">SNS</div>
                                <ul class="p-content__sns-links">
                                    <li class="p-content__sns-link">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.svg"
                                                alt="instagram" />
                                        </a>
                                    </li>
                                    <li class="p-content__sns-link">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/facebook.svg"
                                                alt="facebook" />
                                        </a>
                                    </li>
                                    <li class="p-content__sns-link">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/twitter.svg"
                                                alt="twitter" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-mv__items js-mv-slider">
                        <picture class="p-mv__item">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_pc.png"
                                media="(min-width:768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png"
                                alt="Welcome to DEBEPAN" />
                        </picture>
                        <picture class="p-mv__item">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_pc.png"
                                media="(min-width:768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png"
                                alt="Welcome to DEBEPAN" />
                        </picture>
                        <picture class="p-mv__item">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_pc.png"
                                media="(min-width:768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png"
                                alt="Welcome to DEBEPAN" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="l-info">
        <div class="p-info">
            <div class="p-info__inner l-inner">
                <div class="p-info__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">ご案内</h2>
                        <div class="c-title__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/title.svg"
                                alt="足跡のイラスト" />
                        </div>
                        <p class="c-title__en">information</p>
                    </div>
                </div>
                <div class="p-info__units">
                    <div class="p-info__unit">
                        <a href="#">
                            <div class="p-info__unit-number">
                                <span>01</span>
                            </div>
                            <div class="p-info__unit-tag c-tag">イベント</div>
                            <p class="p-info__unit-text c-text">世界ゴリラの日祭りを開催</p>
                        </a>
                    </div>
                    <div class="p-info__unit">
                        <a href="#">
                            <div class="p-info__unit-number">
                                <span>02</span>
                            </div>
                            <div class="p-info__unit-tag c-tag">動物のこと</div>
                            <p class="p-info__unit-text c-text">キリンの赤ちゃんの名前決定！</p>
                        </a>
                    </div>
                    <div class="p-info__unit">
                        <a href="#">
                            <div class="p-info__unit-number">
                                <span>03</span>
                            </div>
                            <div class="p-info__unit-tag c-tag">園内情報</div>
                            <p class="p-info__unit-text c-text">パンダ厩舎の工事が始まります</p>
                        </a>
                    </div>
                </div>
                <div class="p-info__tree01 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/info_tree_01.png" alt="木のイラスト" />
                </div>
                <div class="p-info__tree02 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/info_tree_01.png" alt="木のイラスト" />
                </div>
            </div>
        </div>
    </section>
    <section class="l-about">
        <div class="p-about">
            <div class="p-about__inner l-inner">
                <div class="p-about__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">園について</h2>
                        <div class="c-title__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/title.svg"
                                alt="足跡のイラスト" />
                        </div>
                        <p class="c-title__en">about debepan</p>
                    </div>
                </div>
                <p class="p-about__text c-text">
                    当園は、パンダをはじめとする様々な動物たちがのびのび生活している国内最大級の動物園です。 全100匹の動物たちが園内で皆様をお待ちしています。 ぜひ当園に登園して見て下さい。
                </p>
                <div class="p-about__btn">
                    <a href="#" class="c-btn"> もっと見る </a>
                </div>
                <div class="p-about__map">
                    <picture class="p-about__map-tag">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/about_02_pc.png"
                            media="(min-width:768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/about_02_sp.png"
                            alt="デベパンのアニマルマップ" />
                    </picture>
                    <figure class="p-about__map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/about_01.jpg" alt="地図" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="l-animals">
        <div class="p-animals">
            <div class="p-animals__inner l-inner">
                <div class="p-animals__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">動物たち</h2>
                        <div class="c-title__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/title.svg"
                                alt="足跡のイラスト" />
                        </div>
                        <p class="c-title__en">about animals</p>
                    </div>
                </div>
                <div class="p-animals__cards">
                    <div class="p-animals__wrap">
                        <div class="p-animals__card">
                            <div class="p-animals__card--top">
                                <figure class="p-animals__card-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_panda.jpg"
                                        alt="パンダ" />
                                </figure>
                                <div class="p-animals__card--date c-tag c-tag--none">2022.06.10</div>
                            </div>
                            <div class="p-animals__card--bottom">
                                <div class="p-animals__card-tag c-tag c-tag--cat">#動物と遊ぶ</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#かわいい</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#白黒</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#動物園</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#笹</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#ふわふわ</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#木登り</div>
                            </div>
                        </div>
                        <div class="p-animals__card p-animals__card--sub">
                            <h3 class="p-animals__card-title">動物名：リンリン</h3>
                            <p class="p-animals__card-area">出没エリア：パンダエリア</p>
                            <p class="p-animals__card-text c-text">
                                リンリンは園に来た時からおてんば娘。<br />
                                木登りが大好きですが、木から降りれなくて飼育員に助けられることもしばしば。<br />
                                そんなリンリンですがとってもかわいい子なので見に来てみては？<br />
                            </p>
                            <div class="p-animals__card-btn">
                                <a href="#" class="c-btn">
                                    もっと見る
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/news-arrow2.svg"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr class="p-animals__border" />
                    <div class="p-animals__wrap p-animals__wrap--reverse">
                        <div class="p-animals__card">
                            <div class="p-animals__card--top">
                                <figure class="p-animals__card-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_lesserpansa.jpg"
                                        alt="レッサーパンダ" />
                                </figure>
                                <div class="p-animals__card--date c-tag c-tag--none">2022.06.10</div>
                            </div>
                            <div class="p-animals__card--bottom">
                                <div class="p-animals__card-tag c-tag c-tag--cat">#キュート</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#癒し</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#かわいい</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#木登り</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#茶色</div>
                                <div class="p-animals__card-tag c-tag c-tag--cat">#ふわふわ</div>
                            </div>
                        </div>
                        <div class="p-animals__card p-animals__card--sub p-animals__card--sub02">
                            <h3 class="p-animals__card-title">動物名：風間くん</h3>
                            <p class="p-animals__card-area">出没エリア：レッサーの森</p>
                            <p class="p-animals__card-text c-text">
                                風太くんはレッサーの森のお父さん。一番威厳のあるはずなのによく眠っていて、子供たちのおもちゃにされてしまいます。<br />
                                でも、優しい風太くんは叱りません。<br />
                                子供たちはそのおかげでいたずらさんになっちゃいました。
                            </p>
                            <div class="p-animals__card-btn">
                                <a href="#" class="c-btn">
                                    もっと見る
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/news-arrow2.svg"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-animals__tree01 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals_tree_01.png"
                        alt="木のイラスト" />
                </div>
                <div class="p-animals__tree02 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals_tree_02.png"
                        alt="木のイラスト" />
                </div>
                <div class="p-animals__tree03 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals_tree_03.png"
                        alt="木のイラスト" />
                </div>
            </div>
        </div>
    </section>
    <section class="l-access">
        <div class="p-access">
            <div class="p-access__inner l-inner">
                <div class="p-access__title">
                    <div class="c-title">
                        <h2 class="c-title__ja">アクセス</h2>
                        <div class="c-title__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/title.svg"
                                alt="足跡のイラスト" />
                        </div>
                        <p class="c-title__en c-title__en--white">access</p>
                    </div>
                </div>
                <picture class="p-access__map">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/access_01.jpg"
                        media="(min-width:768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/access_01_sp.jpg" alt="地図" />
                </picture>
                <div class="p-access__box">
                    <div class="p-access__info">
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>住所</p>
                            <p class="p-access__unit-text c-text">
                                〒000-0000　<br class="u-mobile" />
                                東京都ぞでぃ区デベ町2丁目-25-25
                            </p>
                        </div>
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>近隣施設</p>
                            <p class="p-access__unit-text c-text">お車でのご来園がおすすめです。</p>
                        </div>
                        <div class="p-access__unit">
                            <p class="p-access__unit-title"><span>●</span>アクセス</p>
                            <p class="p-access__unit-text c-text">お車でのご来園がおすすめです。</p>
                            <picture class="p-access__unit-img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/access_pc.svg"
                                    media="(min-width:768px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/access_sp.png"
                                    alt="所要時間" />
                            </picture>
                        </div>
                    </div>
                    <figure class="p-access__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/access_02.png" alt="来てね" />
                    </figure>
                </div>
                <div class="p-access__tree01 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/access_tree_01.png" alt="木のイラスト" />
                </div>
                <div class="p-access__tree02 u-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/access_tree_02.png" alt="木のイラスト" />
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>