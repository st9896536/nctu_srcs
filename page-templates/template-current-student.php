<?php
/*
 * Template Name: current-student
 */
?>

<?php $thisPage="current-student"; ?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script>
  /*
    $('.sidebarmenu a').click(function(){
      $('.sidebarmenu a').removeClass('.active');
      $(this).addClass('.active');
    });
    */
  </script>
</head>

<?php get_template_part('includes/header'); ?>
</?php get_template_part('includes/sidebar'); ?>

<div class="sidebarmenu">

  </?php $URL=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  echo $URL;
  ?>
  <a <?php if ($thisPage=="aboutus") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/aboutus" class="sidebartext">關於本所</a>
  <a <?php if ($thisPage=="full-time-teacher") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/full-time-teacher" class="sidebartext">專任師資</a>
  <a <?php if ($thisPage=="adjunct-teacher") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/adjunct-teacher" class="sidebartext">兼任師資</a>
  <a <?php if ($thisPage=="guest-professor") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/guest-professor" class="sidebartext">客座教授</a>
  <a <?php if ($thisPage=="administration-staff") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/administration-staff" class="sidebartext">行政人員</a>
  <a <?php if ($thisPage=="current-student") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/current-student" class="sidebartext">在校生</a>
  <a <?php if ($thisPage=="graduate") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/graduate" class="sidebartext">畢業生</a>
</div>



<div class="container">
  <div class="row">
    <div class="main">
      <div class="m" style="width:33vw;">
        <div class="main_short"><font>在校生</font></div>
        <div class="button" style="margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student" class="button_style_black">依領域</a>
        </div>
        <div class="button" style="margin-top:3vh;  margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student-year" class="button_style_white">依學年</a>
        </div>

        <div class="block_content" style="width:72.875vw;">
          <!--左邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:left; display:inline-block; /*margin-right:4.3125vw;*/">
            <div class="category" >社會學類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>巫珮琪</li>
                <li>李　丁</li>
                <li>徐德育</li>
                <li>林士鈞</li>
                <li>郭　佳</li>
                <li>陳知寧</li>
                <li>蔡沛霖</li>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
              </ol>
            </div>
            <div class="category" >傳播類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
                <li>林莉萍</li>
                <li>邱映哲</li>
                <li>水修鐳</li>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
            <div class="category" >商管類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
          </div>
          <!--右邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:right; vertical-align:top;">
            <div class="category" >社會學類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>巫珮琪</li>
                <li>李　丁</li>
                <li>徐德育</li>
                <li>林士鈞</li>
                <li>郭　佳</li>
                <li>陳知寧</li>
                <li>蔡沛霖</li>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
              </ol>
            </div>
            <div class="category" >傳播類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
                <li>林莉萍</li>
                <li>邱映哲</li>
                <li>水修鐳</li>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
            <div class="category" >商管類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
          </div>
        </div>

      </div>


    </div>



  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
