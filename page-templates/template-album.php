<?php
/*
 * Template Name: album
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">活動相簿</div>
        <div class="options" style="width:48vw; float:right; ">
            <form>
          <!--
            <select class="semester" style="background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            　<option value="106_first_sem">2017</option>
            　<option value="105_second_sem">2016</option>
            　<option value="105_first_sem">2015</option>
            </select>
          -->
            </form>
        </div>
      </div>

      <div class="album-block" style="width:72vw;  margin-bottom: 5vh;">
<?php
// wp query
$args = array(
  'category_name' => 'gallery_srcs',
  'orderby' => 'title',
  'order'   => 'DESC',
  'posts_per_page' => 100
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
    while($the_query->have_posts()):
        $the_query->the_post();
        $image=acf_photo_gallery('album_detail_gallery', $post->ID);
        $image_first=acf_photo_gallery('album_detail_gallery', $post->ID)[0];
        $img_url=$image_first['full_image_url'];
?>
        <div class="a-single" style="margin-right:3vw;"> <!--單一個album-->
          <a href="<?php the_permalink();?>" style="text-decoration:none;">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php echo $img_url; ?>" />
            </div>
            <div class="a-text" style="height:11.5vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div style="width: 19.75vw;height: 5.5vh;padding-top: 1vh;font-weight: 500;font-size: 1em;letter-spacing: 0.05em;"><?php the_title();?></div>
              <div style="font-weight: 300;font-size: 0.75em;line-height: 2vh;letter-spacing: 0.1em; padding-bottom: 4px;">
                <?php echo count( $image ); ?>張照片</div>
              <div style="font-weight: 300;font-size: 1em;line-height: 1.5vh;letter-spacing: 0.05em;"><?php the_time('Y/m/d') ?></div>
            </div>
          </a>
        </div>
<?php endwhile; endif; ?>

      </div>
    </div>


</body>
