<?php
/*
 * Template Name: intership-exchange-record
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
      $ (".sidebarmenu a:eq(4)").removeClass('a_show');
      $ (".sidebarmenu a:eq(4)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-student'); ?>


<body style="margin-bottom: 5vh;">

    <div class="main">
      <div class="title_block" style="width:55vw; height:5vh;">
        <div class="title_r" style="width:55vw; float:left; height:2.75vh;">101-105年本所學生赴國外機構交換修課</div>
      </div>

      <div class="intership_block" style="width:55vw; padding-top:1.5vh;padding-bottom:1.25vh; border-bottom: #000 solid 1px;">
        <div id="intership-title" style="width:6vw; margin-right:1vw;">姓名</div>
        <div id="intership-title" style="width:15vw;">交換學校</div>
        <div id="intership-title" style="width:32vw;">見習單位</div>
      </div>

      
          <?php $foreign_study = get_post_meta( $post->ID, 'foreign_study', true );          
            foreach( $foreign_study as $foreignstudy){ ?>
              <div class="intership_detail" style="width:55vw;">
                <div class="intership_content" style=" padding-top: 1.5vh; ">
                  <div class="intership-detail" style="width:6vw;"><?php echo $foreignstudy['exchange_student_name']?></div>
                  <div class="intership-detail" style="width:15vw;"><?php echo $foreignstudy['exchange_school']?></div>
                  <div class="intership-detail" style="width:32vw;"><?php echo $foreignstudy['trainee_office']?></div>
                </div>
              </div> 
              <?php
            }?>
        

      <!-- <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">孫佳婷</div>
          <div class="intership-detail" style="width:15vw;">義大利都靈大學 </div>
          <div class="intership-detail" style="width:32vw;">105學年度下學期</div>
        </div>
      </div> -->


      <!-- <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">潘博成</div>
          <div class="intership-detail" style="width:15vw;">香港中文大學文化研究系 </div>
          <div class="intership-detail" style="width:32vw;">105學年度下學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">謝萬科</div>
          <div class="intership-detail" style="width:15vw;">日本東京大學 </div>
          <div class="intership-detail" style="width:32vw;">105學年度下學期至106學年度上學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">謝承叡</div>
          <div class="intership-detail" style="width:15vw;">巴黎第八大學 </div>
          <div class="intership-detail" style="width:32vw;">105學年度下學期至106學年度上學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">何孟璇</div>
          <div class="intership-detail" style="width:15vw;">日本東京大學 </div>
          <div class="intership-detail" style="width:32vw;">105學年度下學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">張智琦</div>
          <div class="intership-detail" style="width:15vw;">香港中文大學文化研究系 </div>
          <div class="intership-detail" style="width:32vw;">103學年度上學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;">
          <div class="intership-detail" style="width:6vw;">徐祥宇</div>
          <div class="intership-detail" style="width:15vw;">香港中文大學文化研究系 </div>
          <div class="intership-detail" style="width:32vw;">102學年度下學期</div>
        </div>
      </div>
      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1vh;    margin-bottom: 3.75vh;">
          <div class="intership-detail" style="width:6vw;">陳柏毅</div>
          <div class="intership-detail" style="width:15vw;">捷克馬薩里克大學 </div>
          <div class="intership-detail" style="width:32vw;">101學年度上學期至101學年度下學期</div>
        </div>
      </div> -->



      <div class="title_block" style="width:55vw; height:5vh; margin-top: 3.75vh;">
        <div class="title_r" style="width:55vw; float:left; height:2.75vh;">102-103年學生見習</div>
      </div>

      <div class="intership_block" style="width:55vw; padding-top:1.5vh;padding-bottom:1.25vh; border-bottom: #000 solid 1px;">
        <div id="intership-title" style="width:6vw; margin-right:1vw;">姓名</div>
        <div id="intership-title" style="width:15vw;">交換學校</div>
        <div id="intership-title" style="width:32vw;">見習單位</div>
      </div>

      <?php $student_traineeship = get_post_meta( $post->ID, 'student_traineeship', true );          
            foreach( $student_traineeship as $trainee){ ?>
              <div class="intership_detail" style="width:55vw;">
                <div class="intership_content" style=" padding-top: 1.5vh; ">
                  <div class="intership-detail" style="width:6vw;"><?php echo $trainee['102-103_trainee_student_name']?></div>
                  <div class="intership-detail" style="width:15vw;"><?php echo $trainee['102-103_exchange_school']?></div>
                  <div class="intership-detail" style="width:32vw;"><?php echo $trainee['102-103_trainee_office']?></div>
                </div>
              </div> 
              <?php
            }?>
      <!-- <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;margin-bottom: 3.75vh;">
          <div class="intership-detail" style="width:6vw;">薛熙平</div>
          <div class="intership-detail" style="width:15vw;">朱元鴻 </div>
          <div class="intership-detail" style="width:32vw;">台北市立聯合醫院松德院區
2013.07.01－2013.12.31
2014.01.01－2014.06.31</div>
        </div>
      </div> -->


      <div class="title_block" style="width:55vw; height:5vh; margin-top: 3.75vh;">
        <div class="title_r" style="width:55vw; float:left; height:2.75vh;">98年學生見習</div>
      </div>

      <div class="intership_block" style="width:55vw; padding-top:1.5vh;padding-bottom:1.25vh; border-bottom: #000 solid 1px;">
        <div id="intership-title" style="width:6vw; margin-right:1vw;">姓名</div>
        <div id="intership-title" style="width:15vw;">交換學校</div>
        <div id="intership-title" style="width:32vw;">見習單位</div>
      </div>


        <?php $student_traineeship_98 = get_post_meta( $post->ID, '98_student_traineeship', true );          
            foreach( $student_traineeship_98 as $trainee){ ?>
              <div class="intership_detail" style="width:55vw;">
                <div class="intership_content" style=" padding-top: 1.5vh; ">
                  <div class="intership-detail" style="width:6vw;"><?php echo $trainee['98_trainee_student_name']?></div>
                  <div class="intership-detail" style="width:15vw;"><?php echo $trainee['98_exchange_school']?></div>
                  <div class="intership-detail" style="width:32vw;"><?php echo $trainee['98_trainee_office']?></div>
                </div>
              </div> 
              <?php
            }?>
      <!-- <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">郭政芬</div>
          <div class="intership-detail" style="width:15vw;">朱元鴻 </div>
          <div class="intership-detail" style="width:32vw;">天主教中壢希望職工中心</div>
        </div>
      </div>

      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">楊凱喬</div>
          <div class="intership-detail" style="width:15vw;">林淑芬 </div>
          <div class="intership-detail" style="width:32vw;">中華民國紅心字會─台北市單親家庭服務中心</div>
        </div>
      </div>

      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;margin-bottom: 3.75vh;">
          <div class="intership-detail" style="width:6vw;">黃佳璿</div>
          <div class="intership-detail" style="width:15vw;">魏德驥 </div>
          <div class="intership-detail" style="width:32vw;">台東縣永續發展協會</div>
        </div>
      </div> -->


      <div class="title_block" style="width:55vw; height:5vh; margin-top: 3.75vh;">
        <div class="title_r" style="width:55vw; float:left; height:2.75vh;">97年學生見習</div>
      </div>

      <div class="intership_block" style="width:55vw; padding-top:1.5vh;padding-bottom:1.25vh; border-bottom: #000 solid 1px;">
        <div id="intership-title" style="width:6vw; margin-right:1vw;">姓名</div>
        <div id="intership-title" style="width:15vw;">交換學校</div>
        <div id="intership-title" style="width:32vw;">見習單位</div>
      </div>

        <?php $student_traineeship_97 = get_post_meta( $post->ID, '97_student_traineeship', true );          
            foreach( $student_traineeship_97 as $trainee){ ?>
              <div class="intership_detail" style="width:55vw;">
                <div class="intership_content" style=" padding-top: 1.5vh; ">
                  <div class="intership-detail" style="width:6vw;"><?php echo $trainee['97_trainee_student_name']?></div>
                  <div class="intership-detail" style="width:15vw;"><?php echo $trainee['97_exchange_school']?></div>
                  <div class="intership-detail" style="width:32vw;"><?php echo $trainee['97_trainee_office']?></div>
                </div>
              </div> 
              <?php
            }?>
      <!-- <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">馬欣</div>
          <div class="intership-detail" style="width:15vw;">陳奕麟 </div>
          <div class="intership-detail" style="width:32vw;">龍岡清真寺</div>
        </div>
      </div>

      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">丁時馨</div>
          <div class="intership-detail" style="width:15vw;">邱德亮 </div>
          <div class="intership-detail" style="width:32vw;">行政院退除役官兵輔導委員會新竹榮民服務處</div>
        </div>
      </div>

      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;">
          <div class="intership-detail" style="width:6vw;">顧玉玲</div>
          <div class="intership-detail" style="width:15vw;">林淑芬 </div>
          <div class="intership-detail" style="width:32vw;">台灣國際家庭互助協會</div>
        </div>
      </div>

      <div class="intership_detail" style="width:55vw;">
        <div class="intership_content" style=" padding-top: 1.5vh;margin-bottom:5vh;">
          <div class="intership-detail" style="width:6vw;">梁永怡</div>
          <div class="intership-detail" style="width:15vw;">Erik Ringmar </div>
          <div class="intership-detail" style="width:32vw;">中華民國藝術文化環境改造協會</div>
        </div>
      </div> -->
    </div>
</body>
