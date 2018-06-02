<?php
/*
 * Template Name: current-student-year
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

</head>


<div class="container">
  <div class="row">
    <div class="main">
      <div class="m" style="width:33vw;">
        <div class="main_short"><font>在校生</font></div>
        <div class="button" style="margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student" class="button_style_white">依領域</a>
        </div>
        <div class="button" style="margin-top:3vh;  margin-bottom: 3vh; display: inline-block;">
          <a href="<?php echo site_url(); ?>/current-student-year" class="button_style_black">依學年</a>
        </div>

        <div class="block_content" style="width:72.875vw;">
          <!--左邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:left; display:inline-block; /*margin-right:4.3125vw;*/">
            <div class="category" >105年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>巫珮琪</li>
                <li>李　丁</li>
                <li>徐德育</li>
                <li>林士鈞</li>
                <li>郭　佳</li>

              </ol>
            </div>
            <div class="category" >104年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>涂懿文</li>
                <li>朱春聰</li>
                <li>陳珮君</li>
                <li>利錦鴻</li>
                <li>Poonam Sharma</li>

              </ol>
            </div>
            <div class="category" >103年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>孫佳婷</li>
                <li>梅　秋</li>
                <li>白洛克</li>
                <li>陳怡文</li>
                <li>潘博成</li>

              </ol>
            </div>
            <div class="category" >102年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>孫佳婷</li>
                <li>梅　秋</li>
                <li>白洛克</li>
                <li>陳怡文</li>
                <li>潘博成</li>

              </ol>
            </div>
          </div>
          <!--右邊區塊-->
          <div class="main_block" style=" width: 34.6vw; float:right; vertical-align:top;">
            <div class="category" >105年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>陳知寧</li>
                <li>蔡沛霖</li>
                <li>林莉萍</li>
                <li>邱映哲</li>
                <li>李宜臻</li>
                <li>水修鐳</li>
                <li>陳聖允</li>
                <li>張恩瑋</li>
                <li>羅逸晉</li>
                <li>王天賀</li>
                <li>李　齊</li>
              </ol>
            </div>
            <div class="category" >104年博班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>黃崇銘</li>
                <li>陸　盈</li>
                <li>歐蓮妃</li>
                <li>呂伊庭</li>
                <li>楊佳柔</li>
                <li>蔡恩祥</li>
                <li>周嘉欣</li>
                <li>張嘉雯</li>
                <li>杜焱</li>
                <li>Jonathan Parhusip</li>

              </ol>
            </div>
            <div class="category" >103年碩班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>蘇倍筠</li>
                <li>何孟璇</li>
                <li>游蕙任</li>
                <li>陈冉涌</li>
                <li>唐薇亞</li>
                <li>林佩錦</li>
                <li>林哲玄</li>
                <li>許建聰</li>
              </ol>
            </div>
            <div class="category" >102年碩班</div>
            <HR size="1px" color="#4F4F4F">
            <div class="names">
              <ol>
                <li>蘇倍筠</li>
                <li>何孟璇</li>
                <li>游蕙任</li>
                <li>陈冉涌</li>
                <li>唐薇亞</li>
                <li>林佩錦</li>
                <li>林哲玄</li>
                <li>許建聰</li>
              </ol>
            </div>
          </div>
        </div>

      </div>


    </div>



  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
