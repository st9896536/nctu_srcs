<?php
/*
 * Template Name: thesis
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/student.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(5)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show');
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body>

    <div class="main" style="width:71.875vw;">
      <div class="title_block" style=" width: 71.875vw;height: 4vh;">
        <div class="title_r" style="display: inline-block;width:25vw; float:left; height:2.75vh;">畢業論文</div>
        <div class="options" style="width:45vw; float:right; ">
          <select class="semester" style="    margin-right: 0;background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            <option value="106_first_sem">106上</option>
          　<option value="105_second_sem">105下</option>
          　<option value="105_first_sem">105上</option>
            <option value="105_first_sem">104下</option>
            <option value="105_first_sem">104上</option>
            <option value="105_first_sem">103下</option>
            <option value="105_first_sem">103上</option>
          </select>
        </div>
      </div>
      <HR size="1px" style="margin-top:2.5vh; margin-bottom:2vh; width:71.825vw;">
      <a href="#" class="button_style_blue" style=" position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">碩士班</a>
      <div class="thesis-master" style="width: 71.875vw;margin-top: 8vh;">

        <?php $master_thesis = get_post_meta( $post->ID, 'master_thesis', true ); 
            foreach( $master_thesis as $masterthesis){?>
              <div class="thesis-block" style="height:10.75vh; margin-bottom:2.25vh;">
                <div class="thesis-name"><?php echo $masterthesis['master_thesis_name']?></div>
                <div class="thesis-title"><?php echo $masterthesis['master_thesis_topic']?></div>
                <div class="thesis-professor"><?php echo $masterthesis['master_thesis_professor']?></div>
              </div>
              <?php
              
            }?>
        

        <!-- <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
          <div class="thesis-name">麗麗
            (Margarita Shutova)</div>
          <div class="thesis-title">現代俄羅斯的光頭次文化：不同種類的表示
            Skinhead Movement in Modern Russia: Different Kinds of Representation
          </div>
          <div class="thesis-professor">司黛蕊 教授</div>
        </div>
        <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
          <div class="thesis-name">陳曼華</div>
          <div class="thesis-title">藝術與文化政治：戰後台灣藝術的主體形構
            Art and Cultural Politics: The Subject Formation of Taiwanese Art after World War Two
          </div>
          <div class="thesis-professor">顏娟英 教授</div>
        </div>
        <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
          <div class="thesis-name">劉雅芳</div>
          <div class="thesis-title">從冷戰聽覺轉向第三世界/亞洲的音樂生產:李雙澤、楊祖珺、黑名單工作室王明輝的音樂思想與實踐
            From Cold War Listening Experiences to Third World Music Production: Thinking Practice of LI Shuangze, YANG Tsuchuen and WANG Minghui
          </div>
          <div class="thesis-professor">陳光興 教授
            何東洪 教授</div>
        </div>
        <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
          <div class="thesis-name">楊成瀚</div>
          <div class="thesis-title">(不）令人讚賞的靈光對象：數位獨體化時代的藝術研究
            The (Un)Admirable Auratic Ob-ject: Study on the Art in the Age of Digital Individuation
          </div>
          <div class="thesis-professor">朱元鴻 教授
魏德驥 教授</div>
        </div> -->


      </div>


      <HR size="1px" style="margin-top:2.5vh; margin-bottom:2vh; width:1.2vw;">
      <a href="#" class="button_style_blue" style="background-color:rgba(180,5,0,1); position: absolute;margin-bottom:1.25vh;color: rgba(255, 255, 255, 1);">博士班</a>


        <div class="thesis-doctor" style="width: 71.875vw;height: 19vh;margin-top: 8vh;">

          <?php $doctor_thesis = get_post_meta( $post->ID, 'doctor_thesis', true ); 
            foreach( $doctor_thesis as $doctorthesis){?>
              <div class="thesis-block" style="height:10.75vh; margin-bottom:2.25vh;">
                <div class="thesis-name"><?php echo $doctorthesis['doctor_thesis_name']?></div>
                <div class="thesis-title"><?php echo $doctorthesis['doctor_thesis_topic']?></div>
                <div class="thesis-professor"><?php echo $doctorthesis['doctor_thesis_professor']?></div>
              </div>
              <?php
              
            }?>

          
          <!-- <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
            <div class="thesis-name">麗麗
              (Margarita Shutova)</div>
            <div class="thesis-title">現代俄羅斯的光頭次文化：不同種類的表示
              Skinhead Movement in Modern Russia: Different Kinds of Representation
            </div>
            <div class="thesis-professor">司黛蕊 教授</div>
          </div>
          <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
            <div class="thesis-name">陳曼華</div>
            <div class="thesis-title">藝術與文化政治：戰後台灣藝術的主體形構
              Art and Cultural Politics: The Subject Formation of Taiwanese Art after World War Two
            </div>
            <div class="thesis-professor">顏娟英 教授</div>
          </div>
          <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
            <div class="thesis-name">劉雅芳</div>
            <div class="thesis-title">從冷戰聽覺轉向第三世界/亞洲的音樂生產:李雙澤、楊祖珺、黑名單工作室王明輝的音樂思想與實踐
              From Cold War Listening Experiences to Third World Music Production: Thinking Practice of LI Shuangze, YANG Tsuchuen and WANG Minghui
            </div>
            <div class="thesis-professor">陳光興 教授
              何東洪 教授</div>
          </div>
          <div class="thesis-block" style="height:7.75vh; margin-bottom:2.25vh;">
            <div class="thesis-name">楊成瀚</div>
            <div class="thesis-title">(不）令人讚賞的靈光對象：數位獨體化時代的藝術研究
              The (Un)Admirable Auratic Ob-ject: Study on the Art in the Age of Digital Individuation
            </div>
            <div class="thesis-professor">朱元鴻 教授
  魏德驥 教授</div>
          </div> -->

        </div>
    </div>
</body>
