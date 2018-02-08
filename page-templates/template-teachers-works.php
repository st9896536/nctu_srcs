<?php
/*
 * Template Name: teachers-works
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <script type="text/javascript" charset="utf-8">

    $( document ).ready(function() {
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show');
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active');
  });


    $(document).ready(function(){
      $(".book_block").addClass("book_block_animation");
      $(".book_content_block").addClass("book_content_block_animation");
      $(".book").addClass("book_animation");
    });
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>


<body>

    <div class="main">
      <!--日期block-->
      <div style="width:8.5vw; height:auto; float:left; display:inline-block;">
        <HR size="2px" color="#e6e6e6" style="width: 6vw;">
        <div id="click_Y_book" style=" margin-top:2vh; height:2vh;">2017-2015</div>
        <div class="other_Y_block">2014-2012</div>
        <div class="other_Y_block">2011-2009</div>
        <div class="other_Y_block">2008-2006</div>
        <div class="other_Y_block">2005-2003</div>
        <div class="other_Y_block">2002-2000</div>
        <div class="other_Y_block">1999-1997</div>
        <div class="other_Y_block">1996-1994</div>
        <div class="other_Y_block">1993-1991</div>

      </div>
      <!--書籍block-->
      <div style="float:right; display:inline-block; ">
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
