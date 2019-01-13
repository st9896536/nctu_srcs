<?php
/*
 * Template Name: research-proposal
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show');
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active');

      function clean(){
        $(".planDiv_1").css("display","none");
        $(".planDiv_2").css("display","none");
        $(".planDiv_3").css("display","none");
        $("#btn_main").removeClass("button_style_plan1");
        $("#btn_main").addClass("button_style_noClick");
        $("#btn_other").removeClass("button_style_plan1");
        $("#btn_other").addClass("button_style_noClick");
        $("#btn_overall").removeClass("button_style_plan1");
        $("#btn_overall").addClass("button_style_noClick");
      }

      $("#btn_main").click(function(){
        clean();
        $("#btn_main").removeClass("button_style_noClick");
        $("#btn_main").addClass("button_style_plan1");
        $(".planDiv_1").css("display","inline-block");
      });
      $("#btn_other").click(function(){
        clean();
        $("#btn_other").removeClass("button_style_noClick");
        $("#btn_other").addClass("button_style_plan1");
        $(".planDiv_2").css("display","inline-block");
      });
      $("#btn_overall").click(function(){
        clean();
        $("#btn_overall").removeClass("button_style_noClick");
        $("#btn_overall").addClass("button_style_plan1");
        $(".planDiv_3").css("display","inline-block");
      });


});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>


<body>


<div class="container">
  <div class="row">

    <div class="main">
      <div class="title_block" style="width:73vw; height:5vh;">
        <div class="title_r" style="width:10vw; float:left;">研究計畫</div>
        <div class="buttons" style="width:60vw; float:right;">

            <div id="btn_overall" class="button_style_noClick">整合型研究或計畫</div>
            <div id="btn_other" class="button_style_noClick">其他學術單位委託研究計畫</div>
            <div id="btn_main" class="button_style_plan1">行政院國科會輔助專題研究計畫</div>



        </div>

      </div>
      <!--研究計畫內文-->

      <div class="planDiv_1" style="display: inline-block;">
        <div class="plan_block">
          <div id="planname_style" style="width:47vw;">專題研究計畫名稱</div>
          <div id="planname_style" style="width:13.5vw;">計畫期間</div>
          <div id="planname_style" style="width:9.7vw; text-align: -webkit-center;">主持人/共同主持人</div>
        </div>

        <div class="plan_detail">
          <?php $research_proposal = get_post_meta( $post->ID, 'research_proposal', true );
              $count = 0;
              foreach( $research_proposal as $research_pro){
                $count++;?>
                <div class="plan_content">
                  <div id="planname_style" style="width:47vw; margin-bottom: 2vh;"><?php echo $research_pro['research_proposal_name']?></div>
                  <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;"><?php echo $research_pro['research_proposal_period']?></div>
                  <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh; text-align: -webkit-center;"><?php echo $research_pro['research_proposal_host']?></div>
                </div>
                <?php
                  // echo $count;
                  if ($count%5 == 0){?>
                    <HR style="width: 72.5vw; margin-left: -11.5px; margin-bottom: 2vh;">
                  <?php }
              }?>
        </div>
      </div>
      

      <div class="planDiv_2" style="display: none; position: fixed;">
        <div class="plan_block">
          <div id="planname_style" style="width:47vw;">專題研究計畫名稱</div>
          <div id="planname_style" style="width:13.5vw;">計畫期間</div>
          <div id="planname_style" style="width:9.7vw;">主持人/共同主持人</div>
        </div>

        <div class="plan_detail">
          <?php $research_proposal_other = get_post_meta( $post->ID, 'research_proposal_other', true );
              foreach( $research_proposal_other as $research_other){?>
                <div class="plan_content">
                  <div id="planname_style" style="width:47vw; margin-bottom: 2vh;"><?php echo $research_other['research_proposal_name_other']?></div>
                  <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;"><?php echo $research_other['research_proposal_period_other']?></div>
                  <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;"><?php echo $research_other['research_proposal_host_other']?></div>
                </div>
                <?php

              }?>
        </div>
      </div>
      
      <div class="planDiv_3" style="display: none; position: fixed;">
        <div class="plan_block">
          <div id="planname_style" style="width:47vw;">專題研究計畫名稱</div>
          <div id="planname_style" style="width:13.5vw;">計畫期間</div>
          <div id="planname_style" style="width:9.7vw;">主持人/共同主持人</div>
        </div>

        <div class="plan_detail">
          <?php $research_proposal_overall = get_post_meta( $post->ID, 'research_proposal_overall', true );
              foreach( $research_proposal_overall as $research_overall){?>
                <div class="plan_content">
                  <div id="planname_style" style="width:47vw; margin-bottom: 2vh;"><?php echo $research_overall['research_proposal_name_overall']?></div>
                  <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;"><?php echo $research_overall['research_proposal_period_overall']?></div>
                  <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;"><?php echo $research_overall['research_proposal_host_overall']?></div>
                </div>
            <?php
            }
          ?>
        </div>
      </div>
    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
