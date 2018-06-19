<?php
/*
The Single Posts Loop  (活動海報橫式內文)
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
      <div class="poster_img" style="width:68.75vw; height:auto; display: inline-block;">
        <?php 

        $image = get_field('poster_image');

        if( !empty($image) ): ?>

          <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>

      <div class="poster_title" style="width:68.75vw; margin-top: 3vh;">
        <div id="title_chi"><?php the_title()?></div>
        <div id="title_eng">
          <?php $poster_title_eng = get_field( "poster_title_eng" ); 
            if( $poster_title_eng ){
              echo $poster_title_eng;
            }
          ?>
        </div>
        <HR size="1px" color="#4F4F4F" style="width:68.75vw; margin-bottom:2.25vh;">
      </div>

      <div class="left_content" style="float:left; width:33vw; display:inline-block;">
        <div class="date_block" style="margin-bottom:2.25vh;">
          <div class="poster_year">
            <?php $poster_year = get_field( "poster_year" ); 
              if( $poster_year ){
                echo $poster_year;
              }
            ?>
          </div>
          <div class="poster_date">
            <?php $poster_date = get_field( "poster_date" ); 
              if( $poster_date ){
                echo $poster_date;
              }
            ?>
          </div>
        </div>
        <div id="place_chi">
          <?php $poster_place_chi = get_field( "poster_place_chi" ); 
            if( $poster_place_chi ){
              echo $poster_place_chi;
            }
          ?>
        </div>
        <div id="place_eng">
          <?php $poster_place_eng = get_field( "poster_place_eng" ); 
            if( $poster_place_eng ){
              echo $poster_place_eng;
            }
          ?>
        </div>
        <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">
        <!--content_block-->
        <div class="lecturer" style="width:33vw; height:auto;">
          <p style="width:33vw; !important;">
            <?php $poster_lecturers = get_field( "poster_lecturers" ); 
              if( $poster_lecturers ){
                echo $poster_lecturers;
              }
            ?>
          </p>
        </div>

        <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">

        <p style="width:33vw; margin-bottom:1.5vh; !important;">
            <?php $poster_content_chi = get_field( "poster_content_chi" ); 
              if( $poster_content_chi ){
                echo $poster_content_chi;
              }
            ?>
          </p>
      </div>

      <div class="right_content" style=" margin-left:2.75vw; width:33vw;display:inline-block;">
        
        <div class="button_block" style="width:33vw; margin-bottom: 5vh;">
          <HR size="1px" color="#4F4F4F" style="width:20vw; margin-top: 5.5vh;">
          <HR size="1px" color="#4F4F4F" style="width:20vw; margin-top:0.2vh;">


          <div class="button" style="margin-left: 0.6vw; float: right; margin-bottom: 1vh; display: inline-block; margin-right:0.6vw;margin-top: -1.5vh;">
            <?php $go_register = get_field( "go_register" );
              if( $go_register ): ?>
              <a href="<?php echo $go_register; ?>" id="button_register">線上報名</a>
            <?php endif; ?>
          </div>
          <div class="button" style="float: right; margin-bottom: 1vh; display: inline-block; margin-top: -1.5vh;">
            <?php $go_website = get_field( "go_website" );
              if( $go_website ): ?>
              <a href="<?php echo $go_website; ?>" id="button_register">活動網頁</a>
            <?php endif; ?>
          </div>
        </div>

        <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">

        <div class="content_guideline">
          

          <p style="width:33vw; margin-bottom:1.5vh; !important;">
            <?php $poster_content_eng = get_field( "poster_content_eng" ); 
              if( $poster_content_eng ){
                echo $poster_content_eng;
              }
            ?>
          </p>
        </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
</body>
