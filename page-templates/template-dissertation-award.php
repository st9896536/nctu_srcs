<?php
/*
 * Template Name: dissertation-award
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show');
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main">
      <div class="title_block" style="width:72vw; height:5vh;">
        <div class="title_r" style="width:25vw; float:left; height:2.75vh;">碩、博班論文得獎</div>
      </div>
      <a href="#" class="button_style_blue" style=" position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班</a>
      <div class="award-master-block" style="margin-top:6vh;margin-bottom: 2vh;">

          <?php $master_award = get_post_meta( $post->ID, 'master_award', true );
            foreach( $master_award as $masteraward){?>
            <div class="award-block" style="width:71.875vw;">
              <div class="name"><?php echo $masteraward['master_winner']?></div>
              <div class="award"><?php echo $masteraward['master_awards']?></div>
            </div>
            <?php

            }?>
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">廖千瑩</div>
          <div class="award">榮獲佑生基金會2007年獎助碩士論文
  論文題目：拯救社區死亡大作戰─未來村對社造重生論述的共同體(community)回應
  指導教授：朱元鴻教授</div>
        </div> -->
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">廖宏霖</div>
          <div class="award">榮獲交通大學第二屆文學獎新詩類佳作，2007.06
<難以敘述的地方>
袁晉璇 榮獲第十七屆中央研究院民族所碩士班研究生論文獎助 </div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">袁晉璇</div>
          <div class="award">榮獲第十七屆中央研究院民族所碩士班研究生論文獎助
論文題目：一個語言與倫理的問題：從傳染病事件之描述來探究台灣社會中外邦人與流行病之間的關係及其再( 1946-1947年為例 )
指導教授：劉紀蕙教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">卓于秀</div>
          <div class="award">榮獲佑生基金會2006年獎助碩士論文
論文題目：日治時期台灣電影論述的文化翻譯問題:1927-1937
指導教授：劉紀蕙教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">顧玉玲</div>
          <div class="award">榮獲台北市政府第九屆文學獎「文學年金」
2008年10月出版「我們」
指導教授：林淑芬副教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">鄭欣宜</div>
          <div class="award">榮獲2009年度（第2屆）文化研究學會優秀碩士論文獎
論文題目：「無價生命的代價：寵物的消費與政治」
指導教授：邱德亮副教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">林芳如</div>
          <div class="award">榮獲2010年度（第3屆）文化研究學會優秀碩士論文獎
論文題目：「緬甸」與「僑生」：跨國主體的形成與認同困境
指導教授：陳奕麟教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">簡于鈞</div>
          <div class="award">榮獲「2012 台灣族群關係研究論文獎助計畫」碩士論文獎助優等獎
指導教授：邱德亮副教授</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">黃芝雲</div>
          <div class="award">2012＜是誰把部落切成兩半？＞獲林榮三文學奬新詩首獎
獲國家文化藝術基金會補助創作《是誰把部落切成兩半？》詩集
<HR size="1px" style="width:5px; margin-top: 2.5vh;">
2013 ＜博物館夜祭＞、＜女神變形＞獲得葉紅女性詩獎佳作
<HR size="1px" style="width:5px; margin-top: 2.5vh;">
2014 詩集《是誰把部落切成兩半？》獲楊牧文學奬
詩集《是誰把部落切成兩半？》二魚文化出版
獲國家文化藝術基金會補助創作《路在哪裡？》散文/報導文學集
新詩＜搖椅上的人類學家＞收錄於2014年度詩選，二魚出版
獲得中華民國傑出青年詩人獎
<HR size="1px" style=" width:5px; margin-top: 2.5vh;">
2015 散文＜死亡是一朵苦楝花開＞獲時報文學奬散文評審獎
＜死亡是一朵苦楝花開＞收錄於 2015 年度散文選，九歌出版
詩集《是誰把部落切成兩半？》入圍臺灣文學金典獎
<HR size="1px" style=" width:5px; margin-top: 2.5vh;">
2016年獲第三屆台灣研究博碩士論文獎獲獎
論文題目：資本主義範式之下的花蓮城市空間再生產－以193線拓寬案為例
畢業系所：國立交通大學社會與文化研究所
指導教授：劉紀蕙
</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">陳中勳</div>
          <div class="award">台灣社會研究學會「批判與實踐碩博士論文獎」佳作獎
論文題目「亞美混血兒，亞細亞的孤兒：追尋美軍在台灣的冷戰身影」
指導教授：劉紀蕙教授</div>
        </div> -->


      </div>

      <a href="#" class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">博士班</a>
      <div class="award-doctor-block" style="margin-top:8vh; margin-bottom: 2vh;">

        <?php $doctor_award = get_post_meta( $post->ID, 'doctors_award', true );
            foreach( $doctor_award as $doctoraward){?>
            <div class="award-block" style="width:71.875vw;">
              <div class="name"><?php echo $doctoraward['doctor_winner']?></div>
              <div class="award"><?php echo $doctoraward['doctor_awards']?></div>
            </div>
            <?php

            }?>
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">林封良</div>
          <div class="award">榮獲上海中國現代文學研究演討會學生論文獎2007</div>
        </div> -->
        <!-- <div class="award-block" style="width:71.875vw;">
          <div class="name">劉亮延</div>
          <div class="award">入圍19屆（2008年） 金曲獎,傳統暨藝術音樂作品類,最佳專輯製作人獎,最佳跨界音樂專輯獎,及最佳編曲人獎，
《2007<曹七巧>劇場音樂原聲帶》</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">白皇湧</div>
          <div class="award">榮獲王崧興先生紀念基金會2009年論文獎
論文題目：「歷史的詭跡：關於秀姑巒出海口地區的歷史書寫、敘說和展演」</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">陳曼華</div>
          <div class="award">行政院新聞局2011法蘭克福書展台灣館參展
行政院研考會2011第三屆國家出版獎優等
行政院新聞局2012金蝶獎─出版設計大獎銅獎</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">冷翔</div>
          <div class="award">2012榮獲行政院新聞局第34屆金穗獎優等獎
紀錄片「Alis的心願」</div>
        </div>
        <div class="award-block" style="width:71.875vw;">
          <div class="name">洪芳怡</div>
          <div class="award">(2013)第三屆思源人文社會科學博士論文獎，傳播類首獎獎金十萬元及協助論文出版</div>
        </div> -->

      </div>



    </div>
</body>
