<?php
/*
 * Template Name: research-proposal
 */
?>

<?php $thisPage="graduate"; ?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script>
  /*
    $('.sidebarmenu a').click(function(){
      $('.sidebarmenu a').removeClass('.active');
      $(this).addClass('.active');
    });
    */
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>


<body>


<div class="container">
  <div class="row">

    <div class="main">
      <div class="title_block">
        <div class="title_r">研究計畫</div>
        <div class="button" style="display:inline-block;">
          <a href="#" class="botton_style_plan1">行政院國科會輔助專題研究計畫</a>
        </div>
        <div class="button" style="display:inline-block;">
          <a href="#" class="botton_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">其他學術單位委託研究計畫</a>
        </div>
        <div class="button" style="display:inline-block;">
          <a href="#" class="botton_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">整合型研究或計畫</a>
        </div>
      </div>
      <!--研究計畫內文-->
      <div class="plan_block">
        <div id="planname_style" style="width:48vw;">專題研究計畫名稱</div>
        <div id="planname_style" style="width:14.5vw;">計畫期間</div>
        <div id="planname_style" style="width:9.7vw;">主持人/共同主持人</div>
      </div>

      <div class="plan_detail">
        <div class="plan_content"> <!--單一個計劃的block-->
          <div id="planname_style" style="width:48vw; margin-bottom: 2vh;">一分為二：中國現代政治思想的拓撲學研究</div>
          <div id="planname_style" style="width:14.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">劉紀蕙</div>
        </div>
        <div class="plan_content"> <!--單一個計劃的block-->
          <div id="planname_style" style="width:48vw; margin-bottom: 2vh;">江戶與明治日本的臺灣歷史書寫</div>
          <div id="planname_style" style="width:14.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">藍弘岳</div>
        </div>
        <div class="plan_content"> <!--單一個計劃的block-->
          <div id="planname_style" style="width:48vw; margin-bottom: 2vh;">戰後台灣文化菁英的社會學描述I：文學場域(1/2)</div>
          <div id="planname_style" style="width:14.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">邱德亮</div>
        </div>
        <div class="plan_content"> <!--單一個計劃的block-->
          <div id="planname_style" style="width:48vw; margin-bottom: 2vh;">穿行於革命、戰爭與城鄉之間：師陀與現代中國的歷史轉折(1/2)</div>
          <div id="planname_style" style="width:14.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">彭明偉</div>
        </div>
        <div class="plan_content"> <!--單一個計劃的block-->
          <div id="planname_style" style="width:48vw; margin-bottom: 2vh;">自由或合作？1950年代台灣的《自由中國》與《新社會》</div>
          <div id="planname_style" style="width:14.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">林淑芬</div>
        </div>

      </div>


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</body>
