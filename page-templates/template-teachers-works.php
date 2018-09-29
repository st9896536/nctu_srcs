<?php
/*
 * Template Name: teachers-works
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript" charset="utf-8">
    function clean(){
        $(".block_1").hide();
        $(".block_2").hide();
        $(".block_3").hide();
        $(".block_4").hide();
        $(".block_5").hide();
    }

    function refresh(){
      $(".b_1").removeClass('click_Y_book');
      $(".b_1").addClass('other_Y_block');
      $(".b_2").removeClass('click_Y_book');
      $(".b_2").addClass('other_Y_block');
      $(".b_3").removeClass('click_Y_book');
      $(".b_3").addClass('other_Y_block');
      $(".b_4").removeClass('click_Y_book');
      $(".b_4").addClass('other_Y_block');
      $(".b_5").removeClass('click_Y_book');
      $(".b_5").addClass('other_Y_block');
    }

    $( document ).ready(function() {
      // control the sidebar menu effect
      
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show');
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active');
      
      $(".b_1").addClass('click_Y_book');
      $(".block_1").css("display","inline-block");
      $(".block_1").css("position","fixed");
      $(".block_1").css("width","80vw");
      $(".b1").addClass("book_block_animation");
      $(".bc_block1").addClass("book_content_block_animation");
      $(".bk1").addClass("book_animation");

      //control the year you hover effect
      $(".b_1").click(function(){
        clean();
        $(".block_1").css("display","inline-block");
        $(".block_1").css("position","fixed");
        $(".block_1").css("width","80vw");
        refresh();
        $(".b_1").removeClass('other_Y_block');
        $(".b_1").addClass('click_Y_book');

          $(".b1").addClass("book_block_animation");
          $(".bc_block1").addClass("book_content_block_animation");
          $(".bk1").addClass("book_animation"); 
      });
      $(".b_2").click(function(){
        clean();
        $(".block_2").css("display","inline-block");
        $(".block_2").css("position","fixed");
        $(".block_2").css("width","80vw");
        refresh();
        $(".b_2").removeClass('other_Y_block');
        $(".b_2").addClass('click_Y_book');

        $(".b2").addClass("book_block_animation");
        $(".bc_block2").addClass("book_content_block_animation");
        $(".bk2").addClass("book_animation"); 
      });
      $(".b_3").click(function(){
        clean();
        $(".block_3").css("display","inline-block");
        refresh();
        $(".b_3").removeClass('other_Y_block');
        $(".b_3").addClass('click_Y_book');

        $(".b3").addClass("book_block_animation");
        $(".bc_block3").addClass("book_content_block_animation");
        $(".bk3").addClass("book_animation"); 
      });
      $(".b_4").click(function(){
        clean();
        $(".block_4").css("display","inline-block");
        refresh();
        $(".b_4").removeClass('other_Y_block');
        $(".b_4").addClass('click_Y_book');
        
        $(".b4").addClass("book_block_animation");
        $(".bc_block4").addClass("book_content_block_animation");
        $(".bk4").addClass("book_animation"); 
      });
      $(".b_5").click(function(){
        clean();
        $(".block_5").css("display","inline-block");
        refresh();
        $(".b_5").removeClass('other_Y_block');
        $(".b_5").addClass('click_Y_book');
        $(".b5").addClass("book_block_animation");
        $(".bc_block5").addClass("book_content_block_animation");
        $(".bk5").addClass("book_animation"); 
      });
        
  });

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>


<body style="height:67vh;">
    <div class="main">
      <!--year block-->
      <div class="year_block" style="width:8.5vw; height:auto; float:left; display:inline-block;">
        <HR size="2px" color="#e6e6e6" style="width: 6vw;    margin-bottom: 2vh;">
        <div class="click_Y_book b_1" data-year="2017" >2017-2015</div>
        <div class="other_Y_block b_2" data-year="2014" >2014-2012</div>
        <div class="other_Y_block b_3" data-year="2011" >2011-2009</div>
        <div class="other_Y_block b_4" data-year="2008" >2008-2006</div>
        <div class="other_Y_block b_5" data-year="2005" >2005-2003</div>
        <!-- <div class="other_Y_block b_6" data-year="2002" >2002-2000</div>
        <div class="other_Y_block b_7" data-year="1999" >1999-1997</div>
        <div class="other_Y_block b_8" data-year="1996" >1996-1994</div>
        <div class="other_Y_block b_9" data-year="1993" >1993-1991</div> -->

      </div>
      <!--book block-->

      <div class="books block_1" style="display: inline-block;">
      <?php $teachers_works_2017 = get_post_meta( $post->ID, 'teachers_works_2017', true );

        foreach( $teachers_works_2017 as $works_2017){?>
          <div class="gray-block" style="width:auto;">
            <div class="book bk1" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
              <?php
                $src = wp_get_attachment_image_src( $works_2017['book_image'], 'full' );
                        echo '<img src="'.$src[0].'"/>';
              ?>
            </div>
            <div class="book_content_block bc_block1">
              <div class="book_content_title">
                <?php echo $works_2017['book_content_title']?>
              </div>
              <div class="subtitle1"><?php echo $works_2017['author_name']?></div>
              <div class="subtitle2"><?php echo $works_2017['other_content']?></div>
            </div>
            <div class="book_block b1" style="z-index:-1;"></div>
          </div>
          <?php

        }?>

      </div>

      <div class="books block_2" style="display: none;">
        <?php $teachers_works_2014 = get_post_meta( $post->ID, 'teachers_works_2014', true );

        foreach( $teachers_works_2014 as $works_2014){?>
          <div class="gray-block" style="width:auto;">
            <div class="book bk2" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
              <?php
                $src = wp_get_attachment_image_src( $works_2014['book_image_2014'], 'full' );
                        echo '<img src="'.$src[0].'"/>';
              ?>
            </div>
            <div class="book_content_block bc_block2">
              <div class="book_content_title">
                <?php echo $works_2014['book_content_title_2014']?>
              </div>
              <div class="subtitle1"><?php echo $works_2014['author_name_2014']?></div>
              <div class="subtitle2"><?php echo $works_2014['other_content_2014']?></div>
            </div>
            <div class="book_block b2" style="z-index:-1;"></div>
          </div>
          <?php

        }?>
      </div>

      <div class="books block_3" style="display: none;">
        <?php $teachers_works_2011 = get_post_meta( $post->ID, 'teachers_works_2011', true );

        foreach( $teachers_works_2011 as $works_2011){?>
          <div class="gray-block" style="width:auto;">
            <div class="book bk3" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
              <?php
                $src = wp_get_attachment_image_src( $works_2011['book_image_2011'], 'full' );
                        echo '<img src="'.$src[0].'"/>';
              ?>
            </div>
            <div class="book_content_block bc_block3">
              <div class="book_content_title">
                <?php echo $works_2011['book_content_title_2011']?>
              </div>
              <div class="subtitle1"><?php echo $works_2011['author_name_2011']?></div>
              <div class="subtitle2"><?php echo $works_2011['other_content_2011']?></div>
            </div>
            <div class="book_block b3" style="z-index:-1;"></div>
          </div>
          <?php

        }?>
      </div>

      <div class="books block_4" style="display: none;">
        <?php $teachers_works_2008 = get_post_meta( $post->ID, 'teachers_works_2008', true );

        foreach( $teachers_works_2008 as $works_2008){?>
          <div class="gray-block" style="width:auto;">
            <div class="book bk4" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
              <?php
                $src = wp_get_attachment_image_src( $works_2008['book_image_2008'], 'full' );
                        echo '<img src="'.$src[0].'"/>';
              ?>
            </div>
            <div class="book_content_block bc_block4">
              <div class="book_content_title">
                <?php echo $works_2008['book_content_title_2011']?>
              </div>
              <div class="subtitle1"><?php echo $works_2008['author_name_2008']?></div>
              <div class="subtitle2"><?php echo $works_2008['other_content_2008']?></div>
            </div>
            <div class="book_block b4" style="z-index:-1;"></div>
          </div>
          <?php

        }?>
      </div>

      <div class="books block_5" style="display: none;">
        <?php $teachers_works_2005 = get_post_meta( $post->ID, 'teachers_works_2005', true );

        foreach( $teachers_works_2005 as $works_2005){?>
          <div class="gray-block" style="width:auto;">
            <div class="book bk5" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
              <?php
                $src = wp_get_attachment_image_src( $works_2005['book_image_2005'], 'full' );
                        echo '<img src="'.$src[0].'"/>';
              ?>
            </div>
            <div class="book_content_block bc_block5">
              <div class="book_content_title">
                <?php echo $works_2005['book_content_title_2005']?>
              </div>
              <div class="subtitle1"><?php echo $works_2005['author_name_2005']?></div>
              <div class="subtitle2"><?php echo $works_2005['other_content_2005']?></div>
            </div>
            <div class="book_block b5" style="z-index:-1;"></div>
          </div>
          <?php

        }?>
      </div>

    </div>

</body>
