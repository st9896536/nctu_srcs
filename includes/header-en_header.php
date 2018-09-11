<?php
    $GLOBALS['q_config']['language'] = 'en';
?>

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
        <li class="aboutus"><a href="<?php echo site_url(); ?>/aboutus">About</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/aboutus">About</a></li>
            <li><a href="<?php echo site_url(); ?>/full-time-teacher">fulltime teacher</a></li>
            <li><a href="<?php echo site_url(); ?>/adjunct-teacher">adjunct teacher</a></li>
            <li><a href="<?php echo site_url(); ?>/guest-professor">guest professor</a></li>
            <li><a href="<?php echo site_url(); ?>/administration-staff">staff</a></li>
            <li><a href="<?php echo site_url(); ?>/current-student">students</a></li>
            <li><a href="<?php echo site_url(); ?>/graduate">graduates</a></li>
          </ul>
        </li>
        <li class="research"><a href="<?php echo site_url(); ?>/research-direction">Research</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/research-direction">direction</a></li>
            <li><a href="<?php echo site_url(); ?>/teachers-works">teachers works</a></li>
            <li><a href="<?php echo site_url(); ?>/research-proposal">proposals</a></li>
          </ul>
        </li>
        <li class="courses"><a href="<?php echo site_url(); ?>/present-course_1">Courses</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/present-course_1">this semester</a></li>
            <li><a href="<?php echo site_url(); ?>/past-course">past courses</a></li>
            <li><a href="<?php echo site_url(); ?>/lecture-course">lectures</a></li>
          </ul>
        </li>
        <li class="recruit"><a href="<?php echo site_url(); ?>/feature">Enrollment</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/feature">feature</a></li>
            <li><a href="<?php echo site_url(); ?>/master">master</a></li>
            <li><a href="<?php echo site_url(); ?>/doctor">doctor</a></li>
            <li><a href="<?php echo site_url(); ?>/overseas">overseas</a></li>
            <li><a href="<?php echo site_url(); ?>/chinese">chinese</a></li>
            <li><a href="<?php echo site_url(); ?>/foreign">foreign</a></li>
          </ul>
        </li>
        <li class="cooperate"><a href="<?php echo site_url(); ?>/academic-cooperation">International</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/academic-cooperation">academics</a></li>
            <li><a href="<?php echo site_url(); ?>/keynote-speech">keynotes</a></li>
            <li><a href="<?php echo site_url(); ?>/workshop">workshops</a></li>
            <li><a href="<?php echo site_url(); ?>/albums">albums</a></li>
          </ul>
        </li>
        <li class="student"><a href="<?php echo site_url(); ?>/rules">For students</a>
          <ul>
            <li><a href="<?php echo site_url(); ?>/rules">regulations</a></li>
            <li><a href="<?php echo site_url(); ?>/thesis">thesis</a></li>
            <li><a href="<?php echo site_url(); ?>/dissertation-award">awards</a></li>
            <li><a href="<?php echo site_url(); ?>/other-award">other awards</a></li>
            <li><a href="<?php echo site_url(); ?>/intership-exchange-record">exchange records</a></li>
            <li><a href="<?php echo site_url(); ?>/student-download">download</a></li>
          </ul>
        </li>
      </ul>
      </div>

        <!--<a id="nav-more"style="font-size:15px;" class="icon">&#9776;</a>-->
      </div>
    </div> <!--search bar-->
  </div>
</div>
