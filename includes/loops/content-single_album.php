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
        <?php
        //Get the images ids from the post_metadata
        $post_id = $post->ID; // current post ID
        $cat = get_the_category();
        $current_cat_id = $cat[0]->cat_ID; // current category ID
        $args = array(
            'category' => $current_cat_id,
            'orderby'  => 'post_date',
            'order'    => 'DESC'
        );
        $images = acf_photo_gallery('album_detail_gallery', $post->ID);
        ?>
        <div class="album-text">

          <a href="javascript:history.back()" class="btn btn-content" style="width:4vw; height:4vw;margin-right:1vw; margin-top:15vh;">
            <span>回列表</span>
          </a>
          <div id="a1" style="padding-left: 1.25vw;margin-top:6.25vh; height:11.5vh;"><?php the_title(); ?></div>
          <div id="a2" style="padding-left: 1.25vw;"><?php echo count($images) ; ?>張照片</div>
          <div id="a3" style="padding-left: 1.25vw;">2016.11.28-29</div>
        </div>
<?php
//Check if return array has anything in it
if( count($images) ):
  //Cool, we got some data so now let's loop over it
      $i = 0;
        foreach($images as $image):
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $medium_image_url = acf_photo_gallery_resize_image($full_image_url, 300, 200); //Resized size to 300px width by 200px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
            <div class="album-area">
              <a href="<?php echo $full_image_url; ?>" data-lightbox="album_detail_gallery" data-title="<?php echo $caption; ?>">
                  <img src="<?php echo $medium_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
              </a>
            </div>
<?php  ++$i;  endforeach; endif; ?>
        <!--  -->
        <!-- <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>

        <div class="album-area"><img src="</?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0004.jpg" /></div>

        <div class="album-area"><img src="</?php bloginfo('template_url'); ?>/images/0003.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0001.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>

        <div class="album-area"><img src="</?php bloginfo('template_url'); ?>/images/0004.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0002.jpg" /></div>
        <div class='album-area'><img src="</?php bloginfo('template_url'); ?>/images/0003.jpg" /></div> -->
      </div>

    </div>


</body>
