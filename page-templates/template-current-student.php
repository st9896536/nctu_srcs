<?php
/*
 * Template Name: current-student
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(5)").removeClass('a_show');
      $ (".sidebarmenu a:eq(5)").addClass('sidebarmenu_active');


      $('#btn_year').click(function(){
        
        if($('#1').css('display')!='none'){
          $('#2').html($('#static').html()).show();
          $('#1').hide();
          $ ("#btn_area").removeClass('button_style_black');
          $ ("#btn_area").addClass('button_style_white');
          $ ("#btn_year").removeClass('button_style_white');
          $ ("#btn_year").addClass('button_style_black'); 
        }
    });

      $('#btn_area').click(function(){
        
        if($('#2').css('display')!='none'){
          $('#1').show();
          $('#2').hide();
          $ ("#btn_year").removeClass('button_style_black');
          $ ("#btn_year").addClass('button_style_white');
          $ ("#btn_area").removeClass('button_style_white');
          $ ("#btn_area").addClass('button_style_black'); 
        }
    });


});


    
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>

<div class="container">
  <div class="row">
    <div class="main">
      <div class="m" style="width:33vw; display: inline-block;">
        <div class="main_short"><font>在校生</font></div>
        <div class="button" style="margin-top:3vh; margin-bottom: 3vh; display: inline-block;">
          <div id="btn_area" class="button_style_black" style="    cursor: pointer;">依領域</div>
        </div>
        <div class="button" style="margin-top:3vh;  margin-bottom: 3vh; display: inline-block;">
          <div id="btn_year" class="button_style_white" style="    cursor: pointer;">依學年</div>
        </div>
      </div>

        <div id="1">
          <div class="block_content" style="/*width:72.875vw;*/ width:auto; height: 50vh;">

            <?php 
              $current = get_post_meta( $post->ID, 'current_student', true );
              if( !empty( $current ) ){
                  foreach( $current as $curr ){?>
                  <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw;    vertical-align: top;">
                      <div class="category" ><?php echo $curr['subject_area']?></div>
                      <HR size="1px" color="#4F4F4F">
                      <div class="names">
                          <p><?php echo $curr['student_name']?></p>
                      </div>
                      
                  </div>
                  <?php
                  }
              }
              ?>


            <!-- <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw;">
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

            </div>

            <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw; /*margin-right:3.3125vw;*/">
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
            </div> -->


          </div>
        </div>

        <div id="2" style="display: inline-block;">
          
        </div>

        <div id="static" style="display:none;">
            <!-- 依學年區分 -->
            <div class="block_content" style="width:auto; height: 50vh;">
              <?php 
              $stu_year = get_post_meta( $post->ID, 'current_student_year', true );
              if( !empty( $current ) ){
                  foreach( $stu_year as $year ){?>
                  <div class="main_block" style=" width: 34.6vw; display:inline-block; margin-right: 2.5vw; vertical-align: top;">
                      <div class="category" ><?php echo $year['academic_year']?></div>
                      <HR size="1px" color="#4F4F4F">
                      <div class="names">
                          <p><?php echo $year['phd_or_master_name']?></p>
                      </div>
                      
                  </div>
                  <?php
                  }
              }
              ?>

              <!-- <div class="main_block" style=" width: 34.6vw; float:left; display:inline-block; /*margin-right:4.3125vw;*/">
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
              </div> -->
            </div>
        </div>
          



        




    </div>



  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
