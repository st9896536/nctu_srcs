<?php
/*
 * Template Name: guest-professor
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(3)").removeClass('a_show')
      $ (".sidebarmenu a:eq(3)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main" >
      <div class="main_long"><font>客座教授</font></div>


      <div class="name_block" style="width: 71.875vw; margin-top: 4vh; margin-bottom: 1.25vh;">

        <?php $guest_professor = get_post_meta( $post->ID, 'guest_professor', true );
            foreach( $guest_professor as $guest_pro){?>
              <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
                <span style="width:10.5vw; margin-right:0.5vw; letter-spacing: 0.3px;"><?php echo $guest_pro['guest_professor_name']?></span>
                <span style="width:13.125vw; margin-right:0.5vw;"><?php echo $guest_pro['guest_professor_type']?></span>
                <span style="width:24.5vw; margin-right:0.5vw;"><?php echo $guest_pro['guest_professor_education']?></span>
                <span style="width:31.875vw;"><?php echo $guest_pro['guest_professor_expertise']?></span>
              </div>
              <?php

            }?>
      </div>
      </div>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->
