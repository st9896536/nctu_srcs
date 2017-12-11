<?php
/*
 * Template Name: administration-staff
 */
?>

<?php $thisPage="administration-staff"; ?>


<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />

</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>



<div class="container">
  <div class="row">
    <div class="main" >
      <div class="main_long"><font>行政人員</font></div>
      <div class="professor_big_image">
        <img style="width=:71.875vw; z-index:-1;" src="<?php bloginfo('template_url'); ?>/images/graduate_chair.jpg" />
        <div class="professor_text" style="width:34.5vw; margin-top:-25vh; margin-left:2.5vw;">
          <div class="professor_block">
            <div class="professor_block_text1" style="width:32vw; margin-bottom:1vh;">
              <p>社文所&nbsp;所長</p>
            </div>
            <div class="professor_block_text2" style="width:32vw; height:4.75vh; margin-bottom:2.25vh;">
              <p>劉紀慧</p>
            </div>
            <div id="hr-line" style="margin-top:4.25vh; margin-bottom:1.5vh;">
              <HR color="#ffffffe6" size="1px" >
            </div>

            <div class="professor_block_text3" style="width:32vw; height:2.5vh;">
              <p>美國伊利諾大學比較文學博士</p>
            </div>
          </div>
        </div>

      </div>


    </div>

  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
