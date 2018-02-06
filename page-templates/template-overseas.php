<?php
/*
* Template Name: overseas
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
      $ (".sidebarmenu a:eq(3)").removeClass('a_show')
      $ (".sidebarmenu a:eq(3)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>


    <div class="main" style="width:76vw;">
      <div class="background_image">
        <img style="z-index:-1;" src="<?php bloginfo('template_url'); ?>/images/admissions_img_03.jpg" />
        <div class="overseas-text" >
          <a href="" class="btn btn-content" style="border: 1px solid #fff;margin-right: 3vw;">
            <span style="color: #fff;">交大 綜合組</span>
          </a>
          <div class="overseas-title">僑生港澳生招生</div>
          <div class="overseas-subtitle">詳見本校106學年度招生簡章或請上網查詢本校各類招生訊息</div>
          <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw; color:#fff;">
          <div class="overseas-content">交通大學社會與文化研究所成立於2002年，設有碩士班與博士班。社文所的創立宗旨建立於社會研究（社會實證研究與批判理論）與文化研究
（跨學科與在地化研究）的理念。社文所課程以跨領域、知識實踐以及批判反省為特色，強調面對文化與社會象徵形式的意識型態問題，分析文
化政治與社會歷史脈絡，並回應當前思想界所關注之議題。社文所課程以超越學科領域的「社會、文化批判理論」作為理論思考深化的主軸，發
展：「台灣社會與文化」，「東亞歷史與文化」，「藝術社會行動」三個重點方向。博士班另有「亞際文化研究組」，利用台聯大系統（交通大學、清華
大學、中央大學、陽明大學）的文化研究團隊合作平台，拓展多元國際視野與學術交流的學習環境。</div>

        </div>
      </div>

    </div>
