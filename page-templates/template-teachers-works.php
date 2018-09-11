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

      clean();
      $(".b_1").addClass('click_Y_book');
      $(".block_1").css("display","inline-block");
      $(".b1").addClass("book_block_animation");
      $(".bc_block1").addClass("book_content_block_animation");
      $(".bk1").addClass("book_animation");

      //control the year you hover effect
      $(".b_1").click(function(){
        clean();
        $(".block_1").css("display","inline-block");
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


<body style="height:75vh;">
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
        <div class="gray-block" style="width:auto;">
          <div class="book bk1" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/east-asian.jpg" />
          </div>

          <div class="book_content_block bc_block1">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block b1" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book bk1" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/Renjian_Thought_Review_6.jpg" />
          </div>

          <div class="book_content_block bc_block1">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block b1" style="z-index:-1;"></div>
        </div>
      </div>

      <div class="books block_2" style="display: inline-block;">
        <div class="gray-block" style="width:auto;">
          <div class="book bk2" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_03.jpg" />
          </div>

          <div class="book_content_block bc_block2">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block b2" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book bk2" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_01.jpg" />
          </div>

          <div class="book_content_block bc_block2">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block b2" style="z-index:-1;"></div>
        </div>
      </div>

      <div class="books block_3" style="display: inline-block;">
        <div class="gray-block" style="width:auto;">
          <div class="book bk3" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_04.jpg" />
          </div>

          <div class="book_content_block bc_block3">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block b3" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book bk3" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_02.jpg" />
          </div>

          <div class="book_content_block bc_block3">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block b3" style="z-index:-1;"></div>
        </div>
      </div>

      <div class="books block_4" style="display: inline-block;">
        <div class="gray-block" style="width:auto;">
          <div class="book bk4" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_01.jpg" />
          </div>

          <div class="book_content_block bc_block4">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block b4" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book bk4" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_03.jpg" />
          </div>

          <div class="book_content_block bc_block4">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block b4" style="z-index:-1;"></div>
        </div>
      </div>

      <div class="books block_5" style="display: inline-block;">
        <div class="gray-block" style="width:auto;">
          <div class="book bk5" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_04.jpg" />
          </div>

          <div class="book_content_block bc_block5">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block b5" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book bk5" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/home_book_02.jpg" />
          </div>

          <div class="book_content_block bc_block5">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block b5" style="z-index:-1;"></div>
        </div>
      </div>

    </div>

</body>
