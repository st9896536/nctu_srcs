<?php
/*
 * Template Name: research-proposal
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show');
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active');
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

            <a href="#" class="button_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">整合型研究或計畫</a>
            <a href="#" class="button_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">其他學術單位委託研究計畫</a>
            <a href="#" class="button_style_plan1">行政院國科會輔助專題研究計畫</a>



        </div>

      </div>
      <!--研究計畫內文-->
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
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">一分為二：中國現代政治思想的拓撲學研究</div>
          <div id="planname_style" style="width:13.5vw; margin-bottom: 2vh;">106/08/01-108/07/31</div>
          <div id="planname_style" style="width:9.7vw; margin-bottom: 2vh;">劉紀蕙</div>
        </div> -->


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
          <div id="planname_style" style="width:47vw; margin-bottom: 2vh;">「漢學」與近代日本政治思想的展開和越境──<br>「同文」想像與亞洲主義、國族主義的興起</div>
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
