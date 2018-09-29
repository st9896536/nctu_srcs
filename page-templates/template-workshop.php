<?php
/*
 * Template Name: workshop
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(4)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show');
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-global-lounge'); ?>


<body>

    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">研討會／工作坊</div>
        <!-- <div class="options" style="width:48vw; float:right; ">
            <form>
            <select class="semester" style="background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            　<option value="106_first_sem">2017</option>
            　<option value="105_second_sem">2016</option>
            　<option value="105_first_sem">2015</option>
            </select>
            </form>
        </div> -->
      </div>
      <!-- workshop block -->
      <?php
          $is_multiple=False;
          $args = array(
          'category_name' => 'workshop_straight_srcs',
          'posts_per_page' => 6
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
              while($the_query->have_posts()):
                  $the_query->the_post();
        ?>

      <div class="workshop-block" style="width:72vw; margin-bottom:5.25vh;">
        <div class="photo-lecture">
          <a target="_blank" href="<?php the_permalink(); ?>">
            <?php 

            $image = get_field('workshop_horizontal_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </a>
        </div>
        <div class="lecture-data" style="width:42vw; height:19vh; display:inline-block; vertical-align: top;">
          <div class="lecture-date">
            <?php
            $workshop_year = get_field( "workshop_year" );
            $workshop_date = get_field( "workshop_date" );
            if ( $workshop_year || $workshop_date ){
              echo $workshop_year , "&nbsp", $workshop_date;
            }
            ?>
          </div>
          <div class="lecture-topic">
            <?php echo the_title();?>
          </div>
          <div class="lecture-topic-eng">
            <?php
            $workshop_title_eng = get_field( "workshop_title_eng" );  
             if ( $workshop_title_eng){
              echo $workshop_title_eng;
            }
            ?>
          </div>
          <div class="lecturers">
            <?php
            $lecturers = get_field( "lecturers" ); 
             if ( $lecturers ){
              echo $lecturers;
            }
            ?>
          </div>
          <div class="lecture-classroom">
            <?php
            $workshop_place_chi = get_field( "workshop_place_chi" );  
             if ( $workshop_place_chi ){
              echo $workshop_place_chi;
            }
            ?>
          </div>
        </div>
      </div>

      <?php endwhile; ?>
    <?php endif; ?>
    </div>


</body>
