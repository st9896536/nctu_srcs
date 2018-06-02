<?php get_template_part('includes/header'); ?>



</?php get_template_part('includes/footer'); ?>


</?php get_template_part('includes/loops/content', 'singletest'); ?>
<?php
$post = $wp_query->post;

if ( in_category( 'news_srcs' ) ) {
  get_template_part('includes/sidebar-news-relative');
  get_template_part('includes/loops/content', 'single_news');
}
else if ( in_category( 'gallery_srcs' ) ) {
  // get_template_part('includes/sidebar-global-lounge');
  get_template_part('includes/loops/content', 'single_album');
}
else if ( in_category( 'poster_srcs' ) ) {
  // get_template_part('includes/sidebar-global-lounge');
  get_template_part('includes/loops/content', 'single_posters');
}
?>
