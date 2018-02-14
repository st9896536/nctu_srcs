<?php
/*
 * Template Name: student-download
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(5)").removeClass('a_show');
      $ (".sidebarmenu a:eq(5)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main" style="width:71.825vw;">
      <div class="title_block" style="height: 20vh;margin-bottom: 3vh;">
        <div class="title_r" style="width: 10vw; float:left; height:2.75vh;">表格下載</div>
        <a href="#" class="btn btn-rules" style="margin-left: -10vw;border: 1px solid #000;margin-right: 3vw;">
          <span>抵免學分</span>
        </a>
        <a href="#" class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;">
          <span>研究生學習
進度報告</span>
        </a>
        <a href="#" class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;">
          <span>交大學位論文
格式規範
</span>
        </a>
        <a href="#" class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;">
          <span>碩、博提案
口試流程</span>
        </a>
        <a href="#" class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;">
          <span>碩、博
口試通知</span>
        </a>
      </div>
      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-master">
        <a href="#" class="button_style_blue" style="position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班(27學分)：</a>
        <div class="rule-master-list" style="width: 71.875vw;">
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>碩士論文指導教授申請表</li>
              <li>碩士班論文提案口試申請表</li>
              <li>碩士論文提案口試委員推薦書</li>
              <li>碩士口試提案評分表</li>
              <li>碩士畢業口試流程</li>
            </ul>
          </div>
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>碩士論文口試申請表</li>
              <li>碩士論文口試申請表 英文版</li>
              <li>碩士論文口試委員推薦書</li>
              <li>碩士口試評分表</li>
              <li>碩士口試評分總表</li>
            </ul>
          </div>
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>碩士論文評審委員會審定書</li>
              <li>碩士論文口試委員推薦書 英文版</li>
              <li>碩士論文指導教授申請表 英文版</li>
              <li>論文提案口試申請表 英文版</li>
              <li>口試提案評分表 英文版</li>
            </ul>
          </div>
        </div>
      </div>


      <div class="rules-doctor" style="margin-top: 5vh;">
        <a href="#" class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班(24學分)：</a>

        <div class="rule-doctor-list" style="width: 71.875vw; margin-bottom: 5vh;">
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>博士候選人申請表</li>
              <li>博士班口試畢業流程</li>
              <li>博士論文口試委員推薦書 中文版</li>
              <li>博士論文口試委員推薦書 英文版</li>
              <li>博士論文口試申請表 中文版</li>
            </ul>
          </div>
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>博士論文口試申請表 英文版</li>
              <li>逕行修讀博士學位申請表</li>
              <li>博士指導教授申請表</li>
              <li>博士資格考申請表</li>
              <li>Application Form for Ph.D. candidacy exam</li>
            </ul>
          </div>
          <div class="list-block" style="margin-top: 5vh;">
            <ul>
              <li>博士論文提案委員推薦表 中文版</li>
              <li>博士論文提案委員推薦表 英文版</li>
              <li>博班論文提案口試申請表 中文版</li>
              <li>博班論文提案口試申請表 英文版</li>
            </ul>
          </div>
        </div>
      </div>









    </div>
</body>
