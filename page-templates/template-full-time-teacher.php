<?php
/*
 * Template Name: full-time-teacher
 */
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show')
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>


<div class="container">
  <div class="row">
    <div class="main" >
      <div class="main_long"><font>專任師資</font></div>
          <?php
          $is_multiple=False;
          $args = array(
          'category_name' => 'fulltime_teacher_info_srcs',
          'orderby' => 'title',
          'order' => 'ASC'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
              while($the_query->have_posts()):
                  $the_query->the_post();
                  if($is_multiple):
          ?>
          <?php endif; ?>
          <div class="teacher_block" style=" margin-right: 1vw; display: inline-block; margin-top: 5vh; height: auto;">
            <a target="_blank" href="<?php the_permalink(); ?>">
                <div class="photo">
                  <?php 

                  $image = get_field('teacher_photo');

                  if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
                </div>
                <div class="teacher">
                  <div id="t1" style="margin-right: 1vw;">
                    <?php $teacher_position = get_field( "teacher_position" ); 
                      if( $teacher_position ){
                        echo $teacher_position;
                      }
                    ?>
                  </div>
                  <div id="t1" style="margin-right: 1vw; height: auto;">
                    <?php the_title(); ?>  <!-- teacher's name is equal to the article title -->
                  </div>
                </div>
                <div class="profession">
                  <div id="graduate">
                    <?php $teacher_education = get_field( "teacher_education" ); 
                      if( $teacher_education ){
                        echo $teacher_education;
                      }
                    ?>
                  </div>
                  <HR size="1px" color="#000">
                  <div id="t2" style="/*white-space: pre-line;*/ margin-top: 1vh;">
                    <?php $teacher_professional_area = get_field( "teacher_professional_area" ); 
                      if( $teacher_professional_area ){
                        echo $teacher_professional_area;
                      }
                    ?>
                  </div>
                </div>
                <div class="line" style="margin-top: 7vh;">
                  <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
                  <HR size="3px" color="#4F4F4F">
                </div>
              </a>
          </div>
          <?php
          $is_multiple=True;
            endwhile;
          else:?>
              <div class="poster-title">還沒有新增老師詳細內頁喔！</div>
          <?php
          endif;
          wp_reset_postdata();
          ?>
            




      <!-- <div class="inblock" style="width:71.875vw; margin-bottom: 10vh;">
        <div class="teacher_block">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof朱元鴻_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">教授</div>
            <div id="t2">朱元鴻</div>
          </span>
          <span class="profession">
            <div id="graduate">美國德州大學(奧斯汀)社會學博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>社會思想史</li>
    					<li>當代社會理論</li>
    					<li>文化研究</li>
    					<li>都市民族誌</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>


        
        <div class="teacher_block" style="float:right; margin-top:-16.75vh; !important;">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof林淑芬_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">教授</div>
            <div id="t2">林淑芬</div>
          </span>
          <span class="profession">
            <div id="graduate">英國艾嘉斯大學政治學博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>當代基進政治思想與思想史</li>
    					<li>台灣戰後政治與經濟論述分析</li>
    					<li>社會運動</li>
              <li>冷戰研究</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>
      </div>

      <div class="inblock" style="width:71.875vw; margin-bottom: 10vh;">
        
        <div class="teacher_block">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof邱德亮_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">副教授</div>
            <div id="t2">邱德亮</div>
          </span>
          <span class="profession">
            <div id="graduate">法國高等社會科學院歷史與文明研究所博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>文化史比較研究</li>
    					<li>品味理論</li>
    					<li>飲食文化史</li>
    					<li>當代法國思潮</li>
    					<li>史學理論與歷史寫作</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>


        
        <div class="teacher_block" style="float:right; margin-top:-16.75vh; !important;">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof藍弘岳_photo3.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">副教授</div>
            <div id="t2">藍弘岳</div>
          </span>
          <span class="profession">
            <div id="graduate">東京大學總合文化研究科博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>日本思想史</li>
    					<li>日本漢學</li>
    					<li>東亞思想文化交流史</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>
      </div>

      <div class="inblock" style="width:71.875vw; margin-bottom: 10vh;">
        
        <div class="teacher_block">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof彭明偉_photo2.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">副教授</div>
            <div id="t2">彭明偉</div>
          </span>
          <span class="profession">
            <div id="graduate">清大中文系博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>中國現代</li>
    					<li>當代文學</li>
    					<li>台灣文學</li>
    					<li>西洋文學思潮</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>


        
        <div class="teacher_block" style="float:right; margin-top:-16.75vh; !important;">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof陳奕麟_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">合聘教授</div>
            <div id="t2">陳奕麟</div>
          </span>
          <span class="profession">
            <div id="graduate">美國芝加哥大學人類學博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>文化研究</li>
    					<li>社會理論</li>
    					<li>歷史變遷</li>
              <li>論述實踐</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>
      </div>

      <div class="inblock" style="width:71.875vw; margin-bottom: 10vh;">
        
        <div class="teacher_block">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof邱德亮_photo.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">合聘教授</div>
            <div id="t2">莊雅仲</div>
          </span>
          <span class="profession">
            <div id="graduate">美國杜克大學文化人類學博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>文化人類學理論</li>
    					<li>民主與社會運動</li>
    					<li>社區研究</li>
    					<li>都市文化</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>


        
        <div class="teacher_block" style="float:right; margin-top:-16.75vh; !important;">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof王智明_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">合聘副教授</div>
            <div id="t2">王智明</div>
          </span>
          <span class="profession">
            <div id="graduate">美國加州大學聖塔克魯茲分校文學系博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>跨國美國文學與文化</li>
    					<li>文學理論與建制史</li>
    					<li>亞洲現代思想</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>
      </div>

      <div class="inblock" style="width:71.875vw; margin-bottom: 10vh;">
        
        <div class="teacher_block">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof蔡晏霖_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">合聘副教授</div>
            <div id="t2">蔡晏霖</div>
          </span>
          <span class="profession">
            <div id="graduate">美國加州大學聖塔克魯茲校區人類學(性別研究)博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>文化人類學</li>
    					<li>性別研究</li>
    					<li>南亞區域研究</li>
    					<li>族裔與離散</li>
              <li>食農研究</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div> -->


        <!--右邊老師欄位-->
        <!--
        <div class="teacher_block" style="float:right; margin-top:-16.75vh; !important;">
          <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/images/professor/prof王智明_photo1.jpg" />
          </div>
          <span class="teacher">
            <div id="t1">合聘副教授</div>
            <div id="t2">王智明</div>
          </span>
          <span class="profession">
            <div id="graduate">美國加州大學聖塔克魯茲分校文學系博士</div>
            <HR size="1px" color="#000">
            <ol class="v" style="margin-top:1.25vh; ">
    					<li>跨國美國文學與文化</li>
    					<li>文學理論與建制史</li>
    					<li>亞洲現代思想</li>
    				</ol>
          </span>
          <div class="line" style="margin-top:13.5vh;">
            <HR size="1px" color="#4F4F4F" style="margin-bottom:0.2vh;">
            <HR size="3px" color="#4F4F4F">
          </div>
        </div>
      </div>
    -->


    </div>


  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
