<?php
/*
 * Template Name: teachers-works
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript" charset="utf-8">

    $( document ).ready(function() {
      // conteol the sidebar menu effect
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show');
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active');

      // control the book block animation
      $(".book_block").addClass("book_block_animation");
      $(".book_content_block").addClass("book_content_block_animation");
      $(".book").addClass("book_animation");

      //control the year you click effect

      $('.other_Y_block').data('year').click(function() {
        $(this).toggleClass('click_Y_book');
      });

      ('.other_Y_block').click(function() {
          $(this).toggleClass('other_Y_block');
          $(this).toggleClass('click_Y_book');
        



      // for (var num=0; num <9 ; num++){
      //   if(jQuery('.year_block a:eq(num)').data('clicked')) {
      //     $(this).toggleClass('other_Y_block');
      //     $(this).toggleClass('click_Y_book');
      //   } else {
      //     $(this).removeClass('click_Y_book');
      //     $(this).addClass('other_Y_block');
      //   }
      // }

      // year_gray = document.querySelectorAll('.other_Y_block');
      // // year_black = document.querySelectorAll('.click_Y_book')
      // for (var num = 0; num < 9; num++){
      //  // console.log(year_gray[num].dataset.year);
        

      // }

      // if (($('.other_Y_block').data('year')).click(function(){
      //   $(this).toggleClass('other_Y_block');
      //   $(this).toggleClass('click_Y_book');
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
        <a href="#" class="other_Y_block" data-year="2017" >2017-2015</a>
        <a href="#" class="other_Y_block" data-year="2014" >2014-2012</a>
        <a href="#" class="other_Y_block" data-year="2011" >2011-2009</a>
        <a href="#" class="other_Y_block" data-year="2008" >2008-2006</a>
        <a href="#" class="other_Y_block" data-year="2005" >2005-2003</a>
        <a href="#" class="other_Y_block" data-year="2002" >2002-2000</a>
        <a href="#" class="other_Y_block" data-year="1999" >1999-1997</a>
        <a href="#" class="other_Y_block" data-year="1996" >1996-1994</a>
        <a href="#" class="other_Y_block" data-year="1993" >1993-1991</a>

      </div>
      <!--book block-->
      <div class="books" style="float:right; display:inline-block; ">


        <div class="gray-block" style="width:66.5vw;">
          <div class="book" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/east-asian.jpg" />
          </div>

          <div class="book_content_block">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>
          <div class="book_block" style="z-index:-1;"></div>
        </div>



        <div class="gray-block" style="width:66.5vw;">
          <div class="book" style="height: 22vh; float:left; width: 132px; padding: 2.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/Renjian_Thought_Review_6.jpg" />
          </div>

          <div class="book_content_block">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

          <div class="book_block" style="z-index:-1;"></div>
        </div>
      </div>

    </div>

</body>
