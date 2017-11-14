<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    PPPAGE
    <?php
    wp_nav_menu( array(
        'container' => 'none',
        'theme_location' => 'navbar-right',
        'items_wrap' => '<ol id="breadcrumb-%1$s" class="%2$s breadcrumb">%3$s</div>'
    ) );
    ?>

    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
