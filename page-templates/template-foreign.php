<?php
/*
* Template Name: foreign
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
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
          <a href="" class="btn btn-content" style="border: 1px solid #fff;margin-right: 3vw;">
            <span style="color: #fff;">交大
              國際處</span>
          </a>
          <div class="overseas-title">外籍生招生</div>
          <div class="overseas-subtitle">申請人至多可申請3個系所，並針對每一申請系所各準備一份完整的申請資料</div>
          <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw; color:#fff;">
        </div>
      </div>

      <div class="foreign_block">
        <div id="foreign_style" style="width:21vw;">Date</div>
        <div id="foreign_style" style="width:17vw;">Entry to Fall Semester</div>
        <div id="foreign_style" style="width:24.5vw; font-size: 0.7em;">Entry to Spring Semester (Graduate programs only)</div>
        <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw;">
      </div>



      <div class="plan_detail" style="width: 63.5vw; padding: 0 2.5vw;margin-bottom: 5vh; border:none;">
        <div class="plan_content" style="height:2vh; margin-bottom:1.75vh;"> <!--單一個block-->
          <div id="foreign_style" style="width:21vw;">Application opens</div>
          <div id="foreign_style" style="width:17vw;">October 1</div>
          <div id="foreign_style" style="width:24.5vw;">August 10</div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;"> <!--單一個block-->
          <div id="foreign_style" style="width:21vw;">Application deadlines</div>
          <div id="foreign_style" style="width:17vw; white-space: pre-line;    margin-top: 6vh;">
            Early Action:
              December 31
            Regular Action:
              March 31 (check updates)
          </div>
          <div id="foreign_style" style="width:24.5vw;">September 30</div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;">
          <div id="foreign_style" style="width:21vw;">Announcement of Admission Result</div>
          <div id="foreign_style" style="width:17vw; white-space: pre-line;    margin-top: 6vh;">
            Early Action:
              mid-February
            Regular Action:
              mid-May
          </div>
          <div id="foreign_style" style="width:24.5vw;">November 12</div>
        </div>
        <div class="plan_content" style="margin-bottom:1.75vh;"> <!--單一個block-->
          <div id="foreign_style" style="width:21vw;">Classes start</div>
          <div id="foreign_style" style="width:17vw;">Mid-September</div>
          <div id="foreign_style" style="width:24.5vw;">Mid-February</div>
        </div>

      </div>

    </div>
