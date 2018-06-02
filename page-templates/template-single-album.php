<?php
/*
 * Template Name: single-album
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(4)").addClass('nav_active');
      $ (".sidebarmenu a:eq(3)").removeClass('a_show');
      $ (".sidebarmenu a:eq(3)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-global-lounge'); ?>


<body>

    <div class="main" style="width:75vw;">
      <div class="gray-block1" style="height:7.25vh; background-color:rgba(50,50,50,1);"></div>
      <div class="zoom-image" style="height:50vw;">
        <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
      </div>
      <div class="gray-block2" style="height:12.25vh; background-color:rgba(50,50,50,1); "></div>
        <div class="click-buttons" style="margin-left: calc(35vw - 63px);margin-top:-8.5vh;">
          <a href="#" class="btn_left_lightgrey"></a>
          <a href="#" class="btn_left_lightgrey btn_close_lightgrey"></a>
          <a href="#" class="btn_left_lightgrey btn_right_lightgrey"></a>

        </div>
    </div>


</body>
