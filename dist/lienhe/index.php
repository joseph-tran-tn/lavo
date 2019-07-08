<?php
$thisPageName = 'lienhe';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css">
</head>
<body id="contact" class='contact'>

  <?php include(APP_PATH.'libs/header.php'); ?>

  <div id="wrap">
    <div class="th_box1">
      <img src="<?php echo APP_ASSETS ?>img/contact/img_main.jpg" alt="">
    </div>
    <ul class="bread_cumb">
      <li>
        <a href="<?php echo APP_URL; ?>">
          <img src="<?php echo APP_ASSETS ?>img/kythuat/icon_home.png" alt="home">
        </a>
      </li>
      <li>
        <span>Liên Hệ</span>
      </li>
    </ul>
    <div class="contact_box1">
      <div class="inner_box clearfix">
        <div class="frm_box">
          <form action="#" method="post" class="frm">
            <div class="box1 clearfix">
              <p class="input">
                <span class="txt">Name</span>
                <input type="text" value="" name="txtName" placeholder="Input name" />
              </p>
              <p class="input">
                <span class="txt">Email ID</span>
                <input type="email" value="" name="txtEmail" placeholder="Input email" />
              </p>
            </div>
            <div class="box2">
              <span class="txt">Your subject</span>
              <input type="text" value="" name="txtSubject" placeholder="Input subject" />
            </div>
            <div class="box2">
              <span class="txt">Message</span>
              <textarea name="txtMessage" placeholder="Input message"></textarea>
            </div>
            <dv class="btn_box">
              <button type="submit" class="btn" name="btn_send">Gừi Ngay</button>
            </dv>
          </form>
        </div>
        <dl class="txt_box">
          <dt class="ttl"><span class="icon1">Điện Thoại</span></dt>
          <dd class="txt1">
            <p class="txt_com">
              <strong>Văn Phòng: </strong><span>028 3973 5599 - 028 3973 6699</span>
            </p>
            <p class="txt_com">
              <strong>Hotline: </strong><span>1900 77 99 26</span>
            </p>
          </dd>
          <dt class="ttl"><span class="icon2">Địa chỉ</span></dt>
          <dd class="txt1">
            <p class="txt_com">
              <strong>Văn Phòng: </strong><span>11 Nguyễn Sơn, P. Phú Thạnh, Q. Tân Phú, TP. Hồ Chí Minh</span>
            </p>
            <p class="txt_com">
              <strong>Nhà Máy: </strong><span>11 Nguyễn Sơn, P. Phú Thạnh, Q. Tân Phú, TP. Hồ Chí Minh</span>
            </p>
          </dd>
          <dt class="ttl"><span class="icon3">Email</span></dt>
          <dd class="txt1"><a href="email:lavo@lavo.com.vn">lavo@lavo.com.vn</a></dd>
        </dl>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.197813558867!2d106.598103!3d10.7691646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x544a06ea1ba6455a!2zS2hvIC0gQ8O0bmcgdHkgQ-G7lSBQaOG6p24gTEFWTw!5e0!3m2!1sen!2s!4v1562564845826!5m2!1sen!2s" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div> <!-- #wrap -->

  <?php include(APP_PATH.'libs/footer.php'); ?>
  
  <script>
    $(document).ready(function() {
      
    });
  </script>


</body>
</html>