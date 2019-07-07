<?php
$thisPageName = 'kythuat';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/kythuat.min.css">
</head>
<body id="kythuat" class='kythuat'>

  <?php include(APP_PATH.'libs/header.php'); ?>

  <div id="wrap">
    <div class="kt_box1">
      <img src="<?php echo APP_ASSETS ?>img/kythuat/img_main.jpg" alt="">
    </div>
    <ul class="bread_cumb">
      <li>
        <a href="<?php echo APP_URL; ?>" class="">
          <img src="<?php echo APP_ASSETS ?>img/kythuat/icon_home.png" alt="home">
        </a>
      </li>
      <li>
        <span>Kỹ Thuật</span>
      </li>
    </ul>
    <div class="kt_box2">
      <div class="inner_box">
        <h2 class="ttl">Lorem ipsum dolor sit amet</h2>
        <div class="txt">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
        </div>
      </div>
    </div>
    <div class="kt_box3">
      <div class="box">
        <div class="inner">
          <h3 class="ttl">XU HƯỚNG TÓC 2019</h3>
          <p class="txt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
          </p>
        </div>
      </div>
    </div>
    <ul class="kt_box4">
      <li>
        <a href="javascript: void(0);">
          <span class="img">
            <img src="<?php echo APP_ASSETS ?>img/kythuat/img_2.jpg" alt="MÀU NHUỘM">
          </span>
          <span class="txt">MÀU NHUỘM</span>
        </a>
      </li>
      <li>
        <a href="javascript: void(0);">
          <span class="img">
            <img src="<?php echo APP_ASSETS ?>img/kythuat/img_3.jpg" alt="MÀU NHUỘM">
          </span>
          <span class="txt">MÀU NHUỘM</span>
        </a>
      </li>
      <li>
        <a href="javascript: void(0);">
          <span class="img">
            <img src="<?php echo APP_ASSETS ?>img/kythuat/img_4.jpg" alt="MÀU NHUỘM">
          </span>
          <span class="txt">MÀU NHUỘM</span>
        </a>
      </li>
      <li>
        <a href="javascript: void(0);">
          <span class="img">
            <img src="<?php echo APP_ASSETS ?>img/kythuat/img_5.jpg" alt="MÀU NHUỘM">
          </span>
          <span class="txt">MÀU NHUỘM</span>
        </a>
      </li>
    </ul>
  </div> <!-- #wrap -->

  <?php include(APP_PATH.'libs/footer.php'); ?>
  
  <script>
    $(document).ready(function() {
      
    });
  </script>


</body>
</html>