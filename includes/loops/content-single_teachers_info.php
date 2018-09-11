<?php
/*
The Single Posts Loop  (專任師資詳細內文)
=====================
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show')
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<body>
    <div class="main">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="photo-teacher" style="margin-right: 1.5vw; width: auto; display: inline-block; vertical-align: top;">

        <?php 

        $image = get_field('teacher_photo');

        if( !empty($image) ): ?>

          <img style="width:200px; height:auto;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        <!-- <img style="width:200px; height:auto;" src="<?php bloginfo('template_url'); ?>/images/professor/prof_zuyuanhon_photo1.jpg" /> -->

      </div>
      
      <div class="professor_name_block" style="width: 13.5vw; margin-right: 1.5vw; display: inline-block;  vertical-align: top;">
        <div class="professor_position" style="height: 2.75vh; margin-bottom: 1vh;">
          <?php $teacher_position = get_field( "teacher_position" ); 
            if( $teacher_position ){
              echo $teacher_position;
            }
          ?>
        </div>
        <div class="professor_name" style="margin-bottom: 11vh;">
          <?php the_title(); ?>  <!-- teacher's name is equal to the article title -->
        </div>
        <div class="professor_info_block">
          <HR width="30px" size="1px" >
          <div class="pro_blocks" style="display: inline-block; margin-left: 4.5vw;margin-top: -1vh;">
            <ul style="list-style: none;">
              <li>簡介</li>
              <li>學經歷</li>
              <li>著作</li>
              <li>研究計畫</li>
            </ul>
          </div>
        </div>

      </div>



      <div class="right-side-pro-detail" style="    display: inline-block;    width: 40vw;">
        <div class="teacher_education" style="height: 2vh;margin-bottom: 2vh;">
          <?php $teacher_education = get_field( "teacher_education" ); 
            if( $teacher_education ){
              echo $teacher_education;
            }
          ?>
        </div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="teacher_profile" style="margin-bottom: 2.5vh;">
          <p>
            <?php $teacher_contact = get_field( "teacher_contact" ); 
              if( $teacher_contact ){
                echo $teacher_contact;
              }
            ?>
          </p>
          
        </div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="profession_area" style="    margin-bottom: 1.5vh;">學術專長領域</div>
        <div class="teacher_profile" style="margin-bottom: 2.5vh;">
          <p>
            <?php $teacher_professional_area = get_field( "teacher_professional_area" ); 
              if( $teacher_professional_area ){
                echo $teacher_professional_area;
              }
            ?>
          </p>
          
        </div>
        <HR width="15px" size="1px" style="margin-bottom: 2.5vh;">
        <div class="profession_intro" style="    margin-bottom: 1.5vh;">簡介</div>
        <div class="teacher_detail_content" style="margin-bottom: 2.5vh;">
          <p><?php $teacher_profile = get_field( "teacher_profile" ); 
              if( $teacher_profile ){
                echo $teacher_profile;
              }
            ?></p>
              
          <p><?php $teacher_works_research_plans = get_field( "teacher_works_research_plans" ); 
              if( $teacher_works_research_plans ){
                echo $teacher_works_research_plans;
              }
            ?></p>
        </div>
        
      </div>

      <?php endwhile; ?>
    <?php endif; ?>
    </div>
</body>
