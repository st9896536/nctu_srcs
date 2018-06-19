<?php
/*
 * Template Name: full-time-teacher-detail
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show')
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>


<div class="container">
  <div class="row">
    <div class="main" >
      <div class="photo-teacher" style="margin-right: 1.5vw; width: auto; display: inline-block; vertical-align: top;">

        <img style="width:200px; height:auto;" src="<?php bloginfo('template_url'); ?>/images/professor/prof_zuyuanhon_photo1.jpg" />

      </div>

      <div class="professor_name_block" style="width: 13.5vw; margin-right: 1.5vw; display: inline-block;  vertical-align: top;">
        <div class="professor_position" style="height: 2.75vh; margin-bottom: 1vh;">教授</div>
        <div class="professor_name" style="margin-bottom: 11vh;">朱元鴻</div>
        <div class="professor_info_block">
          <HR width="30px" size="1px" >
          <div class="pro_blocks" style="display: inline-block; margin-left: 4.5vw;margin-top: -1vh;">
            <ul style="list-style: none;">
              <li>簡介</li>
              <li>學經歷</li>
              <li>著作</li>
              <li>研究計畫</li>
            </ul>
          </div>
        </div>
      </div>
    

      

      <div class="right-side-pro-detail" style="    display: inline-block;    width: 40vw;">
        <div class="teacher_education" style="height: 2vh;margin-bottom: 2vh;">美國德州大學社會學博士</div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="teacher_profile" style="margin-bottom: 2.5vh;">
          <p>E-mail</p>
          <p>Tel</p>
          <p>Fax</p>
          <p>Office-hour</p>
        </div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="profession_area" style="    margin-bottom: 1.5vh;">學術專長領域</div>
        <div class="teacher_profile" style="margin-bottom: 2.5vh;">
          <p>E-mail</p>
          <p>Tel</p>
          <p>Fax</p>
          <p>Office-hour</p>
        </div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="profession_intro" style="    margin-bottom: 1.5vh;">簡介</div>
        <div class="teacher_detail_content" style="margin-bottom: 2.5vh;">
          <p>大略說，我的研究興趣落於三極之間的曲面：其一為史的興趣，由研究主題剝繹而出的思想史、社會史、文化史探索；其二為當代理論的興趣， 社會理論與文化理論的當代議題與論辯；其三為生活世界的直接經驗，例如都市民族誌與底層社會的研究。工作的主題則常於知識論、倫理學、政治與美學之間穿梭牽連。</p>
          <p>開設課程與可發展的研究計畫──

            ￭ 社會思想與文化理論：古典背景，當代議題與論辯，理論專題：李歐塔，傅柯，巴赫汀，布希亞，波迪厄，高夫曼

            ￭ 當代台灣研究：底層社會研究，都市民族誌（次文化研究），生活風格研究，都市空間的文化與衝突

            ￭ 文化史比較研究：集體記憶的敘事分析，消費社會的文化史比較，藝術史與博物館的神話創作

            ￭ 文化政策研究：博物館的展示政略

            ￭ 科技文化研究：科技知識與風險媒介，傳播科技/資訊結構與民主社會，隱私：資訊/基因科技的法律與倫理，基因科技的文化建構</p>
        </div>
        
      </div>




    </div>


  </div><!-- /.row -->
</div><!-- /.container -->

