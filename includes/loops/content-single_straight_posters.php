<?php
/*
The Single Posts Loop  (活動海報直式內文)
=====================
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<body>
    <div class="main">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="poster_img" style="width:31.25vw; height:auto; display: inline-block;">
        <?php 

        $image = get_field('poster_image');

        if( !empty($image) ): ?>

          <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        
        <!-- <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="</?php bloginfo('template_url'); ?>/images/post 800x1169.jpg" /> -->
      </div>
      <div class="right_side" style="float: right;display: inline-block; vertical-align: top;margin-right: 2vw;">
        <div class="poster_title" style="width:37.5vw">
          <div id="title_chi">
            <?php the_title()?>
            <!-- 藝術介入與社會批判: 亞際知識對話 -->
          </div>
          <div id="title_eng">
              <?php $poster_title_eng = get_field( "poster_title_eng" ); 
              if( $poster_title_eng ){
                echo $poster_title_eng;
              }
              ?>
            <!-- Artistic Intervention and Social Critique: A Dialogue in the Inter-Asian Context -->
          </div>
          <HR size="1px" color="#4F4F4F" style="width:37.5vw; margin-bottom:2.25vh;">
          <div class="date_block" style="margin-bottom:2.25vh;">
            <div class="poster_year">
              <?php $poster_year = get_field( "poster_year" ); 
              if( $poster_year ){
                echo $poster_year;
              }
              ?>
              <!-- 2017 -->

            </div>
            <div class="poster_date">
              <?php $poster_date = get_field( "poster_date" ); 
              if( $poster_date ){
                echo $poster_date;
              }
              ?>
            <!-- 12/8-12/9 -->
            </div>
          </div>
          <div id="place_chi">
              <?php $poster_place_chi = get_field( "poster_place_chi" ); 
              if( $poster_place_chi ){
                echo $poster_place_chi;
              }
              ?>
            <!-- 國立交通大學人社三館103室 -->
          </div>
          <div id="place_eng">
              <?php $poster_place_eng = get_field( "poster_place_eng" ); 
              if( $poster_place_eng ){
                echo $poster_place_eng;
              }
              ?>
          <!-- Seminar room 103, HA Building 3, Chiao Tung University, Hsinchu, Taiwan -->
          </div>
          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">
          <!--content_block-->
          <div class="lecturer_block" style="width:37.5vw; height:auto;">

            <?php $poster_lecturers = get_field( "poster_lecturers" ); 
              if( $poster_lecturers ){
                echo $poster_lecturers;
              }
            ?>
            
          </div>
          <?php $go_register = get_field( "go_register" ); ?>
          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.25vh;">

          
          <div class="button_block">
            
            <div class="button" style="width: 9vw; float: left;">
            <?php
              if( $go_register ){ ?>
                <div style="height:4vh;">
                  <a href="<?php echo $go_register; ?>"  class="num_button">1</a>
                  <a href="<?php echo $go_register; ?>"  class="go_register" style="margin-left:0.75vw;display: inline-block;">線上報名</a>
                </div>
              <?php 
              }
              ?>
            </div>
            <div class="button" style="width: 9vw;">
              <?php $go_website = get_field( "go_website" );  
              if( $go_website ){ ?>
                <div style="height:4vh;">
                  <a href="<?php echo $go_website; ?>"  class="num_button">2</a>
                  <a href="<?php echo $go_website; ?>"  class="go_website" style="margin-left:0.75vw;display: inline-block;">活動網頁</a>
                </div>
            </div>

            
          </div>
          

          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:3.5vh; margin-bottom:1.75vh;">
          <?php
            }
          ?>

          <div class="content_guideline">
            <?php $poster_content_chi = get_field( "poster_content_chi" ); 
              if( $poster_content_chi ){
                echo $poster_content_chi;
              }
            ?>
          </div>
          <div class="content_guideline">
            <?php $poster_content_eng = get_field( "poster_content_eng" ); 
              if( $poster_content_eng ){
                echo $poster_content_eng;
              }
            ?>
          </div>

            <?php endwhile; ?>
          <?php endif; ?>


          </div>
        </div>
    </div>
</body>
