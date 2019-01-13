<?php
/*
 * Template Name: homepage
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <!-- flexslider header-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!-- Place in the <head>, after the three links -->
  <script type="text/javascript" charset="utf-8">

  $(window).load(function() {
    var poster_title = [];
    var poster_date = [];
    var poster_place = [];

    <?php
      $is_multiple=False;
      $args = array(
      'category_name' => 'poster_horizontal_srcs',
      'posts_per_page' => 5
      );
      $the_query = new WP_Query($args);
      if($the_query->have_posts()):
          while($the_query->have_posts()):
              $the_query->the_post();
    ?>
        var newTitle = "<?php echo the_title();?>";  //海報文章標題
        var newDate = "<?php
            $poster_date = get_field( "poster_date" );
            if ( $poster_date ){
              echo $poster_date;
            }
            ?>";  //海報活動日期
        var newPlace = "<?php
            $poster_place_chi = get_field( "poster_place_chi" );  
             if ( $poster_place_chi){
              echo $poster_place_chi;
            }
            ?>";  //海報活動地點
        poster_title.push(newTitle);
        poster_date.push(newDate);
        poster_place.push(newPlace);
              
      <?php endwhile; ?>
    <?php endif; ?>


    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: true,
      after: function(slides){
        switch(slides.currentSlide){
            case 0: 
              $('#poster-title').html(poster_title[0]);
              $('.poster_time').html(poster_date[0]);
              $('.poster_place').html(poster_place[0]);
                break;
            case 1:
              $('#poster-title').html(poster_title[1]);
              $('.poster_time').html(poster_date[1]);
              $('.poster_place').html(poster_place[1]);
                break;
            case 2:
              $('#poster-title').html(poster_title[2]);
              $('.poster_time').html(poster_date[2]);
              $('.poster_place').html(poster_place[2]);
                break;
            case 3:
              $('#poster-title').html(poster_title[3]);
              $('.poster_time').html(poster_date[3]);
              $('.poster_place').html(poster_place[3]);
                break;
            case 4:
              $('#poster-title').html(poster_title[4]);
              $('.poster_time').html(poster_date[4]);
              $('.poster_place').html(poster_place[4]);
                break;
        }
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
<?php //get_template_part('includes/header-en_header'); ?>
<?php //wp_head(); ?>

<body>



    <div class="content">
      <span class="content_left"></span>
      <span class="content_right">
        <div class="textbox1">
          <p>交通大學</p>
          <p>社會與文化研究所</p>
        </div>

        <?php
          $is_multiple=False;
          $args = array(
          'category_name' => 'poster_horizontal_srcs',
          'posts_per_page' => 1
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
              while($the_query->have_posts()):
                  $the_query->the_post();
        ?>

        <!-- dynamically change poster title and other info -->
        
        <p id="poster-title"> <?php echo the_title();?> </p>


        <HR size="1px" color="#ffe6a0">
        <div class="textbox2">
          <!-- poster time -->
          <p id="p_text" class="poster_time">
            <?php
            $poster_date = get_field( "poster_date" );
            if ( $poster_date ){
              echo $poster_date;
            }
            ?>
          </p>
          <!-- poster place -->
          <p id="p_text" class="poster_place">
            <?php
            $poster_place_chi = get_field( "poster_place_chi" );  
             if ( $poster_place_chi){
              echo $poster_place_chi;
            }
            ?>
          </p>
        </div>
        <a target="_blank" href="<?php the_permalink(); ?>" class="button_style1">繼續閱讀</a>
      </span>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

    <div class="flexslider">

      <ul class="slides" style="width:100vw; height:100vh;">
      <?php
      $is_multiple=False;
      $args = array(
      'category_name' => 'poster_horizontal_srcs',
      'posts_per_page' => 5
      );
      $the_query = new WP_Query($args);
      if($the_query->have_posts()):
          while($the_query->have_posts()):
              $the_query->the_post();
              if($is_multiple):
      ?>
      <?php endif; ?>
        <li>
          <a target="_blank" href="<?php the_permalink(); ?>">
            <?php 

        $image = get_field('poster_image');

        if( !empty($image) ): ?>

          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
          </a>
        </li>

        <?php
        $is_multiple=True;
          endwhile;
        else:?>
            <div class="poster-title">還沒有發佈新活動海報喔！</div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </ul>

    </div>


    <div class="post-content">
      <!-- left side block : srcs_news -->
      <div id="new_post" class="new_post" style="background-color: rgba(230,230,230,1); !important">  
        <div class="newtext"> 
          <p id="p_style">最新消息</p>
          <div class="bottom_line"></div>
            <a target="_blank" href="<?php bloginfo('template_url')?>/newslist" class="button_style2">更多消息</a>
        </div>
        <HR id="hr" size="1px" style="width:44.828125vw; margin-left:2vw;"/>
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

            <!--every srcs_news block-->

            <div class="news_block_content"> 
              <div class="purple_block"></div>
              <div class="date">
                  <font style="font-size: 0.7em;line-height: 1.5vh; color: rgba(50, 50, 50, 1);"><?php the_time('Y'); ?></font>
                  <font style="font-size: 1em;line-height: 2.5vh; color: rgba(50, 50, 50, 1);"><?php the_time('m/d'); ?></font>
              </div>
                <a target="_blank" href="<?php the_permalink(); ?>"><p id="content_text"><?php the_title(); ?></p></a>
            </div>
              <?php
              $is_multiple=True;
                endwhile;
              else:?>
                  <div class="poster-title">還沒發佈新文章喔！</div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
          </div>
        </div>

      <?php
          $image = get_field('book_image_1');?>
          <!--right side block : lecturer + books -->
          <div id="right_post" class="new_post" style="float:right; margin-right:0.78125vw; !important">
            <div class="right_top_block">
                <!-- book1 -->
                <div class="right_book_image">
                  <?php $book_link_1 = get_field( "book_link_1" );
                    if( $book_link_1 ): ?>
                      <a href=" <?php echo $book_link_1 ?>">
                      <?php $image = get_field('book_image_1');
                      if( !empty($image) ): ?>
                        <img id="book" style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                      <?php endif;?>
                    <?php endif;?>
                    <p><?php $book_name_1 = get_field( "book_name_1" );
                      if( $book_name_1 ){
                        echo $book_name_1;
                      }
                    ?></p>
                    <p style="margin-top:0 !important"><?php $book_date_1 = get_field( "book_date_1" );
                      if( $book_date_1 ){
                        echo $book_date_1;
                      }
                    ?></p>
                    
                </div>

                <!-- book2 -->
                <div class="right_book_image">
                  <?php

                  $image = get_field('book_image_2');

                  if( !empty($image) ): ?>

                    <img id="book" style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
                  <p><?php $book_name_2 = get_field( "book_name_2" );
                    if( $book_name_2 ){
                      echo $book_name_2;
                    }
                  ?></p>
                  <p style="margin-top:0 !important"><?php $book_date_2 = get_field( "book_date_2" );
                    if( $book_date_2 ){
                      echo $book_date_2;
                    }
                  ?></p>
                </div>

                <!-- book3 -->
                <div class="right_book_image">
                  <?php

                  $image = get_field('book_image_3');

                  if( !empty($image) ): ?>

                    <img id="book" style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
                  <p><?php $book_name_3 = get_field( "book_name_3" );
                    if( $book_name_3 ){
                      echo $book_name_3;
                    }
                  ?></p>
                  <p style="margin-top:0 !important"><?php $book_date_3 = get_field( "book_date_3" );
                    if( $book_date_3 ){
                      echo $book_date_3;
                    }
                  ?></p>
                  
                </div>

                <!-- book4 -->
                <div class="right_book_image">
                  
                  <?php

                  $image = get_field('book_image_4');

                  if( !empty($image) ): ?>

                    <img id="book" style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
                  <p><?php $book_name_4 = get_field( "book_name_4" );
                    if( $book_name_4 ){
                      echo $book_name_4;
                    }
                  ?></p>
                  <p style="margin-top:0 !important"><?php $book_date_4 = get_field( "book_date_4" );
                    if( $book_date_4 ){
                      echo $book_date_4;
                    }
                  ?></p>
                  
                </div>               
            </div>

            <!-- lecturer block -->
            <div class="left_block_text">
              <p style="font-size: 1.2em; line-height: 2.5vh;width: 20.5vw;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                <?php $lecturer_background = get_field( "lecturer_background" );
                  if( $lecturer_background ){
                    echo $lecturer_background;
                  }
                ?>
              </p>
              <p style="font-size: 1.6em; line-height: 5.625vh;">
                <?php $lecturer_name = get_field( "lecturer_name" );
                  if( $lecturer_name ){
                    echo $lecturer_name;
                  }
                ?>
              </p>
            </div>

            <!-- lecturer video -->
            <div class="video-container">
              <?php $video_link = get_field( "video_link" );
                echo $video_link;?>
            </div>

            <div class="left_block">
            </div>
          </div>
    </div>

</body>

<?php get_template_part('includes/footer'); ?>
<?php //get_template_part('includes/footer-en_footer'); ?>
