<?php
$thisPageName = 'thuonghieu';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/thuonghieu.min.css">
</head>
<body class='products'>

  <?php include(APP_PATH.'libs/header.php'); ?>

  <div id="wrap">
    <div class="th_box1">
      <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_main.jpg" alt="">
    </div>
    <ul class="bread_cumb">
      <li>
        <a href="<?php echo APP_URL; ?>" class="">
          <img src="<?php echo APP_ASSETS ?>img/kythuat/icon_home.png" alt="home">
        </a>
      </li>
      <li>
        <a href="<?php echo APP_URL; ?>thuonghieu/" class="">Thương Hiệu</a>
      </li>
      <li>
        <a href="<?php echo APP_URL; ?>thuonghieu/" class="">Lavox</a>
      </li>
      <li>
        <span class="">Dòng Dưỡng</span>
      </li>
    </ul>
  </div> <!-- #wrap -->
  <div class="products__wrap">
      <div class="row">
          
      </div>
  </div>

  <?php include(APP_PATH.'libs/footer.php'); ?>
  
  <script>
    $(document).ready(function() {
      
    });
  </script>


</body>
</html>