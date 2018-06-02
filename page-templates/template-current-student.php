<?php
/*
 * Template Name: current-student
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(5)").removeClass('a_show')
      $ (".sidebarmenu a:eq(5)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main">
      <div class="m" style="width:33vw;">
        <div class="main_short"><font>在校生</font></div>
        <div class="button" style="margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student" class="button_style_black">依領域</a>
        </div>
        <div class="button" style="margin-top:3vh;  margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student-year" class="button_style_white">依學年</a>
        </div>

        <div class="block_content" style="width:72.875vw;">
          <!--左邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:left; display:inline-block; /*margin-right:4.3125vw;*/">
            <div class="category" >社會學類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>巫珮琪</li>
                <li>李　丁</li>
                <li>徐德育</li>
                <li>林士鈞</li>
                <li>郭　佳</li>
                <li>陳知寧</li>
                <li>蔡沛霖</li>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
              </ol>
            </div>
            <div class="category" >傳播類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
                <li>林莉萍</li>
                <li>邱映哲</li>
                <li>水修鐳</li>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
            <div class="category" >商管類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
          </div>
          <!--右邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:right; vertical-align:top;">
            <div class="category" >社會學類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>巫珮琪</li>
                <li>李　丁</li>
                <li>徐德育</li>
                <li>林士鈞</li>
                <li>郭　佳</li>
                <li>陳知寧</li>
                <li>蔡沛霖</li>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
              </ol>
            </div>
            <div class="category" >傳播類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>張恩瑋</li>
                <li>陳聖允</li>
                <li>羅逸晉</li>
                <li>李宜臻</li>
                <li>林莉萍</li>
                <li>邱映哲</li>
                <li>水修鐳</li>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
            <div class="category" >商管類</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>陳知寧</li>
                <li>林士鈞</li>
                <li>蔡沛霖</li>
                <li>李　丁</li>
                <li>郭　佳</li>
                <li>巫珮琪</li>
                <li>徐德育</li>
              </ol>
            </div>
          </div>
        </div>

      </div>


    </div>



  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
