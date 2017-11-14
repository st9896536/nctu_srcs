<?php
/*
 * Template Name: homepage
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <!--圖片輪播的css+jquery-->
  <!-- Place somewhere in the <head> of your document -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel.js"></script>

  <!-- Place in the <head>, after the three links -->
  <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
/*
  var windowHeight = window.innerHeight,
    gridTop = windowHeight * 0.2,
    gridBottom = windowHeight * 0.8;
    $(window).on('scroll', function() {
      $('left_block').each(function() {
      var thisTop = jQuery(this).offset().top - $(window).scrollTop();
      if (thisTop >= gridTop && (thisTop + $(this).height()) <= gridBottom) {
        $(".left_block").addClass(".left_block_animation");
      } else {
        $(".left_block").removeClass(".left_block_animation");
      }
    });
  });

  $(window).trigger('scroll');
*/

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


<div class="container">
  <div class="row">

    <?php
      $wp_query_args = array(
        'posts_per_page' => 4,
        's' => '[:'.qtranxf_getLanguage().']',
        category_name => 'test',
        'orderby'   => 'date',
        'order' => 'DESC'
      );
      $the_query = new WP_Query($wp_query_args);
      if($the_query->have_posts()):
          while($the_query->have_posts()):
              $the_query->the_post();?>
        <div class="hp-news_item_date">
            <?php the_time('Y.m.j'); ?>
        </div>
        <a class="hp-news_item_title" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        <hr class="news_line">
      <?php
          endwhile;
      else:
      ?>
        <!--<div class="hp-news_item_title">內文</div>-->

      <?php
      endif;
      wp_reset_postdata();
    ?>

    <div class="content">
      <span class="content_left"></span>
      <span class="content_right">
        <div class="textbox1">
          <p>交通大學人才曜昇計畫</p>
          <p>2017 春季駐校課程</p>
        </div>
        <p style="margin-left:2vw; margin-bottom:2.5vh; font-size: 1.5em; line-height: 3vh;">歐洲中心主義的批判重探</p>
        <HR size="1px" color="#ffe6a0">
        <div class="textbox2">
          <p id="p_text">每周二下午1:30-4:30</p>
          <p id="p_text">交通大學光復校區人社二館106A研討室</p>
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
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_1.png" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_2.png" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_3.png" />
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
            <a href="#" class="button_style2">更多消息</a>
          </span>
        </div>
        <HR size="1px" style="width:44.828125vw; margin-left:2vw;"/>
          <div class="news_block">
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>
            <div class="news_block_content">  <!--每篇文章自己的block--> <!--總共8篇-->
              <span class="date">
                <font style="font-size: 0.7em;line-height: 1.5vh;">2017</font>
                <font style="font-size: 1em;line-height: 2.5vh;">07/05</font>
              </span>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                <tr>
                  <td height="40vh" width="0.625vw">　</td>
                  <td width="1" bgcolor="#000000" height="40vh"></td>
                  <td height="40vh" width="0.1vw">　</td>
                </tr>
              </table>
              <p id="content_text">陳克倫同學訂於106年7月27日(星期四)上午10點舉行論文口試</p>
            </div>

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



  </div><!-- /.row -->
</div><!-- /.container -->
</body>

<?php get_template_part('includes/footer'); ?>
