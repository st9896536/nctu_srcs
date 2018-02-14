<?php
/*
 * Template Name: rules
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
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main" style="width:71.825vw;">
      <div class="title_block" style="height: 20vh;margin-bottom: 3vh;">
        <div class="title_r" style="width: 10vw; float:left; height:2.75vh;">修業辦法</div>
        <a href="#" class="btn btn-rules" style="margin-left: -10vw;border: 1px solid #000;margin-right: 3vw;">
          <span>課程規劃 總表</span>
        </a>
        <a href="#" class="btn btn-rules" style="border: 1px solid #000;margin-right: 3vw;">
          <span>外語能力 認定辦法</span>
        </a>
      </div>
      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-master">
        <a href="#" class="button_style_blue" style="position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班(27學分)：</a>
        <div class="rules-master-test" style=" width: 71.875vw;height: 19vh;margin-top: 2vh;">
          <div class="compulsory" style="float-left;width: 19.75vw;">
            <p>必修：</p>
            <p>文化研究導論（3學分）</p>
            <p>學術訓練討論課（一下、二上，3學分）</p>
            <p>個別研究（一下至二下，3學分）</p>
          </div>
          <div class="required" style="width: 17.75vw;">
            <p>必選：</p>
            <p>社會、文化與政治思想（3學分）</p>
          </div>
          <div class="elective" style="width: 9.75vw;">
            <p>選修：</p>
            <p>台灣文化研究</p>
            <p>東亞現代性</p>
            <p>文化史比較研究</p>
          </div>
          <div class="remarks" style="width: 15.75vw;">
            <p>備注:</p>
            <p>開放9學分至外所與校外選修</p>
          </div>
        </div>
        <div class="rule-master-list" style="width: 71.875vw;height: 19vh;">
          <div class="list-block">
            <ul>
              <li>103級碩士班修業要點</li>
              <li>99級碩士班修業要點</li>
              <li>98級碩士班修業要點</li>
              <li>97級碩士班修業要點</li>
            </ul>
          </div>
          <div class="list-block">
            <ul>
              <li>103級碩士班修課規定</li>
              <li>102級碩士班修課規定</li>
              <li>逕行修讀博士學位作業規定</li>
            </ul>
          </div>
        </div>
      </div>

      <HR size="1px" style="margin-top:1.5vh; margin-bottom:2vh; width:71.825vw;">
      <div class="rules-doctor">
        <a href="#" class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班(24學分)：</a>
        <div class="rules-doctor-test" style=" width: 71.875vw;height: 19vh;margin-top: 2vh;">
          <div class="compulsory" style="float-left;width: 19.75vw;">
            <p>必修：</p>
            <p>文化研究導論（3學分）</p>
            <p>學術訓練討論課（一下、二上，3學分）</p>
            <p>個別研究（一下至二下，3學分）</p>
          </div>
          <div class="required" style="width: 17.75vw;">
            <p>必選：</p>
            <p>社會、文化與政治思想（6學分）</p>
          </div>
          <div class="elective" style="width: 9.75vw;">
            <p>選修：</p>
            <p>台灣文化研究</p>
            <p>亞際文化研究</p>
            <p>藝術社會行動</p>
          </div>
          <div class="remarks" style="width: 15.75vw;">
            <p>備注:</p>
            <p>1.開放9學分至外所與校外選修</p>
            <p>2.需完成第二外語要求</p>
          </div>
        </div>
        <div class="rule-doctor-list" style="width: 71.875vw;height: 19vh;">
          <div class="list-block">
            <ul>
              <li>106級碩士班修業要點</li>
              <li>105級碩士班修業要點</li>
              <li>104級碩士班修業要點</li>
              <li>103級碩士班修業要點</li>
              <li>99級碩士班修業要點</li>
              <li>98級碩士班修業要點</li>
              <li>97級碩士班修業要點</li>
            </ul>
          </div>
          <div class="list-block">
            <ul>
              <li>103級碩士班修課規定</li>
              <li>102級碩士班修課規定</li>
            </ul>
          </div>
        </div>
      </div>









    </div>
</body>
