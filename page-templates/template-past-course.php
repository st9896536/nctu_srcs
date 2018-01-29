<?php
/*
 * Template Name: past-course
 */
?>

<?php $thisPage="graduate"; ?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>
    $( document ).ready(function() {
      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('sidebarmenu a')
      $ (".sidebarmenu a:eq(0)").addClass('currentpage')
      // $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu a');
      // $ (".sidebarmenu a:eq(0)").addClass('currentpage');
      //$(this).addClass('nav_active');
});
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-course'); ?>


<body>

    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">社文所本學年課程</div>
        <div class="options" style="width:48vw; float:right; ">
            <!-- <a href="#" class="button_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">全校課程搜尋</a>
            <a href="#" class="button_style_plan1" style="background-color: rgba(255, 230, 160, 0.8); color: rgba(100, 100, 100, 1);">106下</a>
            <a href="#" class="button_style_plan1">106上</a> -->
            <form>
            <select class="semester" style="background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            　<option value="106_first_sem">106上</option>
            　<option value="105_second_sem">105下</option>
            　<option value="105_first_sem">105上</option>
            </select>
            </form>
        </div>
      </div>
      <!-- 星期一 -->
        <div class='table'>

            <div class='row'>

              <div class='cell merged' style="width:2.35vw;">星期一</div>
                <div class='intable'>
                  <div class='row'>
                    <div class='cell'>IJK</div>
                    <div class='course'>

                        <div class="course-title-chi">亞際文化研究導論</div>
                        <div class="course-title_eng">Introduction to Inter-Asia Cultural Studies</div>
                        <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                        <div class="professor-name-chi">劉紀慧 教授</div>
                        <div class="professor-name-eng">Joyce C.H. Liu</div>

                    </div>
                    <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top;">
                      <a href="#" class="button_style_blue">選修課程</a>
                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">英文授課</a>
                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">輔開課程</a>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='cell'>EFG</div>
                    <div class='course'>

                        <div class="course-title-chi">文化研究理論(博)</div>
                        <div class="course-title_eng">Introduction to Cultural Studies</div>
                        <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                        <div class="professor-name-chi">朱元鴻／劉紀蕙／陳奕麟教授 合授</div>
                        <div class="professor-name-eng">Yuan-Horng Chu, Joyce C.H. Liu and Allen Chun</div>

                    </div>
                    <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top;">
                      <a href="#" class="button_style_gray" style="color: rgba(255, 255, 255, 1); background-color: rgba(180, 5, 0, 1);">核心課程</a>
                    </div>
                  </div>
                </div>

            </div>

        </div>
      <!-- 星期二 -->
      <div class='table'>

          <div class='row'>

            <div class='cell merged' style="width:2.35vw;">星期二</div>
              <div class='intable'>
                <div class='row'>
                  <div class='cell'>CDX</div>
                  <div class='course'>

                      <div class="course-title-chi">近現代日本思想史專題</div>
                      <div class="course-title_eng">Seminar on Modern Japanese Intellectual History</div>
                      <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                      <div class="professor-name-chi">藍弘岳 教授</div>
                      <div class="professor-name-eng">Hung-Yueh Lan</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top;">
                    <a href="#" class="button_style_blue">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">東亞現代研究</a>
                  </div>
                </div>
                <div class='row'>
                  <div class='cell'>EFG</div>
                  <div class='course'>

                      <div class="course-title-chi">國家與社會</div>
                      <div class="course-title_eng">State and Society</div>
                      <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                      <div class="professor-name-chi">林淑芬 教授</div>
                      <div class="professor-name-eng">Shu-fen Lin</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top;">
                    <a href="#" class="button_style_blue">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                  </div>
                </div>
                <div class='row'>
                  <div class='cell'>EFG</div>
                  <div class='course'>

                    <div class="course-title-chi">當代議題：老化的現代性</div>
                    <div class="course-title_eng">Contemporary Issue: Aging Modernity</div>
                    <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                    <div class="professor-name-chi">朱元鴻 教授</div>
                    <div class="professor-name-eng">Yuan-Horng Chu</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top;">
                    <a href="#" class="button_style_blue" style="color: rgba(255, 255, 255, 1);">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                  </div>
                </div>
              </div>

          </div>

      </div>






    </div>


</body>
