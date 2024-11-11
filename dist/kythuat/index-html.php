<?php
$thisPageName = 'top';
include(dirname(__FILE__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/swiper.min.css">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="swiper mv-box js-mv-slide">
      <div class="swiper-wrapper sliderbox">
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv1-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv1.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv2-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv2.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv3-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv3.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv1-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv1.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv2-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv2.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
        <div class="swiper-slide item">
          <a href="<?php echo APP_URL; ?>">
            <img class="sp" src="<?php echo createSVG(375, 187) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv3-sp.jpg" rel="js-lazy" width="375" height="187" alt="">
            <img class="pc" src="<?php echo createSVG(1180, 590) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/mv3.jpg" rel="js-lazy" width="1180" height="590" alt="">
          </a>
        </div>
      </div>
      <div class="swiper-pagination js-panation-column"></div>
      <div class="slide-nav">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="news-event">
      <div class="news-box c-fadeUp">
        <div class="innerbox">
          <div class="pc ttl-box">
            <p class="txt-en ffPoppins">NEWS</p>
            <h2 class="ttl">ANQからのお知らせ</h2>
          </div>
          <div class="list">
            <div class="item">
              <a href="<?php echo APP_URL; ?>news/">
                <span class="txt-date">2024.01.18</span>
                <div class="ttl-post">令和６年能登半島地震緊急支援募金の実施について</div>
              </a>
            </div>
            <div class="item pc">
              <a href="<?php echo APP_URL; ?>news/">
                <span class="txt-date">2024.01.18</span>
                <div class="ttl-post">営業時間が異なる店舗のご案内</div>
              </a>
            </div>
          </div>
          <div class="btn-more">
            <a href="<?php echo APP_URL; ?>news/" class="c-btn01 big">
              <span>すべての<br class="pc">お知らせを見る</span>
            </a>
          </div>
        </div>
      </div>
      <div class="event-box">
        <div class="innerbox">
          <div class="c-ttl-main c-fadeUp">
            <h2 class="ttl_jp">イベント</h2>
            <p class="ttl_en ffPoppins">EVENT</p>
          </div>
          <div class="list c-list-item">
            <div class="item c-fadeUp">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb1.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">ナイスハートバザールin三笑</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="item c-fadeUp" style="transition-delay:.3s">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb2.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">くわな鋳物大展示会</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .5s">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb3.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">昭和アニメ展</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="item c-fadeUp">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb1.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">アンク専門店街29周年誕生祭</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .3s">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb2.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">ANQキッズイベント</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .5s">
              <div class="inbox">
                <a href="<?php echo APP_URL; ?>" class="c-hover">
                  <p class="img c-img">
                    <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/event-thumb3.jpg" rel="js-lazy" width="360" height="360" alt="">
                  </p>
                  <div class="txtbox">
                    <h3 class="ttl-post">パンプスセミオーダー会</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="btn-more c-fadeUp">
            <a href="<?php echo APP_URL; ?>event/" class="c-btn01">
              <span class="pc">すべてのイベントを見る</span>
              <span class="sp">すべてのイベント・キャンペーンを見る</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="shop-news">
      <div class="innerbox">
        <div class="c-ttl-main c-fadeUp">
          <h2 class="ttl_jp">ショップニュース</h2>
          <p class="ttl_en ffPoppins">SHOPNEWS</p>
        </div>
        <div class="list c-list-item">
          <div class="item c-fadeUp">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="icon-new">
                  <img src="<?php echo APP_ASSETS; ?>img/top/icon-new.svg" width="82" height="70" alt="">
                </p>
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb1.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">パルファン 話題の口紅発売！</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">パルファン</a>
              </div>
            </div>
          </div>
          <div class="item c-fadeUp" style="transition-delay: .3s">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb2.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">カルディコーヒーファーム</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">カルディコーヒーファーム</a>
              </div>
            </div>
          </div>
          <div class="item c-fadeUp" style="transition-delay: .5s;">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb3.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">ボルサ有機栽培コーヒーがオトク</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">ボルサ</a>
              </div>
            </div>
          </div>
          <div class="item c-fadeUp">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb1.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">ラフィネ　ポイント2倍！</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">ラフィネ</a>
              </div>
            </div>
          </div>
          <div class="item c-fadeUp" style="transition-delay: .3s">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb2.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">ライトオン　キャンペーン</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">ライトオン</a>
              </div>
            </div>
          </div>
          <div class="item c-fadeUp" style="transition-delay: .5s">
            <div class="inbox">
              <a href="<?php echo APP_URL; ?>" class="c-hover">
                <p class="img c-img">
                  <img src="<?php echo createSVG(360, 360) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/shop-thumb3.jpg" rel="js-lazy" width="360" height="360" alt="">
                </p>
                <div class="txtbox">
                  <p class="txt-time">2024.01.18更新</p>
                  <h3 class="ttl-post">31アイスクリーム　キャンペーン</h3>
                </div>
              </a>
              <div class="tags">
                <a href="<?php echo APP_URL; ?>">31アイスクリーム</a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-more c-fadeUp">
          <a href="<?php echo APP_URL; ?>news_events/" class="c-btn01">
            <span>すべてのショップニュースを見る</span>
          </a>
        </div>
      </div>
      <div class="shop-guide">
        <div class="inner inner--smaller">
          <div class="c-ttl-main c-fadeUp">
            <h2 class="ttl_jp">店舗案内</h2>
            <p class="ttl_en ffPoppins">SHOP GUIDE</p>
          </div>
          <div class="shop-list">
            <div class="itembox c-fadeUp">
              <h3 class="ttl">カテゴリから探す</h3>
              <ul class="list-cats">
                <li>
                  <a href="<?php echo APP_URL; ?>shop/" class="icon1"><span>すべて</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>" class="icon2"><span>ファッション･雑貨</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>" class="icon3"><span>グルメ＆フーズ</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>" class="icon4"><span>サービス</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>" class="icon5"><span>生活雑貨</span></a>
                </li>
              </ul>
            </div>
            <div class="itembox c-fadeUp">
              <h3 class="ttl">フロアから探す</h3>
              <ul class="list-cats list-cats-other">
                <li>
                  <a href="<?php echo APP_URL; ?>shop/"><span>1番街 1F</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>"><span>1番街 2F</span></a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>"><span>1番街 3F</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-more c-fadeUp">
            <a href="<?php echo APP_URL; ?>shop/" class="c-btn01">
              <span class="pc">すべての店舗案内を見る</span>
              <span class="sp">すべてのショップニュースを見る</span>
            </a>
          </div>
          <div class="bnr-list">
            <div class="item c-fadeUp">
              <a href="<?php echo APP_URL; ?>">
                <img class="pc" src="<?php echo createSVG(260, 148) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr1.jpg" rel="js-lazy" width="260" height="148" alt="">
                <img class="sp" src="<?php echo createSVG(164, 93) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr1-sp.jpg" rel="js-lazy" width="164" height="93" alt="">
              </a>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .3s">
              <a href="<?php echo APP_URL; ?>">
                <img class="pc" src="<?php echo createSVG(260, 148) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr2.jpg" rel="js-lazy" width="260" height="148" alt="">
                <img class="sp" src="<?php echo createSVG(164, 93) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr2-sp.jpg" rel="js-lazy" width="164" height="93" alt="">
              </a>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .5s">
              <a href="<?php echo APP_URL; ?>">
                <img class="pc" src="<?php echo createSVG(260, 148) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr3.jpg" rel="js-lazy" width="260" height="148" alt="">
                <img class="sp" src="<?php echo createSVG(164, 93) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr3-sp.jpg" rel="js-lazy" width="164" height="93" alt="">
              </a>
            </div>
            <div class="item c-fadeUp" style="transition-delay: .7s">
              <a href="<?php echo APP_URL; ?>">
                <img class="pc" src="<?php echo createSVG(260, 148) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr4.jpg" rel="js-lazy" width="260" height="148" alt="">
                <img class="sp" src="<?php echo createSVG(164, 93) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/bnr4-sp.jpg" rel="js-lazy" width="164" height="93" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper.min.js"></script>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>