<?php
$thisPageName = 'tintuc';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/news.min.css">
</head>
<body id="news" class='news'>

  <?php include(APP_PATH.'libs/header.php'); ?>

  <div id="wrap">
    <div class="news_box1">
      <img src="<?php echo APP_ASSETS ?>img/news/img_main.jpg" alt="">
    </div>
    <ul class="bread_cumb">
      <li>
        <a href="<?php echo APP_URL; ?>">
          <img src="<?php echo APP_ASSETS ?>img/kythuat/icon_home.png" alt="home">
        </a>
      </li>
      <li>
        <span>Tin Tức</span>
      </li>
    </ul>
    
    <div class="news_box2">
      <div class="inner_box">
        <ul class="list">
          <?php for( $i = 0; $i < 15; $i++ ){ ?>
          <li>
            <div class="box">
              <p class="img">
                <img src="<?php echo APP_ASSETS ?>img/news/img_1.jpg" alt="">
              </p>
              <h3 class="ttl">Picking the Right Diagnostic Services for Efficint Results</h3>
              <p class="time_box">
                <span class="time">Jan 21, 2018 at 8:12pm</span>
                <span class="cat">News</span>
              </p>
              <div class="txt_sum">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
              <a href="<?php echo APP_URL; ?>news/single.php" class="txtLinkCom"></a>
            </div>
          </li>
        <?php } ?>
        </ul>
        
        <!-- Paging-->
          <div class="wp-pagenavi"> 
            <a class="prev page-numbers" href="javascript:void(0);"></a>
            <a class="page-numbers" href="javascript:void(0);">1</a>
            <a class="page-numbers" href="javascript:void(0);">2</a>
            <span class="page-numbers current">3</span>
            <a class="page-numbers" href="javascript:void(0);">4</a>
            <a class="page-numbers" href="javascript:void(0);">5</a>
            <a class="next page-numbers" href="javascript:void(0);"></a>                    
          </div> <!-- //Paging-->


      </div>
    </div>
  </div> <!-- #wrap -->

  <?php include(APP_PATH.'libs/footer.php'); ?>
  
  <script>
    $(document).ready(function() {
      
    });
  </script>


</body>
</html>