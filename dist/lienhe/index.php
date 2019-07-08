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
    <div class="th_box1">
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
    <div class="th_box2">
      <div class="inner_box">
        <h2 class="ttl">LAVOX</h2>
        <div class="txt_box">
         
        </div>
      </div>
    </div>
    <div class="th_box3">
      <div class="inner_box">
        <ul class="list">
          <li>
            <a href="javascript: void(0);">
              <span class="img">
                <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_1.jpg" alt="UỐN DUỖI">
              </span>
              <span class="txt">UỐN DUỖI</span>
            </a>
          </li>
          <li>
            <a href="javascript: void(0);">
              <span class="img">
                <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_2.jpg" alt="UỐN DUỖI">
              </span>
              <span class="txt">UỐN DUỖI</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="th_box4">
      <div class="inner_box">
        <a href="javascript: void(0);">
          <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_3.jpg" alt="UỐN DUỖI">
        </a>
      </div>
    </div>
    <div class="th_box3 th_box5">
      <div class="inner_box">
        <ul class="list">
          <li>
            <a href="javascript: void(0);">
              <span class="img">
                <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_4.jpg" alt="UỐN DUỖI">
              </span>
              <span class="txt">UỐN DUỖI</span>
            </a>
          </li>
          <li>
            <a href="javascript: void(0);">
              <span class="img">
                <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_5.jpg" alt="UỐN DUỖI">
              </span>
              <span class="txt">UỐN DUỖI</span>
            </a>
          </li>
        </ul>
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