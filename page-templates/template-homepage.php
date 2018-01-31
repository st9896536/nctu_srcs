<?php
/*
 * Template Name: homepage
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <!--圖片輪播的css+jquery-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <!-- Place in the <head>, after the three links -->
  <script type="text/javascript" charset="utf-8">

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: true,
      after: function(slides){
        var newtext = '';
        switch(slides.currentSlide){
            case 0:
                <?php
                $url = site_url('poster-horizontal/');
                $content = file_get_contents($url);
                $first_step = explode( '<div id="title_chi">' , $content );
                $second_step = explode("</div>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 1:
                <?php
                $url = site_url('poster_change_2/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title2">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 2:
                <?php
                $url = site_url('poster_change_3/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title3">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 3:
                <?php
                $url = site_url('poster_change/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title1">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 4:
                <?php
                $url = site_url('poster_change_3/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title3">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
        }
        $('#poster-title').html(newtext);
    }
  });
});


  $(window).ready(function(){
      $(window).scroll(function(){
          $(".left_block").addClass("left_block_animation");
          $(".left_block_text").addClass("left_block_text_animation");
      });
  });
  </script>

</head>

<?php get_template_part('includes/header'); ?>
  <!-- background-image -->

<body>



    <div class="content">
      <span class="content_left"></span>
      <span class="content_right">
        <div class="textbox1">
          <p>交通大學人才曜昇計畫</p>
          <p>2017 春季駐校課程</p>
        </div>



        <!--動態更換poster的標題-->

        <p id="poster-title">
            <?php
            $url = site_url('poster-horizontal/');
            $content = file_get_contents($url);
            $first_step = explode( '<div id="title_chi">' , $content );
            $second_step = explode("</div>" , $first_step[1] );

            echo $second_step[0];
            ?>
        </p>


        <HR size="1px" color="#ffe6a0">
        <div class="textbox2">
          <p id="p_text">
            <?php
            $url = site_url('poster-horizontal/');
            $content = file_get_contents($url);
            $first_step = explode( '<div class="poster_year">' , $content );
            $second_step = explode("</div>" , $first_step[1] );

            echo $second_step[0];
            ?>
          </p>
          <p id="p_text">
            <?php
            $url = site_url('poster-horizontal/');
            $content = file_get_contents($url);
            $first_step = explode( '<div id="place_chi">' , $content );
            $second_step = explode("</div>" , $first_step[1] );

            echo $second_step[0];
            ?>
          </p>
        </div>
        <a href="#" class="button_style1">繼續閱讀</a>
      </span>
    </div>

    <div class="flexslider">
      <ul class="slides" style="width:100vw; height:100vh;">
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/bg.jpg" />
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/poster_change_2">
            <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_1.png" />

          </a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/poster_change_3">
            <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_2.png" />

          </a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/poster_change_3">
            <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_3.png" />

          </a>
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_4.png" />

        </li>
      </ul>
    </div>


    <div class="post-content">
      <div class="new_post" style="background-color: rgba(230,230,230,1); !important">  <!-- 最新消息 左邊的block-->
        <div class="newtext">  <!-- 水平線以上的block-->
          <p id="p_style">最新消息</p>
          <span>
            <a href="<?php bloginfo('template_url')?>/newslist" class="button_style2">更多消息</a>
          </span>
        </div>
        <HR size="1px" style="width:44.828125vw; margin-left:2vw;"/>
          <div class="news_block">
            <?php
            $is_multiple=False;
            $args = array(
            'category_name' => 'news_srcs',
            'posts_per_page' => 8
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):
                while($the_query->have_posts()):
                    $the_query->the_post();
                    if($is_multiple):
            ?>
            <?php endif; ?>
            <div class="news_block_content">  <!--每篇文章自己的block-->
              <span class="date">
                  <font style="font-size: 0.7em;line-height: 1.5vh;"><?php the_time('Y'); ?></font>
                  <font style="font-size: 1em;line-height: 2.5vh;"><?php the_time('m/d'); ?></font>
              </span>
              <!--
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                    <tr>
                      <td height="40vh" width="0.625vw">　</td>
                      <td width="1" bgcolor="#000000" height="40vh"></td>
                      <td height="40vh" width="0.1vw">　</td>
                    </tr>
                </table>
              -->

                <a href="<?php the_permalink(); ?>"><p id="content_text"><?php the_title(); ?></p></a>
              </div>
              <?php
              $is_multiple=True;
                endwhile;
              else:?>
                  <div class="hp-news_item_title">還沒發佈新文章喔！</div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            </div>
        </div>


          <!--右邊的block 有講者+圖書-->
          <div class="new_post" style="float:right; margin-right:0.78125vw; !important"> <!--右邊活動消息欄位  -->
            <div class="right_top_block">
              <div class="right_book_image">
                <img id="book" src="<?php bloginfo('template_url'); ?>/images/home_book_01.jpg" />
                <!--<p>人間思想第10期:</br>重返馬來亞</br>2015.09.20</p>-->
                <p>人間思想第10期:重返馬來亞</p>
                <p style="margin-top:0 !important">2015.09.20</p>
              </div>
              <div class="right_book_image">
                <img id="book" src="<?php bloginfo('template_url'); ?>/images/home_book_02.jpg" />
                <p>情緒密碼</p>
                <p style="margin-top:0 !important">2017.10.04</p>
              </div>
              <div class="right_book_image">
                <img id="book" src="<?php bloginfo('template_url'); ?>/images/home_book_03.jpg" />
                <p>你問的問題決定你是誰</p>
                <p style="margin-top:0 !important">2016.06.30</p>
              </div>
              <div class="right_book_image">
                <img id="book" src="<?php bloginfo('template_url'); ?>/images/home_book_04.jpg" />
                <p>咖啡聖經</p>
                <p style="margin-top:0 !important">2012.12.12</p>
              </div>
            </div>
            <div class="right_block_image">
              <img id="person" src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="left_block_text">
              <p style="font-size: 1.2em; line-height: 2.5vh;">年度傑出學者講座</p>
              <p style="font-size: 1.6em; line-height: 5.625vh;">小熊英二</p>
            </div>
            <div class="left_block">
            </div>

          </div>


    </div>

</body>

<?php get_template_part('includes/footer'); ?>
