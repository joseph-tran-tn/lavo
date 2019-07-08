<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->

<header class="header">
  <div class="inHeader">
    <div class="box1 clearfix">
      <ul class="left-box pc">
        <li>
          <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-facebook.png" alt="facebook"></a>
        </li>
        <li>
          <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-twitter.png" alt="twiter"></a>
        </li>
        <li>
          <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-youtube.png" alt="youtube"></a>
        </li>
        <li>
          <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-instagram.png" alt="instagram"></a>
        </li>
        <li class="tel_box">
          <a href="tel:1900779926">1900 77 99 26</a>
        </li>
      </ul>
      <h1 class="mid-box">
        <a href="<?php echo APP_URL ?>"><img src="<?php echo APP_ASSETS ?>img/common/header/logo.png" alt="lavo"></a>
      </h1>
      <div class="right-box pc">
        <div class="lang">
          <a href="javascript: void(0);">
            <img src="<?php echo APP_ASSETS ?>img/common/header/flag_en.png" alt="en">
          </a>
          <a href="javascript: void(0);">
            <img src="<?php echo APP_ASSETS ?>img/common/header/flag_vn.png" alt="vi">
          </a>
        </div>
        <div class="search-box">
          <span class="txt">search</span>
          <p class="input">
            <input type="text" value="" name="search" class="txt-search" />
            <button class="btn-seach" name="btn-seach">Search</button>
          </p>
        </div>
      </div>
    </div>
  </div> 
  <div class="gnav_box"> 
    <p class="hamberger"><span class="ham"> </span><span class="ber"> </span><span class="ger"> </span></p>
    <div class="layerMenu">
      <div class="inLayer">
        <ul class="social-box sp">
          <li>
            <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-fb.png" alt="facebook"></a>
          </li>
          <li>
            <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-tt.png" alt="twiter"></a>
          </li>
          <li>
            <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-yb.png" alt="youtube"></a>
          </li>
          <li class="last">
            <a href="javascript: void(0);"><img src="<?php echo APP_ASSETS ?>img/common/header/icon-ins.png" alt="instagram"></a>
          </li>
          <li class="tel_box">
            <a href="tel:1900779926">1900 77 99 26</a>
          </li>
        </ul>
        <div class="control-box sp">
          <div class="lang">
            <a href="javascript: void(0);">
              <img src="<?php echo APP_ASSETS ?>img/common/header/flag_en.png" alt="en">
            </a>
            <a href="javascript: void(0);">
              <img src="<?php echo APP_ASSETS ?>img/common/header/flag_vn.png" alt="vi">
            </a>
            <span class="txt">search</span>
          </div>
          <div class="search-box">
            <input type="text" value="" name="search" class="txt-search" />
            <button class="btn-seach" name="btn-seach">Search</button>
          </div>
        </div>
        <ul class="gNavi">
          <li>
            <a href="<?php echo APP_URL; ?>" class="<?php if($thisPageName == 'top'){ echo 'active'; } ?>">Trang Chủ</a>
          </li>
          <li>
            <a href="<?php echo APP_URL; ?>gioithieu/" class="<?php if($thisPageName == 'gioithieu'){ echo 'active'; } ?>">Giới Thiệu</a>
          </li>
          <li class="is_submenu">
            <span class="icon">&nbsp;</span>
            <a href="<?php echo APP_URL; ?>thuonghieu/" class="<?php if($thisPageName == 'thuonghieu'){ echo 'active'; } ?>">Thương Hiệu</a>
            <ul class="sub">
              <li>
                <a href="javascript: void(0);">Thương Hiệu 1</a>
              </li>
              <li>
                <a href="javascript: void(0);">Thương Hiệu 2</a>
              </li>
              <li>
                <a href="javascript: void(0);">Thương Hiệu 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo APP_URL; ?>kythuat/" class="<?php if($thisPageName == 'kythuat'){ echo 'active'; } ?>">Kỹ Thuật</a>
          </li>
          <li>
            <a href="<?php echo APP_URL; ?>news/" class="<?php if($thisPageName == 'tintuc'){ echo 'active'; } ?>">Tin Tức</a>
          </li>
          <li>
            <a href="javascript: void(0);" class="<?php if($thisPageName == 'tuyendung'){ echo 'active'; } ?>">Tuyển Dụng</a>
          </li>
          <li>
            <a href="javascript: void(0);" class="<?php if($thisPageName == 'lienhe'){ echo 'active'; } ?>">Liên Hệ</a>
          </li>
        </ul>
        <p class="close_layer"><span>Close</span></p>
      </div>
    </div>
  </div>
</header>