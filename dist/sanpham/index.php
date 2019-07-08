<?php
$thisPageName = 'sanpham';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/sanpham.min.css">
</head>
<body id="sanpham" class='sanpham_page'>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=613394238829861&autoLogAppEvents=1"></script>
  <?php include(APP_PATH.'libs/header.php'); ?>
  <div id="wrap">
    <div class="th_box1">
      <img src="<?php echo APP_ASSETS ?>img/thuonghieu/img_main.jpg" alt="">
    </div>
    <ul class="bread_cumb">
      <li>
        <a href="<?php echo APP_URL; ?>" class=""><img src="<?php echo APP_ASSETS ?>img/kythuat/icon_home.png" alt="home"></a>
      </li>
      <li><a href="<?php echo APP_URL; ?>thuonghieu/" class="">Thương Hiệu</a></li>
      <li><a href="<?php echo APP_URL; ?>thuonghieu/" class="">LAVOX</a></li>
      <li><a href="<?php echo APP_URL; ?>thuonghieu/" class="">Dòng Dưỡng</a></li>
      <li><span>DƯỠNG ẨM SIÊU MỀM MƯỢT NANO COMPLEX</span></li>
    </ul>

    <div class="sanpham__detailbox">
      <div class="sanpham__detailbox__image">
        <img src="<?php echo APP_ASSETS ?>img/sanpham/product.jpg" alt="">
      </div>
      <div class="sanpham__detailbox__infor">
        <div class="sanpham__detailbox__name">DƯỠNG ẨM SIÊU MỀM MƯỢT NANO COMPLEX</div>
        <div class="sanpham__detailbox__review__edit">
          <div class="sanpham__detailbox__review__edit--review">
            <ul>
              <li><img src="<?php echo APP_ASSETS ?>img/sanpham/star.jpg" alt=""></li>
              <li><img src="<?php echo APP_ASSETS ?>img/sanpham/star.jpg" alt=""></li>
              <li><img src="<?php echo APP_ASSETS ?>img/sanpham/star.jpg" alt=""></li>
              <li><img src="<?php echo APP_ASSETS ?>img/sanpham/star.jpg" alt=""></li>
              <li class="gray"><img src="<?php echo APP_ASSETS ?>img/sanpham/star.jpg" alt=""></li>
            </ul>
            <span>1 reviews</span>
          </div>
          <div class="sanpham__detailbox__review__edit--edit">
            <a href=""><img src="<?php echo APP_ASSETS ?>img/sanpham/edit.jpg" alt="">
            <span>Write a review</span></a>
          </div>
        </div>
        <div class="sanpham__detailbox__desc">Kết hợp thông minh các hoạt chất cùng công nghệ Nano giúp hình thành các phân tử hoạt chất cực nhỏ dễ dàng đi sâu vào các lớp biểu bì của tóc, tạo nên dòng sản phẩm Nano Complex hoàn hảo.</div>
        <div class="sanpham__detailbox__squares">
          <div class="sanpham__detailbox__squares--capacilty">
            <span class="sanpham__detailbox__squares__name">DUNG TÍCH</span>
            <span class="sanpham__detailbox__squares__value">120ml</span>
          </div>
          <div class="sanpham__detailbox__squares--share">
            <span class="sanpham__detailbox__squares__name">SHARE</span>
            <ul>
              <li><a href=""><img src="<?php echo APP_ASSETS ?>img/sanpham/facebook.jpg" alt=""></a></li>
              <li><a href=""><img src="<?php echo APP_ASSETS ?>img/sanpham/twitter.jpg" alt=""></a></li>
              <li><a href=""><img src="<?php echo APP_ASSETS ?>img/sanpham/googleplys.jpg" alt=""></a></li>
              <li><a href=""><img src="<?php echo APP_ASSETS ?>img/sanpham/pinterest.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="sanpham__detailbox__buttons">
          <ul>
            <li><a class="sanpham__detailbox__buttons--color" href="">Công dụng</a></li>
            <li><a class="sanpham__detailbox__buttons--black" href="">Hướng dẫn</a></li>
          </ul>
        </div>
        <div class="sanpham__detailbox__content">
          <p>Kem duỗi phủ bóng Nano Complex  - Thế hệ mới giúp duỗi tóc thẳng mượt tự nhiên, sáng bóng và suôn mềm với những tính năng nổi bật sau:</p>

          <p>Duỗi thẳng nhanh, rút ngắn thời gian, tiết kiệm chi phí.<br>
          Giúp mở - khóa biểu bì tóc nhanh hơn, giảm thiểu hư tổn.<br>
          Không sử dụng dập định hình.<br>
          Lưu giữ độ ẩm, tăng độ suôn mượt.<br>
          Công nghệ phủ bóng bên ngoài bảo vệ tóc gấp 3 lần sau khi duỗi.<br>
          Polyquaternium-80 giúp tái tạo và phục hồi cấu trúc sợi tóc chắc khỏe, giữ nếp bền lâu.</p>
        </div>
      </div> <!-- sanpham__detailbox__infor -->
    </div> <!-- sanpham__detailbox -->

    <div class="sanpham__detailbox__comment">
      <div class="fb-comments" data-width="100%" data-href="http://demo.trantuananh.info/lavo/sanpham/" data-width="" data-numposts="5"></div>
    </div>

    <div class="sanpham__related">
      <h3 class="sanpham__related__h3">Sản phẩm liên quan</h3>
      <div class="sanpham__related__list clearfix">
        <div class="sanpham__related__item">
          <div class="sanpham__related__item__inner">
            <div class="sanpham__related__item__image">
              <img src="<?php echo APP_ASSETS ?>img/sanpham/pro01.jpg" alt="">
            </div>
            <div class="sanpham__related__item__name">OXY SIÊU DƯỠNG NANO COMPLEX</div>
          </div>
        </div>
        <div class="sanpham__related__item">
          <div class="sanpham__related__item__inner">
            <div class="sanpham__related__item__image">
              <img src="<?php echo APP_ASSETS ?>img/sanpham/pro02.jpg" alt="">
            </div>
            <div class="sanpham__related__item__name">TINH DẦU MACADAMIA CHỐNG RỐI TÓC</div>
          </div>
        </div>
        <div class="sanpham__related__item">
          <div class="sanpham__related__item__inner">
            <div class="sanpham__related__item__image">
              <img src="<?php echo APP_ASSETS ?>img/sanpham/pro03.jpg" alt="">
            </div>
            <div class="sanpham__related__item__name">UỐN SIÊU SÓNG NANO COMPLEX</div>
          </div>
        </div>
        <div class="sanpham__related__item">
          <div class="sanpham__related__item__inner">
            <div class="sanpham__related__item__image">
              <img src="<?php echo APP_ASSETS ?>img/sanpham/pro04.jpg" alt="">
            </div>
            <div class="sanpham__related__item__name">DẦU GỘI GIỮ MÀU</div>
          </div>
        </div>
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