<?php
/*
 * Template Name: student-download
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(5)").removeClass('a_show');
      $ (".sidebarmenu a:eq(5)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main" style="width:71.825vw;">
      <div class="title_block" style="height: 20vh;margin-bottom: 3vh;">
        <div class="title_r" style="width: 10vw; float:left; height:2.75vh;">表格下載</div>
        <?php
        $file = get_field('waive_credit_hours');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="margin-left: -10vw;border: 1px solid #000;margin-right: 3vw;"><span>抵免學分</span></a>
        <?php endif; ?>
        <?php
        $file = get_field('graduate_progress_report');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;"><span>研究生學習
進度報告</span></a>
        <?php endif; ?>
        <?php
        $file = get_field('dissertation_format');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;"><span>交大學位論文
格式規範
</span></a>
        <?php endif; ?>
        <?php
        $file = get_field('proposal_for_oral_process');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;"><span>碩、博提案
口試流程</span></a>
        <?php endif; ?>
        <?php
        $file = get_field('oral_test_notice');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;"><span>碩、博
口試通知</span></a>
        <?php endif; ?>
      </div>
      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-master">
        <div class="button_style_blue" style="position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">
          碩士班
        </div>
        <div class="rule-master-list" style="width: 71.875vw; padding-top: 5vh;">
            <?php 
            $student_download_master = get_post_meta( $post->ID, 'student_download_master', true );
              foreach( $student_download_master as $stu_download ){ ?>
                <div class="list-block">
                  <ul>
                    <?php
                      $url = wp_get_attachment_url( $stu_download['upload_the_file_you_want']);?>
                      <a href="<?php echo $url ?>" download><li><?php echo $stu_download['file_name']?></li></a>
                  </ul>
                </div>
            <?php } ?>
        </div>
      </div>


      <div class="rules-doctor" style="margin-top: 5vh;">
        <div class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">
            博士班
        </div>

        <div class="rule-doctor-list" style="width: 71.875vw; padding-top:5vh;">
            <?php 
            $student_download_doctor = get_post_meta( $post->ID, 'student_download_doctor', true );
              foreach( $student_download_doctor as $doctor_download ){ ?>
                <div class="list-block">
                  <ul>
                    <?php
                      $url = wp_get_attachment_url( $doctor_download['upload_the_file_about_doctor']);?>
                      <a href="<?php echo $url ?>" download><li><?php echo $doctor_download['file_name_doctor']?></li></a>
                  </ul>
                </div>
            <?php } ?>
        </div>
        </div>
      </div>
    </div>
</body>
