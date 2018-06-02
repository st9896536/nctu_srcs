<?php
/*
* Template Name: overseas
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
          <a target="_blank" href="https://aadm.nctu.edu.tw/admit/" class="btn btn-content" style="border: 1px solid #fff;margin-right: 3vw;">
            <span style="color: #fff;">交大
              綜合組</span>
          </a>
          <div class="overseas-title">僑生港澳生招生</div>
          <div class="overseas-subtitle">
            <?php $overseas_subtitle = get_field( "overseas_subtitle" ); 
            if( $overseas_subtitle ){
              echo $overseas_subtitle;
            }
            ?>
          </div>
          <HR size="1px" style="margin-top:2.75vh; margin-bottom:1.5vh; width:62.5vw; color:#fff;">
          <div class="overseas-content">
            <?php $overseas_content = get_field( "overseas_content" ); 
            if( $overseas_content ){
              echo $overseas_content;
            }
            ?>
          </div>

        </div>
      </div>

    </div>
