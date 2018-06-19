<?php
/*
 * Template Name: workshop
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(4)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show');
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-global-lounge'); ?>


<body>

    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">研討會／工作坊</div>
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
      <!-- lecture block -->
      <div class="lecture-block" style="width:72vw; margin-bottom:5.25vh;">
        <div class="photo-lecture">
          <img src="<?php bloginfo('template_url'); ?>/images/class_banner_01.png" />
        </div>
        <div class="lecture-data" style="width:42vw; height:19vh; display:inline-block; vertical-align: top;">
          <div class="lecture-date">Jan 2-3, 2017</div>
          <div class="lecture-topic">衝突、正義與解殖II</div>
          <div class="lecture-topic-eng">Conflict, Justice and Decolinization II</div>
          <div class="lecturers">Sandro Mezzadra, Jon Solomon, Alain Brossat, 板桓竜太, 磯前順一, 酒井直樹</div>
          <div class="lecture-classroom">交通大學 人社二館 204教室 ｜ 204 HA Building 2, NCTU</div>
        </div>
      </div>
      <!-- lecture block -->
      <div class="lecture-block" style="width:72vw; margin-bottom:5.25vh;">
        <div class="photo-lecture">
          <img src="<?php bloginfo('template_url'); ?>/images/class_banner_02.jpg" />
        </div>
        <div class="lecture-data" style="width:42vw; height:19vh; display:inline-block; vertical-align: top;">
          <div class="lecture-date">Mar 29, Mar 30, and Apr 7, 2017</div>
          <div class="lecture-topic">殖民去殖民 資本主義</div>
          <div class="lecture-topic-eng">&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="lecturers">Walter Mignolo</div>
          <div class="lecture-classroom">交通大學 人社二館 110教室, 臺灣大學 台大文學院二樓 會議室, 交通大學 人社二館 326教室</div>
        </div>
      </div>
      <!-- lecture block -->
      <div class="lecture-block" style="width:72vw; margin-bottom:5.25vh;">
        <div class="photo-lecture">
          <img src="<?php bloginfo('template_url'); ?>/images/class_banner_03.png" />
        </div>
        <div class="lecture-data" style="width:42vw; height:19vh; display:inline-block; vertical-align: top;">
          <div class="lecture-date">May 12, 2017</div>
          <div class="lecture-topic">衝突、正義與解殖I</div>
          <div class="lecture-topic-eng">Conflict, Justice and Decolinization I</div>
          <div class="lecturers">藤谷藤隆, 坪井秀人, 米山麗莎</div>
          <div class="lecture-classroom">交通大學 人社二館 204教室 ｜ 204 HA Building 2, NCTU</div>
        </div>
      </div>
    </div>


</body>
