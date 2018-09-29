<?php get_template_part('includes/header'); ?>



</?php get_template_part('includes/footer'); ?>


</?php get_template_part('includes/loops/content', 'singletest'); ?>
<?php
$post = $wp_query->post;

if ( in_category( 'news_srcs' ) ) {
  // get_template_part('includes/sidebar-news-relative');
  get_template_part('includes/loops/content', 'single_news');
}
else if ( in_category( 'gallery_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_album');
}
else if ( in_category( 'poster_straight_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_straight_posters');
}
else if ( in_category( 'poster_horizontal_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_horizontal_posters');
}
else if ( in_category( 'fulltime_teacher_info_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_teachers_info');
}
else if ( in_category( 'lecture_course_horizontal_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_lecture_course_horizontal');
}
else if ( in_category( 'lecture_course_straight_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_lecture_course_straight');
}
else if ( in_category( 'workshop_straight_srcs' ) ) {
  get_template_part('includes/loops/content', 'single_workshop_straight');
}
?>
