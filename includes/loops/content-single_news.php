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
          <div class="title_year" style="padding-left: 7px;"><?php the_time('Y'); ?></div>
          <div class="title_date" style="font-weight: 400;font-size: 0.8em; letter-spacing: 0.1em;"><?php the_time('m/d'); ?></div>
        </div>
        <div style="height:6vh; width: 62vw; display: inline-block;  padding-left: 1vw;">
          <div class="title_chi"><?php the_title()?></div></br>
          <div class="title_chi">
            <?php $news_title_eng = get_field( "news_title_eng" );
              if( $news_title_eng ){
                echo $news_title_eng;
              }
            ?>
          </div>
        </div>



      </div>
      <div class="block2" style="margin-top:1.75vh; width:68.75vw;">
        <div class="time">
          <?php $news_activity_time = get_field( "news_activity_time" );
            if( $news_activity_time ){
              echo $news_activity_time;
            }
          ?>
        </div>

        <div style="width:5.5%; display: inline-block; vertical-align: super;">
          <HR size="1px">
          </div>

        <div class="place">
          <?php $news_activity_place = get_field( "news_activity_place" );
            if( $news_activity_place ){
              echo $news_activity_place;
            }
          ?>
        </div>


        <div class="button" style="margin-left: 0.6vw; float: right;margin-top:1vh; margin-bottom: 1vh; display: inline-block; margin-right:0.6vw;">
          <?php $go_register_button = get_field( "go_register_button" );
            if( $go_register_button ){ ?>
              <a href="<?php echo $go_register_button; ?>" id="button_register">線上報名</a>
              <?php
            }
          ?>
        </div>
        <div class="button" style="float: right; margin-top:1vh; margin-bottom: 1vh; display: inline-block;">
          <?php $go_website_button = get_field( "go_website_button" );
            if( $go_website_button ){ ?>
              <a href="<?php echo $go_website_button; ?>" id="button_website">活動網頁</a>
              <?php
            }
          ?>
        </div>

      </div>
      <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>

      <div class="detail_info" style="width:68.75vw; height:auto;">
        <div class="host">主持人</div>
        <p>
          <?php $host = get_field( "host" );
          if( $host ){
            echo $host;
          }
          ?>
        </p>
        <div class="speaker">主講人</div>
        <p>
          <?php $speaker = get_field( "speaker" );
          if( $speaker ){
            echo $speaker;
          }
          ?>
        </p>
      </div>



      <div class="detail_content" style="width:68.75vw;">

        <div class="left_side" style="width:33vw; float:left; display:inline-block;margin-bottom: 5vh;">
          <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>
            <p>
              <?php $news_content_chi = get_field( "news_content_chi" );
              if( $news_content_chi ){
                echo $news_content_chi;
              }
              ?>
            </p>
        </div>
        <div class="right_side" style="width:33vw; float:right; display:inline-block;margin-bottom: 5vh;">
          <div style="margin:0.75vh 0;"><HR size="1px" width="10px"></div>
          <p>
            <?php $news_content_eng = get_field( "news_content_eng" );
            if( $news_content_eng ){
              echo $news_content_eng;
            }
            ?>
          </p>
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
