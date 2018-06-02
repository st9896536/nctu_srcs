<?php
/*
 * Template Name: other-award
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(3)").removeClass('a_show');
      $ (".sidebarmenu a:eq(3)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main">
      <div class="title_block" style="width:72vw; height:5vh;">
        <div class="title_r" style="width:25vw; float:left; height:2.75vh;">其他獲獎訊息</div>
      </div>
      <a href="#" class="button_style_blue" style=" position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班</a>
      <div class="award-master-block" style="margin-top:6vh;margin-bottom: 2vh;">
        <?php $mas_awards = get_post_meta( $post->ID, 'mas_awards', true ); 
            foreach( $mas_awards as $masaward){?>
            <div class="award-block" style="width:71.875vw;">
              <div class="name"><?php echo $masaward['mas_name']?></div>
              <div class="award"><?php echo $masaward['mas_award']?></div>
            </div>
            <?php
              
            }?>
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">陳中勳</div>
          <div class="award">獲財團法人鄭福田文教基金會「2014 博碩士學位論文獎助金」
混血兒與無意識:美軍在台灣的冷戰身影</div>
        </div> -->

        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">陳幼唐</div>
          <div class="award">獲財團法人鄭福田文教基金會「2013 博碩士學位論文獎助金」</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">郭政芬</div>
          <div class="award">獲教育部補助「人文領域人才培育國際交流計畫」短期赴海外專題研究計畫2010年
回家，原來是條漫長的路---移工庇護所的生涯偶遇與流離經驗</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">顧玉玲</div>
          <div class="award">獲教育部補助「人文領域人才培育國際交流計畫」2009年
追溯越南女性勞動者遷移來台前的原鄉經歷</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">黃明慧</div>
          <div class="award">獲教育部補助「人文領域人才培育國際交流計畫」2008年
戰後東德街頭視覺藝術之轉變與實踐</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">卓于秀</div>
          <div class="award">獲教育部補助短期赴海外專題研究計畫2006年
文化建制的內與外： 1927-1937年台灣電影文化重探</div>
        </div> -->



      </div>

      <a href="#" class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">博士班</a>
      <div class="award-doctor-block" style="margin-top:8vh; margin-bottom: 2vh;">

          <?php $doc_awards = get_post_meta( $post->ID, 'doc_awards', true ); 
            foreach( $doc_awards as $docaward){?>
            <div class="award-block" style="width:71.875vw;">
              <div class="name"><?php echo $docaward['doc_name']?></div>
              <div class="award"><?php echo $docaward['doc_award']?></div>
            </div>
            <?php
              
            }?>
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">張佩思</div>
          <div class="award">5年度獎勵人文與社會科學領域博士候選人撰寫博士論文</div>
        </div> -->
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">若遙</div>
          <div class="award">103中研院人文社會科學博士候選人培育計畫</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">唐慧宇</div>
          <div class="award">103年度獎勵人文與社會科學領域博士候選人撰寫博士論文</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">洪芳怡</div>
          <div class="award">99年度獎勵人文與社會科學領域博士候選人撰寫博士論文</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">吳哲良</div>
          <div class="award">99年度獎勵人文與社會科學領域博士候選人撰寫博士論文</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">劉亮延</div>
          <div class="award">獲人社院博班獎學金2009</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">陳克倫</div>
          <div class="award">獲人社院博班獎學金2008
獲人社院博班獎學金2008</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">林封良</div>
          <div class="award">獲人社院博班獎學金2007</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">舒奎翰</div>
          <div class="award">獲人社院博班獎學金2006</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">吳哲良</div>
          <div class="award">獲人社院博班獎學金2005</div>
        </div> -->


      </div>



    </div>
</body>
