<?php
/*
 * Template Name: research-direction
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

    
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>

<body>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->


<div class="container" style="margin-left: 24vw;">

      <div id="content_block" style="margin-top: -68vh;/*margin-left: 25vw; width:76vw;padding: 3vh 5vw;*/">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;  margin-right: 3vw;  display: inline-block; ">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <?php
                  $image = get_field('reserch_direction_image_1');
                  if( !empty($image) ): ?>
                    <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div style="margin-top: 3.5vh; width: 23vh; padding: 1vh; text-align: -webkit-center;">
                  <p>
                    <?php $research_title1 = get_field( "research_title1" );
                      if( $research_title1 ){
                        echo $research_title1;
                      }
                    ?>
                  </p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >
                  <?php $research_content_1 = get_field( "research_content_1" );
                    if( $research_content_1 ){
                      echo $research_content_1;
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh; margin-right: 3vw; vertical-align: top;display: inline-block;">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <?php
                  $image = get_field('reserch_direction_image_2');
                  if( !empty($image) ): ?>
                    <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div style="margin-top: 3.5vh; width: 23vh; padding: 1vh; text-align: -webkit-center;">
                  <p>
                    <?php $research_title2 = get_field( "research_title2" );
                      if( $research_title2 ){
                        echo $research_title2;
                      }
                    ?>
                  </p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >
                  <?php $research_content_2 = get_field( "research_content_2" );
                    if( $research_content_2 ){
                      echo $research_content_2;
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div  class="direction" style="/*width: 25vh;margin-bottom: 5vh; margin-right: 3vw; vertical-align: top;display: inline-block;">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <?php
                  $image = get_field('reserch_direction_image_3');
                  if( !empty($image) ): ?>
                    <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div style="margin-top: 3.5vh; width: 23vh; padding: 1vh; text-align: -webkit-center;">
                  <p>
                    <?php $research_title3 = get_field( "research_title3" );
                      if( $research_title3 ){
                        echo $research_title3;
                      }
                    ?>
                  </p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content">
                  <?php $research_content_3 = get_field( "research_content_3" );
                    if( $research_content_3 ){
                      echo $research_content_3;
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" >
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;vertical-align: top;display: inline-block;">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <?php
                  $image = get_field('reserch_direction_image_4');
                  if( !empty($image) ): ?>
                    <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div style="margin-top: 3.5vh; width: 23vh; padding: 1vh; text-align: -webkit-center;">
                  <p>
                    <?php $research_title4 = get_field( "research_title4" );
                      if( $research_title4 ){
                        echo $research_title4;
                      }
                    ?>
                  </p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content">
                  <?php $research_content_4 = get_field( "research_content_4" );
                    if( $research_content_4 ){
                      echo $research_content_4;
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
      </div>

</div><!-- /.container -->
</body>
