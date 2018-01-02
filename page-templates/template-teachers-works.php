<?php
/*
 * Template Name: teachers-works
 */
?>

<?php $thisPage="graduate"; ?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script>
  /*
    $('.sidebarmenu a').click(function(){
      $('.sidebarmenu a').removeClass('.active');
      $(this).addClass('.active');
    });
    */
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>


<body>


<div class="container">
  <div class="row">

    <div class="main">
      <!--日期block-->
      <div style="width:8.5vw; height:auto; float:left; display:inline-block;">
        <HR size="2px" color="#e6e6e6" style="width: 6vw;">
        <div id="click_Y_book" style=" margin-top:2vh; height:2vh;">2015-2017</div>
        <div class="other_Y_block">2012-2014</div>
        <div class="other_Y_block">2009-2011</div>
        <div class="other_Y_block">2006-2008</div>
        <div class="other_Y_block">2003-2005</div>
        <div class="other_Y_block">2000-2002</div>
        <div class="other_Y_block">1997-1999</div>
        <div class="other_Y_block">1994-1996</div>
        <div class="other_Y_block">1991-1993</div>

      </div>
      <!--書籍block-->
      <div style="float:right; display:inline-block; ">
        <!--灰色block-->
        <div class="book_block" >
          <div class="book" style="float:left; width: 132px; padding: 1.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/east-asian.jpg" />
          </div>

          <div class="book_content_block">
            <div class="book_content_title">
              East-Asian Marxisms and Their Trajectories, Edited by Joyce C.H. Liu and Viren Murthy
            </div>
            <div class="subtitle1">Joyce C.H. Liu and Viren Murthy</div>
            <div class="subtitle2">Routledge, Feb 16, 2017, ISBN | 9781138919846</div>
          </div>

        </div>
        <!--灰色block-->
        <div class="book_block" >
          <div class="book" style="float:left; width: 132px; padding: 1.5vh 2.5vw; display: inline-block;">
            <img src="<?php bloginfo('template_url'); ?>/images/Renjian_Thought_Review_6.jpg" />
          </div>

          <div class="book_content_block">
            <div class="book_content_title">
              求生意志（Will to Live)
            </div>
            <div class="subtitle1">Joao Biehl</div>
            <div class="subtitle2">譯者 | 陳秋山、李佳霖、曹寶文　交通大學出版社 , Dec, 2015, ISBN | 9789866301834</div>
          </div>

        </div>
      </div>



    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
