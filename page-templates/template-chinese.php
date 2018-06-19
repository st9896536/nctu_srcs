<?php
/*
* Template Name: chinese
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(3)").addClass('nav_active');
      $ (".sidebarmenu a:eq(4)").removeClass('a_show')
      $ (".sidebarmenu a:eq(4)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>


    <div class="main" style="width:72vw;">
      <a target="_blank" href="https://aadm.nctu.edu.tw/admit/" class="btn btn-content">
        <span>交大
          綜合組</span>
      </a>
      <div class="f_block">

        <div class="chinese-title">陸生招生</div>
        <div class="chinese-class">
          <?php $chinese_class = get_field( "chinese_class" );
            if( $chinese_class ){
              echo $chinese_class;
            }
            ?>
        </div>
        <div class="chinese-extra" style="font-size: 0.8em; letter-spacing: 0em;">
          <?php $chinese_extra = get_field( "chinese_extra" );
            if( $chinese_extra ){
              echo $chinese_extra;
            }
            ?>
        </div>
        <HR size="1px" style="margin-top:1.75vh; margin-bottom:2.25vh; width:66.5vw;">
        <div class="chinese-reg">
          <?php $chinese_register = get_field( "chinese_register" );
            if( $chinese_register ){
              echo $chinese_register;
            }
            ?>

        </div>

        <div class="chinese-class" style="margin-top: 2.75vh; margin-bottom:1.75vh;">本所特色</div>

          <div class="chi-features" style="margin-top: 2vh;">
            <?php $chi_features = get_field( "chi_features" );
            if( $chi_features ){
              echo $chi_features;
            }
            ?>
            <!-- <li>跨領域、跨文化與在地思考的知識探討</li>
            <li>兼有國際觸角與當代議題的學術眼界</li>
            <li>深化理論思考與開拓研究視野的課程</li>
            <li>結合知性、創造、批判與運動的實踐</li>
            <li>著重台灣─東亞─亞洲─世界的環節</li>
            <li>期待研究生發展具獨特問題意識而有跨領域研究格局的論文計畫</li> -->
          </div>

        <div class="chi-content">
          <?php $chi_content = get_field( "chi_content" );
            if( $chi_content ){
              echo $chi_content;
            }
            ?>
          <!-- <p>本所研究領域：「社會、文化與政治思想」、「臺灣文化研究」、「東亞現代性」、「中國現當代研究」、「文化史比較研究」。</p>
          <p>報考系統及報考資格請詳參：大學校院招收大陸地區學生聯合招生委員會位址：http://rusen.stust.edu.tw/cpx/index.html</p>
          <p>本所招生位址為：http://www.srcs.nctu.edu.tw/srcs/index.aspx</p>
          <p>首頁之【最新消息】之公告區或招生訊息 【陸生招生】交大社會與文化研究所碩士班、博士班招收大陸地區學生資訊 。</p>
          <p>國立交通大學陸生招生資訊位址：http://exam.nctu.edu.tw/stut.htm</p> -->
        </div>

        <div class="chinese-class" style="margin-top: 2.75vh; margin-bottom:1.75vh;">應徵資料</div>

        <div class="reg-data" style="width:49vw;">
          <div class="left-master" style="display:inline-block; float:left;">
            <a href="#" class="button_style_blue">碩士班:</a>
            <p style="padding-top:5vh;">必繳:</p>
            <ul class="chi-features" style=" margin-top: 2vh; margin-left: 1.5vw; list-style-type: decimal;">
              <?php $master_need = get_field( "master_need" );
                if( $master_need ){
                  echo $master_need;
                }
                ?>
              <!-- <li>推薦函2封。</li>
              <li>兼有國際觸角與當代議題的學術眼界</li>
              <li>簡要自傳（1000字以內）。</li>
              <li>讀書研究計畫（3000字以內）。</li>
              <li>大學歷年成績單。</li>
              <li>英語能力證明影本。</li> -->
            </ul>
            <p>選繳:</p>
            <ul class="chi-features" style=" margin-top: 2vh; margin-left: 1.5vw; list-style-type: decimal;">
              <?php $master_non_essential = get_field( "master_non_essential" );
                if( $master_non_essential ){
                  echo $master_non_essential;
                }
                ?>
              <!-- <li>專業成果。</li> -->
            </ul>
          </div>
          <div class="right-doctor" style="display:inline-block; float:right;">
            <a href="#" class="button_style_red">博士班:</a>
            <p style="padding-top:5vh;">必繳:</p>
            <ul class="chi-features" style=" margin-top: 2vh; margin-left: 1.5vw; list-style-type: decimal;">
              <?php $doctor_need = get_field( "doctor_need" );
                if( $doctor_need ){
                  echo $doctor_need;
                }
                ?>
              <!-- <li>推薦函2封。</li>
              <li>兼有國際觸角與當代議題的學術眼界</li>
              <li>簡要自傳（1000字以內）。</li>
              <li>讀書研究計畫（3000字以內）。</li>
              <li>大學歷年成績單。</li>
              <li>英語能力證明影本。</li>
              <li>碩士論文（尚未完成者請繳交碩士論文初稿）。</li> -->
            </ul>
            <p>選繳:</p>
            <ul class="chi-features" style=" margin-top: 2vh; margin-left: 1.5vw; list-style-type: decimal;">
              <?php $doctor_non_essential = get_field( "doctor_non_essential" );
                if( $doctor_non_essential ){
                  echo $doctor_non_essential;
                }
                ?>
              <!-- <li>專業成果。</li> -->
            </ul>
          </div>
        </div>
      </div>






    </div>
