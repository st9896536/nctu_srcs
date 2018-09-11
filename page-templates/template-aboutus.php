<?php
/*
 * Template Name: aboutas
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>


<div class="container">
  <div class="row">
    <div class="main">
      <div class="main-text">  <!--左邊text block-->
        <div class="main_short"><font>設立宗旨</font></div>
          <div class="main-text-p">
            <?php $establishing_purpose = get_field( "establishing_purpose" );
              if( $establishing_purpose ){
                echo $establishing_purpose;
              }
            ?>
            
          </div>
      </div>
      <div class="main-text" style="float:right; margin-top:-40.125vh; !important">  <!--右邊text block-->
        <div class="main_short"><font>教育目標</font></div>
          <div class="main-text-p">
            <?php $educational_goals = get_field( "educational_goals" );
            if( $educational_goals ){
              echo $educational_goals;
            }
            ?>

          </div>
      </div>
      <div class="main_long"><font>學術特色</font></div>
      <div class="main-text-long">

      </div>
      <div class="main-text"> <!--左邊的文字部分-->
        <div class="short-title">
          <?php $academic_features_left_bold_1 = get_field( "academic_features_left_bold_1" );
            if( $academic_features_left_bold_1 ){
              echo $academic_features_left_bold_1;
            }
            ?>
        </div>
        <div class="main-text-p">
          <?php $academic_features_left_regular_1 = get_field( "academic_features_left_regular_1" );
            if( $academic_features_left_regular_1 ){
              echo $academic_features_left_regular_1;
            }
            ?>
        </div>
        <div class="short-title">
          <?php $academic_features_left_bold_2 = get_field( "academic_features_left_bold_2" );
            if( $academic_features_left_bold_2 ){
              echo $academic_features_left_bold_2;
            }
            ?>
        </div>
        <div class="main-text-p">
          <?php $academic_features_left_regular_2 = get_field( "academic_features_left_regular_2" );
            if( $academic_features_left_regular_2 ){
              echo $academic_features_left_regular_2;
            }
            ?>
        </div>
        <div class="short-title">
          <?php $academic_features_left_bold_3 = get_field( "academic_features_left_bold_3" );
            if( $academic_features_left_bold_3 ){
              echo $academic_features_left_bold_3;
            }
            ?>
        </div>
        <div class="main-text-p">
          <?php $academic_features_left_regular_3 = get_field( "academic_features_left_regular_3" );
            if( $academic_features_left_regular_3 ){
              echo $academic_features_left_regular_3;
            }
            ?>
        </div>
      </div>
      <div class="main-text" style="float:right; margin-top:-42.125vh; !important"> <!--右邊的文字區塊-->
        <div class="short-title">
          <?php $academic_features_right_bold_1 = get_field( "academic_features_right_bold_1" );
            if( $academic_features_right_bold_1 ){
              echo $academic_features_right_bold_1;
            }
            ?>
        </div>
        <div class="main-text-p">
          <?php $academic_features_right_regular_1 = get_field( "academic_features_right_regular_1" );
            if( $academic_features_right_regular_1 ){
              echo $academic_features_right_regular_1;
            }
            ?>
        </div>
        <div class="short-title">
          <?php $academic_features_right_bold_2 = get_field( "academic_features_right_bold_2" );
            if( $academic_features_right_bold_2 ){
              echo $academic_features_right_bold_2;
            }
            ?>
        </div>
        <div class="main-text-p">
          <?php $academic_features_right_regular_2 = get_field( "academic_features_right_regular_2" );
            if( $academic_features_right_regular_2 ){
              echo $academic_features_right_regular_2;
            }
            ?>
        </div>
      </div>
    </div>



  </div><!-- /.row -->
</div><!-- /.container -->
