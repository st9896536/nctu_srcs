<?php
/*
 * Template Name: graduate
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(6)").removeClass('a_show')
      $ (".sidebarmenu a:eq(6)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

</head>

<body>


<div class="container">
  <div class="row">

    <div class="main">
      <div class="photo-graduate">
        <?php 

        $image = get_field('graduate_photo');

        if( !empty($image) ): ?>

          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
      <div class="graduate-data" style="width:50vw; height:31.25vh; display:inline-block; vertical-align: top;">
        <div class="list_div" style="float: right; margin-top:5vh; margin-bottom: 3vh; display: inline-block;">
          <a href="#" class="back-to-list">回列表</a>
        </div>

        <div class="border" style="width: 52.5vw;  padding-right: 1vw;  border-right-color: rgba(60, 0, 110, 0.8);  border-right-style: solid;  border-right-width: 0.5vw;">
          <div class="graduate-name" style="height:4vh; margin-top:2vh;">

            <span style="padding-right: 1.7vw; vertical-align: top;display: inline-block;float: left;border-right-style: solid; border-width: 2px;">
              <p id="g1">
                <?php $graduate_name_chi = get_field( "graduate_name_chi" );
                  if( $graduate_name_chi ){
                    echo $graduate_name_chi;
                  }
                ?>
              </p>
            </span>

            <span style="padding-left: 1.7vw;vertical-align: top;display: inline-block; ">
              <p id="g1">
                <p id="g1">
                <?php $graduate_name_eng = get_field( "graduate_name_eng" );
                  if( $graduate_name_eng ){
                    echo $graduate_name_eng;
                  }
                ?>
              </p>
              </p>
            </span>
          </div>
          <!--畢業生職業-->
          <div class="graduate-name" style="height:2.5vh; margin-top:1vh; margin-bottom:2.5vh;">
            <span style="padding-right: 1.2vw; vertical-align: top;display: inline-block;float: left;border-right-style: solid; border-width: 2px;">
              <p id="g2">
                <?php $graduate_career_chi = get_field( "graduate_career_chi" );
                  if( $graduate_career_chi ){
                    echo $graduate_career_chi;
                  }
                ?>
              </p>
            </span>

            <span style="padding-left: 1.2vw;vertical-align: top;display: inline-block; ">
              <p id="g2">
                <?php $graduate_career_eng = get_field( "graduate_career_eng" );
                  if( $graduate_career_eng ){
                    echo $graduate_career_eng;
                  }
                ?>
              </p>
            </span>
          </div>

          <div class="description" style="font-weight: 500;font-size: 1.5em;line-height: 3vh;  letter-spacing: 0.1em;  color: rgba(50, 50, 50, 1); margin-bottom:5vh;">
            <p>
              <?php $motto = get_field( "motto" );
                if( $motto ){
                  echo $motto;
                }
              ?>
            </p>
          </div>
      </div>
        <div class="education" style="height:5vh; margin-bottom:2.25vh;">
          <p style="margin-bottom:0.75vh;">
            <?php $graduate_department = get_field( "graduate_department" );
              if( $graduate_department ){
                echo $graduate_department;
              }
            ?>
          </p>
        </div>

        <div class="education" style="height:4vh; margin-bottom:3vh;">
          <p id="graduate_email" style="margin-bottom:0.75vh;">
            <?php $graduate_info = get_field( "graduate_info" );
              if( $graduate_info ){
                echo $graduate_info;
              }
            ?>
          </p>
        </div>

        <div class="experience" style="width:47.75vw; height:auto; ">

            <p>
              <?php $graduate_experience = get_field( "graduate_experience" );
              if( $graduate_experience ){
                echo $graduate_experience;
              }
            ?>
            </p>
            

        </div>
      </div>


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
