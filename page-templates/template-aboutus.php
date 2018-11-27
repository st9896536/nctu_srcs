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
      <div class="main_long" style="margin-top: 5vh;"><font>學術特色</font></div>
      <!-- <div class="main-text-long">

      </div> -->
      <div class="main-text" style="height: auto; float: left; margin-right: 6vw;"> <!--左邊的文字部分-->
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
      <div class="main-text" style="height: auto; display: inline-block;  margin-bottom: 5vh;"> <!--右邊的文字區塊-->
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

        <div class="short-title">
          社文所的週邊學術資源
        </div>

        <div class="main-text-p">
          社文所結合校內人社院以及客家學院師資，並推動交通大學、清華大學與中央大學的台聯大系統文化研究跨校學程， 提供豐富的「台聯大文化研究跨校課程」。
        </div>
      </div>

      <div class="main_long" style="margin-top: 15vh; width: 57.5vw;"><font>社文所的學生現狀</font></div>
      <div class="main-text">
        <div class="short-title" style="width: 73.5vw;">
          社文所歡迎不同人文社會學科背景而對於跨領域研究有興趣的學生，更歡迎對於理論思考有志向的學生。<br>
          本所目前學生人數碩士班39人， 博士班20人 。<br>
          近年來陸續有獲得國外碩士學位之研究生申請入學，亦有國際學生申請入學。<br>
        </div>

        <div class="main-text-p" style="width: 73.5vw;">
          本所學生來自不同領域，包括社會學、傳播、歷史、文學（中文／外文）、哲學、藝術、政治哲學、國際關係、法律等， 課堂中充分呈現跨領域討論的思想刺激。<br>

        ￭ 在過去年招收的學生具有多元學科背景的特色，組成略分如下：<br>

        ￭ 人文學科(60%)：中文(20%)、英美語文(20)，法文＋德文＋俄文＋日文(10%)、歷史＋哲學＋藝術（10%）<br>

        ￭ 社會科學(30%)：新聞傳播(10%)、社會學(10%)、法律＋政治＋經濟 (10%)<br>

        ￭ 理工學科以及其他(10%) ：機械＋電子＋電子物理＋建築＋醫學<br>

        ￭ 國際學生：波蘭、拉脫維亞、菲律賓、泰國、俄羅斯、馬來西亞、越南、韓國<br>
        </div>
      </div>
    </div>



  </div><!-- /.row -->
</div><!-- /.container -->
