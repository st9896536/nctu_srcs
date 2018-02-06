<?php
/*
* Template Name: feature
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
          <ul class="features" style="margin-top: 2vh;">
            <li>跨領域、跨文化與在地思考的知識探討</li>
            <li>兼有國際觸角與當代議題的學術眼界</li>
            <li>深化理論思考與開拓研究視野的課程</li>
            <li>結合知性、創造、批判與運動的實踐</li>
            <li>著重台灣─東亞─亞洲─世界的環節</li>
            <li>期待研究生發展具獨特問題意識而有跨領域研究格局的論文計畫</li>
          </ul>

        <!-- <div class="features">跨領域、跨文化與在地思考的知識探討</div>
        <div class="features">兼有國際觸角與當代議題的學術眼界</div>
        <div class="features">深化理論思考與開拓研究視野的課程</div>
        <div class="features">結合知性、創造、批判與運動的實踐</div>
        <div class="features">著重台灣─東亞─亞洲─世界的環節</div>
        <div class="features">期待研究生發展具獨特問題意識而有跨領域研究格局的論文計畫</div> -->

        <div class="feature-content" style="margin-top:5vh;">
          <p>交通大學社會與文化研究所的師資專長在於「批判理論」以及「亞洲現代性」，是台灣唯一以文化研
  究為名的學術單位，已具有相當規模，展現相當優秀之教學與研究成績。本所以「社會、文化與政治
  思想」作為理論思考深化的主軸，另外發展「台灣文化研究」、 「東亞現代性」以及「文化史比較研究」
  三個重點方向，並且也凸顯台灣的社會實踐以及文化創意活動的介入。 </p>
        </div>
      </div>

      <div class="video_block" style="margin-right:8.5vw; margin-top: 5vh; float:left; width:31.25vw; margin-bottom:5vh;">
        <div class="video-title">社會與文化研究所招生宣傳短片</div>
        <iframe width="100%" height="315"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
      </div>
      <div class="video_block" style="margin-top: 5vh; width:31.25vw; display:inline-block;">
        <div class="video-title">亞際文化研究國際學位學程</div>
        <iframe width="100%" height="315"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
      </div>




    </div>
