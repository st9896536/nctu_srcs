<?php
/*
* Template Name: newslist
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show')
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active')
});

  </script>
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
            $i=0;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
            'category_name' => 'news_srcs',
            'posts_per_page' => 10,
            'paged' => $paged
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
                  <font style="font-size: 0.7em;line-height: 1.5vh; color: rgba(50,50,50,1);"><?php the_time('Y'); ?></font>
                  <font style="font-size: 1em;line-height: 2.5vh; color: rgba(50,50,50,1);"><?php the_time('m/d'); ?></font>
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
              <?php endif; ?>
          </div>
          <div class="btn-block" style="margin-top:2.5vh; margin-left:51.5vw; margin-bottom: 5vh; height: 4.5vh; width: 20vw;">
            <div class="btn-block-content" style="height: 2.5vh;">
              <?php if( $paged == 1 ) :?>
              <a href="<?php echo site_url()."/newslist/page/1"; ?>"><div class="btn_left"></div></a>
                  <?php else: ?>
              <a href="<?php echo site_url()."/newslist/page/".($paged-1); ?>"><div class="btn_left"></div></a>
                  <?php endif; ?>
              <!-- <a href="#"><div class="btn_left"></div></a> -->
              <span class="page-style" style="margin:0 0.5vw;">
                <span class="page-now"><?php echo $paged; ?></span>
                <span class="page-all" style=""><?php echo $the_query->max_num_pages ?></span>
              </span>

              <?php if( $paged == $the_query->max_num_pages ) :?>
              <a href="<?php echo site_url()."/newslist/page/".($the_query->max_num_pages); ?>"><div class="btn_right"></div></a>
                  <?php else: ?>
              <a href="<?php echo site_url()."/newslist/page/".($paged+1); ?>"><div class="btn_right"></div></a>
                  <?php endif; ?>
              <form name="form" action="" method="post" style=" display: inline;">
                <input type="text" id="jump_to" name="page_no">
                <a href="#" class="btn-go"></a>
              </form>
              
            </div>
          </div>

          <!-- <div class="newslist_nav">
              <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-first_page"></div></a>
                  <?php if( $paged == 1 ) :?>
              <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-prev_page"></div></a>
                  <?php else: ?>
              <a href="<?php echo site_url()."/${cat_name}/page/".($paged-1); ?>"><div class="nl-prev_page"></div></a>
                  <?php endif; ?>
              <div class="nl-page_num"><?php echo $paged; ?></div>
              <hr class="nl-vertical_line">
              <div class="nl-page_max_num"><?php echo $the_query->max_num_pages ?></div>
                  <?php if( $paged == $the_query->max_num_pages ) :?>
              <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-next_page"></div></a>
                  <?php else: ?>
              <a href="<?php echo site_url()."/${cat_name}/page/".($paged+1); ?>"><div class="nl-next_page"></div></a>
                  <?php endif; ?>
              <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-last_page"></div></a>
                  <input type="text" id="jump_to" name="jump_to" max="<?php echo $the_query->max_num_pages ?>">
              <a href="#" class="nl-go"></a>
          </div> -->
          <?php wp_reset_postdata(); ?>



      </div>

    </div>
  </div>
</div>
