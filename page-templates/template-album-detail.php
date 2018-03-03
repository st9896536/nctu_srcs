<?php
/*
 * Template Name: album-detail
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
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

    <div class="main" style="margin-bottom:5vh;">
      <div class="album-block">
        <div class="album-text">
          <a href="" class="btn btn-content" style="width:4vw; height:4vw;margin-right:1vw; margin-top:15vh;">
            <span>回列表</span>
          </a>
          <div id="a1" style="padding-left: 1.25vw;margin-top:6.25vh; height:10.5vh;">年度傑出學者講座─小熊英二</div>
          <div id="a2" style="padding-left: 1.25vw;">35張照片</div>
          <div id="a3" style="padding-left: 1.25vw;">2016.11.28-29</div>
        </div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
      </div>
      <div class="album-block">
        <div class="album-area"><img src="<?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0004.jpg" /></div>
      </div>
      <div class="album-block">
        <div class="album-area"><img src="<?php bloginfo('template_url'); ?>/images/0003.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
      </div>
      <div class="album-block">
        <div class="album-area"><img src="<?php bloginfo('template_url'); ?>/images/0004.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
        <div class='album-area'><img src="<?php bloginfo('template_url'); ?>/images/0003.jpg" /></div>
      </div>

    </div>


</body>
