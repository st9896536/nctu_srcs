<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
    <script src="https://use.typekit.net/hgf1mzq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>



<!--<body </?php body_class(); ?>> </body>-->
<body>

<div class="header">
  <div class="header_left">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="left_text" style="width:20vw; margin-top:6vh; margin-left:2.25vw;">
      <div class="text_1" >交通大學</div>
      <div class="text_2" >社會與文化研究所</div>
      <div class="text_3" >Institute of Social Research 
      and Cultural Studies</div>
    </a>

    </div>
  </div>
  <div class="header_right">
    <div class="right_item" style="margin-top:3.25vh;">
      <div><?php get_template_part('includes/navbar-search'); ?>
      <div class="nav" id="top-menu">
        <!-- <a href="<?php echo site_url(); ?>/aboutus">關於本所</a>
        <a href="<?php echo site_url(); ?>/research-direction">研究發展</a>
        <a href="<?php echo site_url(); ?>/present-course">課程規劃</a>
        <a href="<?php echo site_url(); ?>/feature" style="width:3.125vw !important;">招生</a>
        <a href="<?php echo site_url(); ?>/academic-cooperation">國際交流</a>
        <a href="<?php echo site_url(); ?>/rules">學生專區</a> -->

        <ul>
        <li class="aboutus"><a href="<?php echo site_url(); ?>/aboutus">關於本所</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/aboutus">關於本所</a></li>
            <li><a href="<?php echo site_url(); ?>/full-time-teacher">專任師資</a></li>
            <li><a href="<?php echo site_url(); ?>/adjunct-teacher">兼任師資</a></li>
            <li><a href="<?php echo site_url(); ?>/guest-professor">客座教授</a></li>
            <li><a href="<?php echo site_url(); ?>/administration-staff">行政人員</a></li>
            <li><a href="<?php echo site_url(); ?>/current-student">在校生</a></li>
            <li><a href="<?php echo site_url(); ?>/graduate">畢業生</a></li>
          </ul>
        </li>
        <li class="research"><a href="<?php echo site_url(); ?>/research-direction">研究發展</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/research-direction">研究方向</a></li>
            <li><a href="<?php echo site_url(); ?>/teachers-works">教師著作</a></li>
            <li><a href="<?php echo site_url(); ?>/research-proposal">研究計畫</a></li>
          </ul>
        </li>
        <li class="courses"><a href="<?php echo site_url(); ?>/present-course_1">課程規劃</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/present-course_1">本學年課程</a></li>
            <li><a href="<?php echo site_url(); ?>/past-course">歷年課程</a></li>
            <li><a href="<?php echo site_url(); ?>/lecture-course">講座課程</a></li>
          </ul>
        </li>
        <li class="recruit"><a href="<?php echo site_url(); ?>/feature">招生</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/feature">社文所特色</a></li>
            <li><a href="<?php echo site_url(); ?>/master">碩士班</a></li>
            <li><a href="<?php echo site_url(); ?>/doctor">博士班</a></li>
            <li><a href="<?php echo site_url(); ?>/overseas">僑生港澳生</a></li>
            <li><a href="<?php echo site_url(); ?>/chinese">陸生</a></li>
            <li><a href="<?php echo site_url(); ?>/foreign">外籍生</a></li>
          </ul>
        </li>
        <li class="cooperate"><a href="<?php echo site_url(); ?>/academic-cooperation">國際交流</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/academic-cooperation">學術合作</a></li>
            <li><a href="<?php echo site_url(); ?>/keynote-speech">專題演講</a></li>
            <li><a href="<?php echo site_url(); ?>/workshop">研討會工作坊</a></li>
            <li><a href="<?php echo site_url(); ?>/albums">活動相簿</a></li>
          </ul>
        </li>
        <li class="student"><a href="<?php echo site_url(); ?>/rules">學生專區</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/rules">修業規章</a></li>
            <li><a href="<?php echo site_url(); ?>/thesis">畢業論文</a></li>
            <li><a href="<?php echo site_url(); ?>/dissertation-award">論文獲獎</a></li>
            <li><a href="<?php echo site_url(); ?>/other-award">其他獲獎訊息</a></li>
            <li><a href="<?php echo site_url(); ?>/intership-exchange-record">見習交換紀錄</a></li>
            <li><a href="<?php echo site_url(); ?>/student-download">學生下載</a></li>
          </ul>
        </li>
      </ul>
      </div>

        <!--<a id="nav-more"style="font-size:15px;" class="icon">&#9776;</a>-->
      </div>
    </div> <!--search bar-->
  </div>
</div>
