<?php
/*
* Template Name: foreign
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(3)").addClass('nav_active');
      $ (".sidebarmenu a:eq(5)").removeClass('a_show')
      $ (".sidebarmenu a:eq(5)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>


    <div class="main" style="width:76vw;">
      <div class="background_image">
        <img style="z-index:-1;" src="<?php bloginfo('template_url'); ?>/images/admissions_img_04.jpg" />
        <div class="overseas-text" style="height: 11vh; margin-top: -13.5vh;">
          <a target="_blank" href="http://www.ia.nctu.edu.tw/bin/home.php" class="btn btn-content" style="border: 1px solid #fff;margin-right: 3vw;">
            <span style="color: #fff;">交大
              國際處</span>
          </a>
          <div class="overseas-title">外籍生招生</div>
          <div class="overseas-subtitle">
            <?php $foreign_subtitle = get_field( "foreign_subtitle" );
              if( $foreign_subtitle ){
                echo $foreign_subtitle;
              }
            ?>
          </div>
          <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw; color:#fff;">
        </div>
      </div>

      <div class="foreign_block">
        <div id="foreign_style" style="width:21vw;"></div>
        <div id="foreign_style" style="width:17vw;">Entry to Fall Semester</div>
        <div id="foreign_style" style="width:24.5vw; font-size: 0.7em;">Entry to Spring Semester (Graduate programs only)</div>
        <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw;">
      </div>



      <div class="plan_detail" style="width: 63.5vw; padding: 0 2.5vw;margin-bottom: 5vh; border:none;">
        <div class="plan_content" style="height:2vh; margin-bottom:1.75vh;"> 
          <div id="foreign_style" style="width:21vw;">Application opens</div>
          <div id="foreign_style" style="width:17vw;">
            <?php $application_opens_fall = get_field( "application_opens_fall" );
              if( $application_opens_fall ){
                echo $application_opens_fall;
              }
            ?>
          </div>
          <div id="foreign_style" style="width:24.5vw;">
            <?php $application_opens_spring = get_field( "application_opens_spring" );
              if( $application_opens_spring ){
                echo $application_opens_spring;
              }
            ?>
          </div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;"> 
          <div id="foreign_style" style="width:21vw;">Application deadlines</div>
          <div id="foreign_style" style="width:17vw; white-space: pre-line;    margin-top: 6vh;">
            <?php $application_deadlines_fall = get_field( "application_deadlines_fall" );
              if( $application_deadlines_fall ){
                echo $application_deadlines_fall;
              }
            ?>
          </div>
          <div id="foreign_style" style="width:24.5vw;">
            <?php $application_deadlines_spring = get_field( "application_deadlines_spring" );
              if( $application_deadlines_spring ){
                echo $application_deadlines_spring;
              }
            ?>
          </div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;">
          <div id="foreign_style" style="width:21vw;">Announcement of Admission Result</div>
          <div id="foreign_style" style="width:17vw; white-space: pre-line;    margin-top: 6vh;">
            <?php $announcement_of_admission_result_fall = get_field( "announcement_of_admission_result_fall" );
              if( $announcement_of_admission_result_fall ){
                echo $announcement_of_admission_result_fall;
              }
            ?>
          </div>
          <div id="foreign_style" style="width:24.5vw;">
            <?php $announcement_of_admission_result_spring = get_field( "announcement_of_admission_result_spring" );
              if( $announcement_of_admission_result_spring ){
                echo $announcement_of_admission_result_spring;
              }
            ?>
          </div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;"> 
          <div id="foreign_style" style="width:21vw;">Classes start</div>
          <div id="foreign_style" style="width:17vw;">
            <?php $classes_start_fall = get_field( "classes_start_fall" );
              if( $classes_start_fall ){
                echo $classes_start_fall;
              }
            ?>
          </div>
          <div id="foreign_style" style="width:24.5vw;">
            <?php $classes_start_spring = get_field( "classes_start_spring" );
              if( $classes_start_spring ){
                echo $classes_start_spring;
              }
            ?>
          </div>
        </div>

      </div>

    </div>
