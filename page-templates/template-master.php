<?php
/*
* Template Name: master
*/

?>

<head>
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

<body style="height:90vh;">
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
        <div class="master-num">
          <?php $master_number = get_field( "master_number" ); 
            if( $master_number ){
              echo $master_number;
            }
            ?>
        </div>
        <div class="master-extra">
          <?php $master_extra = get_field( "master_extra" ); 
            if( $master_extra ){
              echo $master_extra;
            }
            ?></div>
        <HR size="1px" style="margin-top:1.75vh; margin-bottom:2.25vh; width:34vw;">

        <div class="interview" style="width:34vw;margin-bottom: 3.5vh;">
          <a href="#" class="button_style_red" >甄試入學</a>
          <div class="interview-num">
            <?php $interview_number = get_field( "interview_number" ); 
            if( $interview_number ){
              echo $interview_number;
            }
            ?></div>
          <div class="interview-register-date">
            <?php $interview_register_date = get_field( "interview_register_date" ); 
            if( $interview_register_date ){
              echo $interview_register_date;
            }
            ?>
          </div>
          <div class="interview-way">
            <?php $interview_way = get_field( "interview_way" ); 
            if( $interview_way ){
              echo $interview_way;
            }
            ?></div>
        </div>
        <div class="test" style="width:34vw; margin-bottom: 3.5vh;">
          <a href="#" class="button_style_blue" style="color: rgba(255, 255, 255, 1);">考試入學</a>
          <div class="test-num">
            <?php $test_number = get_field( "test_number" ); 
            if( $test_number ){
              echo $test_number;
            }
            ?></div>
          <div class="test-register-date">
            <?php $test_register_date = get_field( "test_register_date" ); 
            if( $test_register_date ){
              echo $test_register_date;
            }
            ?></div>
          <div class="test-date">
            <?php $test_date = get_field( "test_date" ); 
            if( $test_date ){
              echo $test_date;
            }
            ?></div>
        </div>
      </div>

      <!-- 招生海報 -->
      <div class="poster_img" style="float: right; width:35vw; height:auto; display: inline-block;">
        <!-- <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="</?php bloginfo('template_url'); ?>/images/admissions_img_02.jpg" /> -->
        <?php 

        $image = get_field('poster_image');

        if( !empty($image) ): ?>

          <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>        
      </div>
    </div>
</body>
