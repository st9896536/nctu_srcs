<?php
/*
The Single Posts Loop  (測試)
=====================
*/
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
</head>

<div class="container">
  <div class="row">
    <div class="main">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="main_long"><font><?php the_title();?></font></div>
      
      <font style="font-size: 0.7em; line-height: 1.5vh; color: #000;"><?php the_time('Y'); ?></font></br>
      <font style="font-size: 1em; line-height: 2.5vh; color: #000;"><?php the_time('m/d'); ?></font>


      <div class="main-text-long">
        <?php the_content();?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
