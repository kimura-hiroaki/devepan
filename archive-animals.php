<?php get_header(); ?>
<main>
    <div class="l-mv">
        <div class="p-mv">
            <div class="p-mv__inner l-inner">
                <div class="p-mv__wrap">
                    <div class="p-mv__content">
                        <div class="p-content">
                            <div class="p-content__top">
                                <div class="c-title">
                                    <h2 class="c-title__ja">動物たち</h2>
                                    <p class="c-title__en">Animals</p>
                                </div>
                            </div>
                            <div class="p-content__date p-content__date--animals">
                                <p class="p-content__today">TODAY</p>
                                <div class="p-content__month">
                                    <span>2022</span>
                                    <span>9</span>
                                </div>
                                <div class="p-content__day">
                                    <span>FRY</span>
                                    <span>30</span>
                                </div>
                            </div>
                            <div class="p-content__tag c-tag">今日は開園日</div>
                            <div class="p-content__pickup">
                                <figure class="p-content__star">
                                    <img src="./images/common/bigStar.svg" alt="星のイラスト" />
                                </figure>
                                <div class="p-content__title">
                                    <img src="./images/common/pickup.svg" alt="今日のピックアップ動物" />
                                </div>
                                <figure class="p-content__img">
                                    <img src="./images/common/mv_02.png" alt="今日のピックアップ動物の写真" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="p-mv__main">
                        <div class="p-mv__top">
                            <div class="p-mv__top-head">
                                <div class="c-title">
                                    <h2 class="c-title__ja">動物たち</h2>
                                    <p class="c-title__en">Animals</p>
                                </div>
                            </div>
                            <div class="p-mv__slider js-mv-slider">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : ?>
                                        <?php the_post(); ?>
                                        <div class="p-mv__slider-item">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo get_image_html('/images/noimg.png', 'no-image');
                                            }
                                            ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-mv__box p-mv__box--small">
                            <div class="p-mv__box-head c-bigText">動物たちの日常</div>
                            <div class="p-mv__box-tags">
                                <div class="p-mv__box-tag c-tag">ゴリラ</div>
                                <div class="p-mv__box-tag c-tag">パンダ</div>
                                <div class="p-mv__box-tag c-tag">キリン</div>
                                <div class="p-mv__box-tag c-tag">カピバラ</div>
                                <div class="p-mv__box-tag c-tag">ハシビロコウ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_search_form(); ?>
    <div class="l-cards">
        <div class="p-cards">
            <div class="p-cards__inner l-inner">
                <div class="p-cards__wrap">
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/rinrin.jpg" alt="リンリン" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">動物と遊ぶ</div>
                            <h3 class="p-card__title">リンリン</h3>
                            <p class="p-card__text c-text">
                                リンリンは園に来た時からおてんば娘。<br />
                                木登りが大好きですが、木から降りれなくて飼育員に助けられることもしばしば。
                            </p>
                        </div>
                    </div>
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/enegori.jpg" alt="エネゴリ" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">餌やり</div>
                            <h3 class="p-card__title">エネゴリ</h3>
                            <p class="p-card__text c-text">
                                園内一マッチョなごりらのエネゴリさん<br />
                                体に見合わず性格は温厚。とてもやさしいゴリラさんです。<br />
                                リンゴが大好きです。
                            </p>
                        </div>
                    </div>
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/pentagon.jpg" alt="ペンタゴン" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">お散歩</div>
                            <h3 class="p-card__title">ペンタゴン</h3>
                            <p class="p-card__text c-text">お散歩大好きペンタゴン。<br>
                                生まれたててよちよち歩きですが、園のいろいろなところにお散歩に行きます。<br>
                                いっしょにお散歩してくださいね！</p>
                        </div>
                    </div>
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/king.jpg" alt="キング" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">お休み中</div>
                            <h3 class="p-card__title">キング</h3>
                            <p class="p-card__text c-text">百獣の王ライオンのキング君。キングの名とは裏腹に、いつもおねむです。<br>
                                起きているところに会えると幸運かも！食事よりも睡眠が好き。</p>
                        </div>
                    </div>
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/hassi.jpg" alt="はっしー" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">お休み中</div>
                            <h3 class="p-card__title">はっしー</h3>
                            <p class="p-card__text c-text">動かない鳥として有名なハシビロコウのはっしー。こちらを見ていることも多いですが、本当に動かないです。<br>
                                動くときはご飯の時だけです。</p>
                        </div>
                    </div>
                    <div class="p-cards__card">
                        <div class="p-card">
                            <figure class="p-card__img">
                                <img src="./images/animals/kazama.jpg" alt="風間" />
                            </figure>
                            <div class="p-card__date">
                                <p class="p-card__date-post">投稿日：2022.06.10</p>
                                <p class="p-card__date-update">更新日：2022.06.10</p>
                            </div>
                            <div class="p-card__tag c-tag">動物と遊ぶ</div>
                            <h3 class="p-card__title">風間</h3>
                            <p class="p-card__text c-text">風間くんはレッサーの森のお父さん。
                                一番威厳のあるはずなのによく眠っていて、子供たちのおもちゃにされてしまいます。</p>
                        </div>
                    </div>
                </div>
                <div class="p-cards__nav">
                    <div class="p-nav">
                        <ul class="p-nav__pager">
                            <li class="p-nav__page is-active">
                                <a href="#">1</a>
                            </li>
                            <li class="p-nav__page dots"></li>
                            <li class="p-nav__page dots"></li>
                            <li class="p-nav__page dots"></li>
                            <li class="p-nav__page">
                                <a href="#">10</a>
                            </li>
                        </ul>
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
<?php get_footer(); ?>