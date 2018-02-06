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


</head>



<!--<body </?php body_class(); ?>> </body>-->
<body>

<div class="header">
  <div class="header_left">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="left_text" style="width:20vw; margin-top:8vh; margin-left:2.5vw; margin-left:2.5vw;">
      <div class="text_1" >交通大學</div>
      <div class="text_2" >社會與文化研究所</div>
      <div class="text_3" >Social Research and Culture Studies</div>
    </a>

    </div>
  </div>
  <div class="header_right">
    <div class="right_item" style="margin-top:3.25vh;">
      <div><?php get_template_part('includes/navbar-search'); ?>
      <div class="nav" id="top-menu">
        <a href="<?php echo site_url(); ?>/aboutus">關於本所</a>
        <a href="<?php echo site_url(); ?>/research-direction">研究發展</a>
        <a href="<?php echo site_url(); ?>/present-course">課程規劃</a>
        <a href="<?php echo site_url(); ?>/feature" style="width:3.125vw !important;">招生</a>
        <a href="#">國際交流</a>
        <a href="#">學生專區</a>
      </div>
        <!--<a id="nav-more"style="font-size:15px;" class="icon">&#9776;</a>-->
      </div>
    </div> <!--search bar-->
  </div>
</div>
