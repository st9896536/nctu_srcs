<?php
/*
The Single Posts Loop  (最新消息內文)
=====================
*/
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
</head>

<div class="container">
  <div class="row">
    <div class="main">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="title_news" style="width:68.75vw; padding-bottom: 2vh; border-bottom: #000 solid 1px;">
        <div style="height:auto; width: 5vw;border-right: #000 solid 2px; display: inline-block; float: left;">
          <font class="title_year"><?php the_time('Y'); ?></font>
          <font class="title_date"><?php the_time('m/d'); ?></font>
        </div>
        <div style="height:6vh; width: 62vw; display: inline-block;  padding-left: 1vw;">
          <font class="title_chi"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></font></br>
          <!--<font class="title_chi"><a href="</?php the_permalink(); ?>"></?php the_title()?></a></font>-->
        </div>



      </div>
      <div class="block2" style="margin-top:1.75vh; width:68.75vw;">
        <div class="time">12/22（五）<br>14:00-17:00</div>

        <div style="width:5.5%; display: inline-block; vertical-align: super;">
          <HR size="1px">
          </div>

        <div class="place">交通大學人社二館106A研討室<br>Seminar room 106A, HA Building 2, Chiao Tung University, Hsinchu, Taiwan
        </div>


        <div class="button" style="margin-left: 0.6vw; float: right;margin-top:1vh; margin-bottom: 1vh; display: inline-block; margin-right:0.6vw;">
          <a href="" class="button_register">線上報名</a>
        </div>
        <div class="button" style="float: right; margin-top:1vh; margin-bottom: 1vh; display: inline-block;">
          <a href="" class="button_website">活動網頁</a>
        </div>

      </div>
      <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>

      <div class="detail_info" style="width:68.75vw; height:auto;">
        <div class="host">主持人</div>
        <p>Hui-Yu Tang</p>
        <div class="speaker">主講人</div>
        <p>Jie-Hyun Lim<br>-- Professor, Transnational History, Director, Critical Global Studies Institute. Sogang University, Korea</p>
      </div>



      <div class="detail_content" style="width:68.75vw;">

        <div class="left_side" style="width:33vw; float:left; display:inline-block;">
          <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>
            <p><?php the_content();?></p>
        </div>
        <div class="right_side" style="width:33vw; float:right; display:inline-block;">
          <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>
          <p>
          <?php the_content();?></p>
        </div>
      </div>
<!--
      <div class="main-text-long">
        <?php the_content();?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
-->
    </div>
  </div>
</div>
