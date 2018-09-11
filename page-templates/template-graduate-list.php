<?php
/*
 * Template Name: graduate-list
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(6)").removeClass('a_show');
      $ (".sidebarmenu a:eq(6)").addClass('sidebarmenu_active');


      $('#btn_year').click(function(){
        
        if($('#1').css('display')!='none'){
          $('#2').html($('#static').html()).show();
          $('#1').hide();
          $ ("#btn_area").removeClass('button_style_black');
          $ ("#btn_area").addClass('button_style_white');
          $ ("#btn_year").removeClass('button_style_white');
          $ ("#btn_year").addClass('button_style_black'); 
        }
    });

      $('#btn_area').click(function(){
        
        if($('#2').css('display')!='none'){
          $('#1').show();
          $('#2').hide();
          $ ("#btn_year").removeClass('button_style_black');
          $ ("#btn_year").addClass('button_style_white');
          $ ("#btn_area").removeClass('button_style_white');
          $ ("#btn_area").addClass('button_style_black'); 
        }
    });


});


    
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main">
      <div class="m" style="width:33vw; display: inline-block;">
        <div class="main_short"><font>畢業生</font></div>
        <div class="button" style="margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
          <div id="btn_area" class="button_style_black" style="    cursor: pointer;">依領域</div>
        </div>
        <div class="button" style="margin-top:3vh;  margin-bottom: 3vh; display: inline-block;">
          <div id="btn_year" class="button_style_white" style="    cursor: pointer;">依學年</div>
        </div>
      </div>

        <div id="1">
          <div class="block_content" style="/*width:72.875vw;*/ width:auto; height: 50vh;">

            <?php 
              $graduate = get_post_meta( $post->ID, 'graduate_list', true );
              if( !empty( $graduate ) ){
                  foreach( $graduate as $grad ){?>
                  <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw;    vertical-align: top;">
                      <div class="category" ><?php echo $grad['graduate_subject_area']?></div>
                      <HR size="1px" color="#4F4F4F">
                      <div class="names">
                          <p><?php echo $grad['graduate_name']?></p>
                      </div>
                      
                  </div>
                  <?php
                  }
              }
              ?>

          </div>
        </div>

        <div id="2" >
          
        </div>

        <div id="static" style="display:none;">
            <!-- depend on school year -->
            <div class="block_content" style="width:auto; height: 50vh;">
              <?php 
              $gra_year = get_post_meta( $post->ID, 'graduate_list_year', true );
              if( !empty( $gra_year ) ){
                  foreach( $gra_year as $gra ){?>
                  <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw; vertical-align: top;">
                      <div class="category" ><?php echo $gra['graduate_year']?></div>
                      <HR size="1px" color="#4F4F4F">
                      <div class="names">
                          <p><?php echo $gra['graduate_phd_or_master_name']?></p>
                      </div>
                      
                  </div>
                  <?php
                  }
              }
              ?>

              
            </div>
        </div>
          

    </div>



  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
