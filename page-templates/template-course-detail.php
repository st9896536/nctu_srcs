<?php
/*
 * Template Name: course-detail
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show')
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active')
});

  </script>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-course'); ?>

</head>

<body>


<div class="container">
  <div class="row">

    <div class="main">

      <div class="list_div" style="float: right;/* margin-top: 5vh; *//* margin-bottom: 3vh; */line-height: 13vh;display: inline-block ;border-right: rgba(60, 0, 110, 0.8) solid 8px;">
        <a href="#" class="course-download">課綱下載</a>
        <a href="#" class="curriculum">回課表</a>
      </div>
      <div class="course-data" style="width:50vw; height:auto; display:inline-block; vertical-align: top;">
        <div class="course-buttons" style="width:50vw; height:3.5vh; margin-bottom:1.5vh;">
          <a href="#" class="button_style_gray" style=" background-color:rgba(180,5,0,1); color: rgba(255, 255, 255, 1); ">必修</a>
          <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">106上學期</a>
          <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">1學分</a>
          <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">3EFG</a>
          <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">F106A</a>
        </div>

        <div class="titles" style="width:50vw; height:auto; margin-top:1.5vh;">
          <div class="course-title" style="margin-bottom:1vh;">學術訓練討論課(博)</div>
          <div class="teacher-name" style="margin-bottom:1vh;">朱元鴻 教授</div>
          <HR size="1px" style="margin-top:2vh; margin-bottom:1.5vh;">
        </div>


        <div class="course-words" style="margin-bottom:6.5vh;">
          <div id="c1" style="width:4.75vw; margin-right:1vw; display:inline-block;">課號 4030</div>
          <div id="c2" style="width:9vw; margin-right:1vw; display:inline-block;">永久課號 ICS5008</div>
          <div id="c3" style="width:7.5vw; display:inline-block;">修課人數無上限</div>
        </div>

        <div class="detail-course-block" style="width:50vw;">
          <p>先修科目或先備能力：無</p>
          <p>課程書目：</p>
          <p>推薦書目：</p>
          <p>評分方式：課堂討論65%，課堂作業25%，出席狀況10%。</p>
        </div>




      </div>


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
