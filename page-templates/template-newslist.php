<?php
/*
* Template Name: newslist
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main" style="width:71.5vw;">
      <div style="margin-left:3.5vw;">
        <div class="newslist-title">最新消息</div>
        <div><HR size="1px" color="#4F4F4F" style="margin-top:2vh; margin-bottom:3vh;"></div>
        <div style="margin-top: 3vh;">
            <?php
            $is_multiple=False;
            $args = array(
            'category_name' => 'news_srcs',
            'posts_per_page' => 10
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):
                while($the_query->have_posts()):
                    $the_query->the_post();
                    if($is_multiple):
            ?>
            <?php endif; ?>
            <div class="news_block_content">  <!--每篇文章自己的block-->
              <span class="date">
                  <font style="font-size: 0.7em;line-height: 1.5vh;"><?php the_time('Y'); ?></font>
                  <font style="font-size: 1em;line-height: 2.5vh;"><?php the_time('m/d'); ?></font>
              </span>
              <!--
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" height="40vh">
                    <tr>
                      <td height="40vh" width="0.625vw">　</td>
                      <td width="1" bgcolor="#000000" height="40vh"></td>
                      <td height="40vh" width="0.1vw">　</td>
                    </tr>
                </table>
              -->

                <a href="<?php the_permalink(); ?>"><p id="content_text"><?php the_title(); ?></p></a>
              </div>
              <?php
              $is_multiple=True;
                endwhile;
              else:?>
                  <div class="hp-news_item_title">還沒發佈新文章喔！</div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
          </div>
          <div class="btn-block" style="margin-top:2.5vh; margin-left:51.5vw; margin-bottom: 5vh;">
            <div class="btn-block-content" style="height: 2.5vh;">
              <a href="#"><div class="btn_left"></div></a>
              <span class="page-style" style="margin:0 0.5vw;">
                <span class="page-now">1</span>
                <span class="page-all" style="">35</span>
              </span>
              <a href="#"><div class="btn_right"></div></a>
                <input type="text" id="jump_to" name="jump_to" max="</?php echo $the_query->max_num_pages ?>">
              <a href="#" class="btn-go"></a>
            </div>
          </div>


      </div>

    </div>
  </div>
</div>
