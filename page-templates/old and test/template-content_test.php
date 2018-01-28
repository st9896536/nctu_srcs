<?php
/*
 * Template Name: content_test
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <!--圖片輪播的css+jquery-->
  <!-- Place somewhere in the <head> of your document -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>


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
                $url = site_url('/en/poster_change/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title1">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 1:
                <?php
                $url = site_url('/en/poster_change_2/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title2">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 2:
                <?php
                $url = site_url('/en/poster_change_3/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title3">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 3:
                <?php
                $url = site_url('/en/poster_change/');
                $content = file_get_contents($url);
                $first_step = explode( '<p id="test_title1">' , $content );
                $second_step = explode("</p>" , $first_step[1] );

                ?>
                newtext = "<?php echo $second_step[0];?>";
                break;
            case 4:
                <?php
                $url = site_url('/en/poster_change_3/');
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


<div class="container">
  <div class="row">

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
            $url = site_url('/en/poster_change/');
            $content = file_get_contents($url);
            $first_step = explode( '<p id="test_title1">' , $content );
            $second_step = explode("</p>" , $first_step[1] );

            echo $second_step[0];
            ?>
        </p>


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

  </div><!-- /.row -->
</div><!-- /.container -->
</body>
