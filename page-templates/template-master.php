<?php
/*
* Template Name: master
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
      $ (".sidebarmenu a:eq(1)").removeClass('a_show')
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>


    <div class="main" style="width:71.5vw;">

      <div class="m_block" style="36vw; float:left; display:inline-block;">
        <!-- <div class="list_div" style="float: right; margin-top:3vh; display: inline-block;">
          <a href="#" class="back-to-list" style="margin-right:0vw;">交大綜合組</a>
        </div> -->
        <a target="_blank" href="https://aadm.nctu.edu.tw/admit/" class="btn btn-content">
          <span>交大
            綜合組</span>
        </a>
        <div class="master-title">碩士班招生</div>
        <div class="master-num">共9名</div>
        <div class="master-extra">另有1名流用給台聯大亞際文化研究國際學位學程</div>
        <HR size="1px" style="margin-top:1.75vh; margin-bottom:2.25vh; width:34vw;">

        <div class="interview" style="width:34vw;margin-bottom: 3.5vh;">
          <a href="#" class="button_style_gray" style="position:absolute; background-color:rgba(180,5,0,1); color: rgba(255, 255, 255, 1);">甄試入學</a>
          <div class="interview-num">4名</div>
          <div class="interview-register-date">報名日期：105年10月11日至10月14日</div>
          <div class="interview-way">甄試方式：採第一階段審查及第二階段筆試及口試兩階段甄選</div>
        </div>
        <div class="test" style="width:34vw; margin-bottom: 3.5vh;">
          <a href="#" class="button_style_blue" style="color: rgba(255, 255, 255, 1);">考試入學</a>
          <div class="test-num">5名（與甄試入學流用）</div>
          <div class="test-register-date">報名日期：105年12月8日至12月13日</div>
          <div class="test-date">筆試日期：106年2月9或10日</div>
        </div>
      </div>

      <!-- 招生海報 -->
      <div class="poster_img" style="float: right; width:35vw; height:auto; display: inline-block;">
        <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/admissions_img_02.jpg" />
      </div>




    </div>
