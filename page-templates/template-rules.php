<?php
/*
 * Template Name: rules
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main" style="width:71.825vw;">
      <div class="title_block" style="height: 20vh;margin-bottom: 3vh;">
        <div class="title_r" style="width: 10vw; float:left; height:2.75vh;">修業辦法</div>
        <?php
        $file = get_field('curriculum_planning_list');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="margin-left: -10vw;border: 1px solid #000;margin-right: 3vw;"><span>課程規劃
            總表</span></a>
        <?php endif; ?>
        <?php
        $file = get_field('foreign_language_aptitude_determination');
        if( $file ): ?>
          <a href="<?php echo $file['url']; ?>" download class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;"><span>外語能力 認定辦法</span></a>
        <?php endif; ?>
      </div>
      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-master">
        <div class="button_style_blue" style="position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">
          <?php $master_required_credits = get_field( "master_required_credits" );
              if( $master_required_credits ){
                echo $master_required_credits;
            }
          ?>
        </div>
        <div class="rules-master-test" style=" width: 71.875vw;height: 19vh;margin-top: 2vh;">
          <div class="compulsory" style="float-left;width: 19.75vw;">必修：
            <p>
            <?php $master_compulsory = get_field( "master_compulsory" );
              if( $master_compulsory ){
                echo $master_compulsory;?>
            </p>
            <?php } ?>
          </div>
          <div class="required" style="width: 17.75vw;">必選：
            <p>
            <?php $master_required = get_field( "master_required" );
              if( $master_required ){
                echo $master_required;?>
            </p>
            <?php } ?>
          </div>
          <div class="elective" style="width: 9.75vw;">選修：
            <p>
            <?php $master_elective = get_field( "master_elective" );
              if( $master_elective ){
                echo $master_elective;?>
            </p>
            <?php } ?>
          </div>
          <div class="remarks" style="width: 15.75vw;">備註：
            <p>
            <?php $master_remark = get_field( "master_remark" );
              if( $master_remark ){
                echo $master_remark;?>
            </p>
            <?php } ?>
          </div>
        </div>
        <div class="rule-master-list" style="width: 71.875vw;">
          <?php 
            $master_regulations = get_post_meta( $post->ID, 'master_regulations', true );
            foreach( $master_regulations as $mas_regulations ){ ?>
              <div class="list-block">
                <ul>
                  <?php
                    $url = wp_get_attachment_url( $mas_regulations['master_regulations_files']);?>
                    <a href="<?php echo $url ?>" download><li><?php echo $mas_regulations['master_regulations_filename']?></li></a>
                </ul>
              </div>
          <?php } ?>
          
        </div>
      </div>

      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-doctor">
        <div class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">
          <?php $doctor_required_credits = get_field( "doctor_required_credits" );
              if( $doctor_required_credits ){
                echo $doctor_required_credits;
            }
          ?>
        </div>
        <div class="rules-doctor-test" style=" width: 71.875vw;height: 19vh;margin-top: 2vh;">
          <div class="compulsory" style="float-left;width: 19.75vw;">必修：
            <p>
            <?php $doctor_compulsory = get_field( "doctor_compulsory" );
              if( $doctor_compulsory ){
                echo $doctor_compulsory;?>
            </p>
            <?php } ?>
          </div>
          <div class="required" style="width: 17.75vw;">必選：
            <p>
            <?php $doctor_required = get_field( "doctor_required" );
              if( $doctor_required ){
                echo $doctor_required;?>
            </p>
            <?php } ?>
          </div>
          <div class="elective" style="width: 9.75vw;">選修：
            <p>
            <?php $doctor_elective = get_field( "doctor_elective" );
              if( $doctor_elective ){
                echo $doctor_elective;?>
            </p>
            <?php } ?>
          </div>
          <div class="remarks" style="width: 15.75vw;">備註：
            <p>
            <?php $doctor_remark = get_field( "doctor_remark" );
              if( $doctor_remark ){
                echo $doctor_remark;?>
            </p>
            <?php } ?>
          </div>
        </div>
        <div class="rule-doctor-list" style="width: 71.875vw;">
          <?php 
            $doctor_regulations = get_post_meta( $post->ID, 'doctor_regulations', true );
            foreach( $doctor_regulations as $doc_regulations ){ ?>
              <div class="list-block">
                <ul>
                  <?php
                    $url = wp_get_attachment_url( $doc_regulations['doctor_regulations_files']);?>
                    <a href="<?php echo $url ?>" download><li><?php echo $doc_regulations['doctor_regulations_filename']?></li></a>
                </ul>
              </div>
          <?php } ?>
        </div>
      </div>









    </div>
</body>
