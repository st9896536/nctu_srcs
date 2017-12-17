<?php
/*
 * Template Name: graduate
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
<?php get_template_part('includes/sidebar'); ?>
  <!-- background-image -->

<body>


<div class="container">
  <div class="row">

    <div class="main">
      <div class="photo-graduate">
        <img src="<?php bloginfo('template_url'); ?>/images/professor/personal_info_ex.jpg" />
      </div>
      <div class="graduate-data" style="width:50vw; height:31.25vh; display:inline-block; vertical-align: top;">
        <!--回列表-->
        <div class="list" style="padding-right:1vw; float: right; border-right-style: solid; border-right-width: 10px;">
          <div class="list_div" style="float: right; margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
            <a href="#" class="back-to-list">回列表</a>
          </div>
        </div>

        <!--畢業生姓名-->
        <div class="graduate-name" style="width:34vw; height:4vh; margin-top:2vh;">

          <span style="padding-right: 1.7vw; vertical-align: top;display: inline-block;float: left;border-right-style: solid; border-width: 2px;">
            <p id="g1">闞 清子</p>
          </span>

          <span style="padding-left: 1.7vw;vertical-align: top;display: inline-block; ">
            <p id="g1">Kan, Qing-Zi</p>
          </span>
        </div>
        <!--畢業生職業-->
        <div class="graduate-name" style="width:34vw; height:2.5vh; margin-top:1vh; margin-bottom:2.5vh;">
          <span style="padding-right: 1.2vw; vertical-align: top;display: inline-block;float: left;border-right-style: solid; border-width: 2px;">
            <p id="g2">自由演員</p>
          </span>

          <span style="padding-left: 1.2vw;vertical-align: top;display: inline-block; ">
            <p id="g2">Freelence</p>
          </span>
        </div>

        <div class="description" style="height:3vh; margin-bottom:5vh;"><p>萬般過眼成空。</p></div>

        <div class="education" style="height:5vh; margin-bottom:2.25vh;">
          <p style="margin-bottom:0.75vh;">電影學院表演系 畢</p>
          <p>舞台表演、電影表演</p>
        </div>

        <div class="education" style="height:4vh; margin-bottom:3vh;">
          <p id="graduate_email" style="margin-bottom:0.75vh;">justtest1234@gmail.com</p>
          <p>www.justtest1234.com.tw</p>
        </div>

        <div class="experience" style="width:47.75vw; height:auto;">

            <p>2009年，在電視劇《娘妻》飾演楊靜怡正式出道。</p>
            <p>2011年，參演古裝言情劇《新還珠格格》，飾演欣榮格格，該劇在優酷大劇盛典上榮獲年度十大電視劇優秀獎。</p>
            <p>2013年，參演青春偶像劇《璀璨人生》，飾演葉琳，被觀眾所熟知；同年參演民國年代劇《新京華煙雲》，飾演姚莫愁。</p>
            <p>2014年在家族鬥爭劇《繼承人》中首次擔綱女主角，飾演何星然。</p>

        </div>
      </div>


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
