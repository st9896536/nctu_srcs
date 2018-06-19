<?php
/*
* Template Name: doctor
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(3)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show')
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student-recruitment'); ?>

<body style="height:90vh;">
    <div class="main" style="width:71.5vw;">

      <div class="m_block" style=" float:left; display:inline-block;">

        <a target="_blank" href="https://aadm.nctu.edu.tw/admit/" class="btn btn-content">
          <span>交大
            綜合組</span>
        </a>
        <div class="master-title">博士班招生</div>
        <div class="master-num">
          <?php $doctor_number = get_field( "doctor_number" );
            if( $doctor_number ){
              echo $doctor_number;
            }
            ?>
        </div>
        <div class="master-extra" style="font-size: 0.8em; letter-spacing: 0em;">
          <?php $doctor_extra = get_field( "doctor_extra" );
            if( $doctor_extra ){
              echo $doctor_extra;
            }
            ?>
        </div>
        <HR size="1px" style="margin-top:1.75vh; margin-bottom:2.25vh; width:34vw;">

        <div class="d-content" >
          <?php $doctor_content = get_field( "doctor_content" );
            if( $doctor_content ){
              echo $doctor_content;
            }
            ?>
          <!-- <p>社會與文化研究所戮力建立跨領域、跨校整合，以及國際化的教學環境暨學
          術合作平台，以培育頂尖之研究與領導人才，提升整體學術表現、發揮學術影
          響力。</p>
          <p>本所教師專長著重跨領域、批判思考、國際觸角、知識實踐、在地化研究，與當
          代議題。重點領域課群包括：（1）社會文化批判理論，（2）台灣文化研究，（3）
          亞際文化研究，（4）藝術社會行動。</p>
          <p>透過與文化研究國際中心（交通大學＆台灣聯合大學系統）暨亞際文化研究國
          際學位學程（台灣聯合大學系統）頻密合作，本所建立運作極有效率之跨校學
          術合作平台，持續邀請重量級國際學者長期或短期駐校、講演，且頻繁主辦國
          際學術研討會，以便提供學生常態性的國際學術環境。</p> -->
        </div>

        <div class="interview" style="width:34vw;margin-bottom: 3.5vh;">
          <!-- <div class="list_div" style="float: right; margin-top:3vh; display: inline-block;">
            <a href="#" class="back-to-list" style="margin-right:0vw;">招生特色</a>
          </div> -->
          <a href="" class="btn btn-content" style="white-space: pre-line; ">
            <span>招生
              特色</span>
          </a>
          <a href="#" class="button_style_red">甄試入學</a>
          <div class="interview-num">
            <?php $doctor_interview_number = get_field( "doctor_interview_number" );
            if( $doctor_interview_number ){
              echo $doctor_interview_number;
            }
            ?>
          </div>
          <div class="interview-register-date">
            <?php $interview_register_date = get_field( "interview_register_date" );
            if( $interview_register_date ){
              echo $interview_register_date;
            }
            ?>
          </div>
          <div class="interview-way">
            <?php $doctor_interview_way = get_field( "doctor_interview_way" );
            if( $doctor_interview_way ){
              echo $doctor_interview_way;
            }
            ?>
          </div>
        </div>
        <div class="test" style="width:34vw; margin-bottom: 3.5vh;">
          <a href="#" class="button_style_blue" style="color: rgba(255, 255, 255, 1);">考試入學</a>
          <div class="test-num">
            <?php $doctor_test_number = get_field( "doctor_test_number" );
            if( $doctor_test_number ){
              echo $doctor_test_number;
            }
            ?>
          </div>
          <div class="test-register-date">
            <?php $doctor_test_register_date = get_field( "doctor_test_register_date" );
            if( $doctor_test_register_date ){
              echo $doctor_test_register_date;
            }
            ?>
          </div>
          <div class="test-date">
            <?php $doctor_test_date = get_field( "doctor_test_date" );
            if( $doctor_test_date ){
              echo $doctor_test_date;
            }
            ?>
          </div>
        </div>
      </div>

      <!-- 招生海報 -->
      <div class="poster_img" style="float: right; width:35vw; height:auto; display: inline-block;">
        <?php

        $image = get_field('doctor_image');

        if( !empty($image) ): ?>

          <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
    </div>
</body>
