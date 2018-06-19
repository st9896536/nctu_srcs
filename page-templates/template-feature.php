<?php
/*
* Template Name: feature
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(3)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show')
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>


    <div class="main" style="width:71.5vw;">
      <div class="f_block">
        <div class="feature-title">特色</div>
        <HR size="1px" style="margin-bottom:1.25vh;">
          <div id="features" style="margin-top: 2vh;">
            <?php $feature_list = get_field( "feature_list" );
            if( $feature_list ){
              echo $feature_list;
            }
            ?>
          </div>

        <div class="feature-content" style="margin-top:5vh;">
          <?php $feature_content = get_field( "feature_content" );
            if( $feature_content ){
              echo $feature_content;
            }
            ?>
        </div>
      </div>

      <div class="video_block" style="margin-right:8.5vw; margin-top: 5vh; float:left; width:31.25vw; margin-bottom:5vh;">
        <div class="video-title">
          <?php $video_name1 = get_field( "video_name1" );
            if( $video_name1 ){
              echo $video_name1;
            }
            ?>
        </div>
            <?php $video_link1 = get_field( "video_link1" );
              echo $video_link1;
            ?>

      </div>
      <div class="video_block" style="margin-top: 5vh; width:31.25vw; display:inline-block;">
        <div class="video-title">
          <?php $video_name2 = get_field( "video_name2" );
            if( $video_name2 ){
              echo $video_name2;
            }
            ?>
        </div>
            <?php $video_link2 = get_field( "video_link2" );
              echo $video_link2;
            ?>
      </div>




    </div>
