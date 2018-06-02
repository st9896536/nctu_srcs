<?php
/*
* Template Name: poster-straight
*/

?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main">
      <div class="poster_img" style="width:31.25vw; height:auto; display: inline-block;">
        <img style="box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/post 800x1169.jpg" />
      </div>
      <div class="right_side" style="float: right;display: inline-block; vertical-align: top;margin-right: 2vw;">
        <div class="poster_title" style="width:37.5vw">
          <div id="title_chi">藝術介入與社會批判: 亞際知識對話</div>
          <div id="title_eng">Artistic Intervention and Social Critique: A Dialogue in the Inter-Asian Context</div>
          <HR size="1px" color="#4F4F4F" style="width:37.5vw; margin-bottom:2.25vh;">
          <div class="date_block" style="margin-bottom:2.25vh;">
            <div class="poster_year">2017</div>
            <div class="poster_date">12/8-12/9</div>
          </div>
          <div id="place_chi">國立交通大學人社三館103室</div>
          <div id="place_eng">Seminar room 103, HA Building 3, Chiao Tung University, Hsinchu, Taiwan</div>
          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">
          <!--content_block-->
          <div class="lecturer" style="width:37.5vw; height:auto;">
            <p>Fiky Daulay, 研究者 (印尼KUNCI文化研究中心)<br>
            金俊起 Gim Jungi, 韓國濟州道立美術館館長；濟州雙年展總監<br>
            高俊宏 Kao Jun-Honn, 藝術創作者、台南藝術大學博士、台北藝術大學藝跨所兼任助理教授<br>
            Le Thuan Uyen, 獨立研究者、策展人(越南)<br>
            Syafiatudina Saja, 作家、策展人(印尼KUNCI文化研究中心)<br>
            王虹凱 Wang Hong-Kai, 跨領域藝術創作與研究者<br>
            Xiao Kai-Yu, 詩人(中國)<br>
            Zheng Hong-Bin, 策展人(中國)</p>
          </div>

          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">


          <div class="button_block">
            <div class="button" style="width: 9vw; float: left;">
              <?php if( CFS()->get( 'go_register' ) ) : // HIDE/SHOW BUTTON ?>
                <div style="height:5vh;">
                  <a href="<?php echo CFS()->get( 'go_register' ); ?>"  class="num_button">1</a>
                  <a href="<?php echo CFS()->get( 'go_register' ); ?>"  class="go_register" style="margin-left:0.75vw;display: inline-block;">線上報名</a>
                </div>
              <?php endif; // END OF BUTTON CHECK ?>
            </div>

            <div class="button" style="width: 9vw;">
              <?php if( CFS()->get( 'go_website' ) ) : // HIDE/SHOW BUTTON ?>
                <a href="<?php echo CFS()->get( 'go_website' ); ?>" class="num_button">2</a>
                <a href="<?php echo CFS()->get( 'go_website' ); ?>" class="go_website" style="margin-left:0.75vw; display: inline-block;">活動網頁</a>
              <?php endif; // END OF BUTTON CHECK ?>
            </div>
          </div>

          <HR size="1px" color="#4F4F4F" style="width:10px; margin-top:1.5vh; margin-bottom:1.75vh;">


          <div class="content_guideline">
            <p>國立交通大學文化研究國際中心將於2017年12月8、9兩日舉辦「藝術介入與社會批判: 亞際知識
        對話」工作坊。本工作坊旨在探討藝術實踐作為社會批判的角色與其潛能，並企圖銜接知識勞動和
        藝術勞動兩者之關連，進而在亞際脈絡下對於當代藝術的各種發想和實踐方法進行對話。此次工
        作坊邀集了來自亞洲不同地區的當代藝術家和策展人，共同探討以下不同面向的命題: 批判教學
        法與藝術生產、城市權利、中國脈絡下的社會現實、殖民史與地理政治方法、藝術行動主義與空間
        抗爭。</p>

        <p>The International Institute for Cultural Studies, National Chiao Tung University,
will hold a two-day workshop: “Artistic Intervention and Social Critique: A Dialogue
in the Inter-Asian Context” on December 7th and 8th, 2017. The objective of
this workshop is to explore the immense potentialities of artistic practices in
relation to their function of social intervention and social critique, to bridge intellectual
labors and artistic labor, and to exchange ideas and practices of contemporary
artistic works in the inter-Asian context. We have invited artists and curators
across different regions of Asia to share with us the following themes: Critical
Pedagogy and Artistic Production, Right to the City, Social Reality in China Context,
Colonial History and Geopolitical Method, Art Activism & Spatial Resistance.</p>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>
