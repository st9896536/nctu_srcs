<?php
/*
 * Template Name: research-direction
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(1)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

    
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-research'); ?>

<body>


<div class="container" style="margin-left: 24vw;">

      <div id="content_block" style="margin-top: -68vh;/*margin-left: 25vw; width:76vw;padding: 3vh 5vw;*/">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;  margin-right: 3vw;  display: inline-block; ">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/research_area_01.jpg" />
                </div>
                <div style="margin-top: 3.5vh; padding: 1vh; text-align: -webkit-center;">
                  <p>社會文化批判理論</p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >當代爭議，生命政治，國家形成 與文化建構，帝國主義，殖民社 會與後殖民主義理論，跨國主義 與文化，宗教暴力，主體與認同， 民主與民粹，資本主義，種族主 義，新自由主義與新重商主義， 合作經濟，空間與地方，都市研 究，批判農學，視覺理論，人類世，多物種民族誌，理論家專題</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;  margin-right: 3vw;  display: inline-block; ">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/research_area_02.jpg" />
                </div>
                <div style="margin-top: 3.5vh; padding: 1vh; text-align: -webkit-center;">
                  <p>台灣社會與文化</p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >台灣思想史，台灣社會史，台灣政治經濟思想，台灣教育與文化形態，台灣冷戰與解殖，台灣文學與社會議題，台灣民主與社會運動，台灣藝術，台灣電影</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;  margin-right: 3vw;  display: inline-block; ">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/research_area_03.jpg" />
                </div>
                <div style="margin-top: 3.5vh; padding: 1vh; text-align: -webkit-center;">
                  <p>東亞歷史與文化</p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >亞的民主化運動，全球化的東南亞，近代中國思想史，近代中國文學，日本思想史，日文學術名著選讀</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="direction" style="width: 25vh;margin-bottom: 5vh;  margin-right: 3vw;  display: inline-block; ">
                <div class="circle_block" style="width: 25vh; height: 25vh; ">
                  <img id="circle" class="img-fluid" style="border-radius: 12.5vh; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);" src="<?php bloginfo('template_url'); ?>/images/research_area_04.jpg" />
                </div>
                <div style="margin-top: 3.5vh; padding: 1vh; text-align: -webkit-center;">
                  <p>藝術社會行動</p>
                </div>
                <div><HR size="1px" color="#4F4F4F" style="margin-top:1.5vh; margin-bottom:2vh;"></div>
                <div id="content" >紀錄片分析與製作，民族誌電影研究與製作，裝置藝術與文化批判，介入式影像創作，參與式視覺人類學，數位民族誌，藝術策展</div>
              </div>
            </div>
            
          </div>
      </div>

</div><!-- /.container -->
</body>
