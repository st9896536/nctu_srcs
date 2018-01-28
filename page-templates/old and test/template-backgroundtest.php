<?php
/*
 * Template Name: backgroundtest
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <!--圖片輪播的css+jquery-->
  <!-- Place somewhere in the <head> of your document -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>

  <style>
    body {
      background-image: url("<?php bloginfo('template_url'); ?>/images/bg.jpg");
    }
  </style>

  <!-- Place in the <head>, after the three links -->
  <script type="text/javascript" charset="utf-8">

  </script>

</head>

<?php get_template_part('includes/header'); ?>
  <!-- background-image -->

<body>


<div class="container">
  <div class="row">

  </div><!-- /.row -->
</div><!-- /.container -->
</body>
