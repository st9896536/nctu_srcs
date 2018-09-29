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
          <div id="planname_style" style="width:9.7vw;">主持人/共同主持人</div>
        </div>

        <div class="plan_detail">
          <?php $research_proposal = get_post_meta( $post->ID, 'research_proposal', true );
              foreach( $research_proposal as $research_pro){?>
                <div class="plan_content">
                  <div id="planname_style" style="width:47vw; margin-bottom: 2vh;"><?php echo $research_pro['research_proposal_name']?></div>
                  <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;"><?php echo $research_pro['research_proposal_period']?></div>
                  <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;"><?php echo $research_pro['research_proposal_host']?></div>
                </div>
                <?php

              }?>
          <!-- <div class="plan_content">
            <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">江戶與明治日本的臺灣歷史書寫</div>
            <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
            <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">藍弘岳</div>
          </div>
          <div class="plan_content">
            <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">戰後台灣文化菁英的社會學描述I：文學場域(1/2)</div>
            <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
            <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">邱德亮</div>
          </div>
          <div class="plan_content">
            <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">穿行於革命、戰爭與城鄉之間：師陀與現代中國的歷史轉折(1/2)</div>
            <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
            <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">彭明偉</div>
          </div>
          <div class="plan_content">
            <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">自由或合作？1950年代台灣的《自由中國》與《新社會》</div>
            <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
            <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">林淑芬</div>
          </div> -->

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
      <!-- <div class="plan_detail">
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">台灣左翼思想口述計畫（1970年代至1980年代）</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-106/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">陳光興</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">共產主義理念重估：唯物辯證法與歷史發生學</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-106/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">劉紀蕙</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">穿行於革命、戰爭與城鄉之間：師陀與現代中國的歷史轉折(1/2)</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">104/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">彭明偉</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">「三代」想像與德川後期儒學政治思想⸺從徂徠後學到後期水戶學⸺</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">藍弘岳</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">布爾迪厄《區判：品味判斷的社會批判》譯注計畫<br>(Pierre Bourdieu, 1979, La distinction: la critique social du judgment, Les Editions de Minuit)</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">102/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">邱德亮</div>
        </div>

      </div> -->


      <!-- <div class="plan_detail">
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">「有問題的社會性：我們時代的自閉症鏡像」專書寫作計畫</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-106/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">陳光興</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">荻生徂徠的「文學」與思想：「漢文脈」與「武國」知識的展開</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-106/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">劉紀蕙</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">「漢學」與近代日本政治思想的展開和越境──「同文」想像與亞洲主義、國族主義的興起</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">104/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">彭明偉</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">陳映真與台灣戰後左翼思想狀況：分斷、後殖民與死亡</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">103/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">藍弘岳</div>
        </div>
        <div class="plan_content">
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">無與主權：疆界政治</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">102/08/01-105/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">邱德亮</div>
        </div>

      </div> -->


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
