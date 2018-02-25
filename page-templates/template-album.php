<?php
/*
 * Template Name: album
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(4)").addClass('nav_active');
      $ (".sidebarmenu a:eq(3)").removeClass('a_show');
      $ (".sidebarmenu a:eq(3)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-global-lounge'); ?>


<body>

    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">活動相簿</div>
        <div class="options" style="width:48vw; float:right; ">
            <form>
            <select class="semester" style="background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            　<option value="106_first_sem">2017</option>
            　<option value="105_second_sem">2016</option>
            　<option value="105_first_sem">2015</option>
            </select>
            </form>
        </div>
      </div>

      <div class="album-block" style="width:72vw;  height: 45vh; margin-bottom: 5vh;">
        <div class="a-single" style="margin-right:4.4375vw;"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">年度傑出學者講座─小熊英二</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>

        <div class="a-single" style="margin-right:4.4375vw;"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">2016 Summer University</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>

        <div class="a-single"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">青年學者工作坊</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>
      </div>



      <div class="album-block" style="width:72vw;  height: 45vh; margin-bottom: 5vh;">
        <div class="a-single" style="margin-right:4.4375vw;"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">「日曜日式散步者」
特映會及映後座談會</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>

        <div class="a-single" style="margin-right:4.4375vw;"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">第二屆 亞際文化研究國際學程分享會</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>

        <div class="a-single"> <!--單一個album-->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="a-image" style="width:21vw; height:21vw;">
              <img src="<?php bloginfo('template_url'); ?>/images/home_01.jpg" />
            </div>
            <div class="a-text" style="height:10vh; background-color:rgba(230,230,230,1); padding:0 0.625vw">
              <div id="a1">青年學者工作坊</div>
              <div id="a2">35張照片</div>
              <div id="a3">2016.11.28-29</div>
            </div>
          </a>
        </div>
      </div>




    </div>


</body>
