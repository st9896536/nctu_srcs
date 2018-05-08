<?php
/*
 * Template Name: academic-cooperation
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
      $ ("#top-menu a:eq(4)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-global-lounge'); ?>


<body>

    <div class="main">
      <div class="title_block" style="width:72vw; height:5vh;">
        <div class="title_r" style="width:25vw; float:left; height:2.75vh;">學術合作</div>

      </div>

      <div class="co_block" style="width:72vw; padding:1vh 0.8vw; border-bottom: #000 solid 1px;">
        <div id="co-title" style="width:7vw;">締約年月</div>
        <div id="co-title" style="width:14vw;">學校名稱</div>
        <div id="co-title" style="width:25.5vw;">締約名稱及起迄效期</div>
        <div id="co-title" style="width:23.375vw;">約文內容</div>
      </div>

      <div class="co_detail" style="width:72vw; padding:1vh 0.8vw;">
        <?php $academic_cooperation = get_post_meta( $post->ID, 'academic_cooperation', true ); 
            foreach( $academic_cooperation as $academic_co){?>
              <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 1vh;">
                <div class="co-detail" style="width:7vw;"><?php echo $academic_co['academic_cooperation_signdate']?></div>
                <div id="school-name" style="width:14vw;"><?php echo $academic_co['academic_cooperation_schoolname']?></div>
                <div class="co-detail" style="width:22.5vw;"><?php echo $academic_co['academic_cooperation_rules']?></div>
                <div class="co-detail" style="width:23.375vw;"><?php echo $academic_co['academic_cooperation_contract']?></div>
              </div>
              <?php
              
            }?>





        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 1vh;">
          <div class="co-detail" style="width:7vw;">2015.03.31</div>
          <div id="school-name" style="width:14vw;">韓國中央大學(交換學生) </div>
          <div class="co-detail" style="width:22.5vw;">有效期5年，協議期滿，如無一方書面中止，視為雙方同意續約三年。</div>
          <div class="co-detail" style="width:23.375vw;">1.依平等互惠原則，每校每學年至多3位交換學生。</div>
        </div>
        <!-- <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2015.03.31</div>
          <div id="school-name" style="width:14vw;">東京大學(交換學生) </div>
          <div class="co-detail" style="width:22.5vw;">有效期5年，協議期滿，如無一方書面中止，視為雙方同意續約三年。</div>
          <div class="co-detail" style="width:23.375vw;">1.依平等互惠原則，每校每學年至多3位交換學生。</div>
        </div>
        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2014.04.08</div>
          <div id="school-name" style="width:14vw;">上海大學(交換學生計畫) </div>
          <div class="co-detail" style="width:22.5vw;">有效期5年，協議期滿，如無一方書面中止，視為雙方同意續約三年。</div>
          <div class="co-detail" style="width:23.375vw;">1.依平等互惠原則，每校每學年至多3位交換學生。</div>
        </div>
        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;height: 32vh;">
          <div class="co-detail" style="width:7vw;">2012.01.03</div>
          <div id="school-name" style="width:14vw;">新加坡南洋理工大學</div>
          <div class="co-detail" style="width:22.5vw;"></div>
          <div class="co-detail" style="width:23.375vw;">1.依平等互惠原則，每校每學年至多3位交換學生。
            <ol>
              <li>學術研究活動合作</li>
              <li>教師交流</li>
              <li>學生交流</li>
              <li>學術出版品交流</li>
              <li>經雙方同意進行之交流活動</li>
            </ol>
          </div>
        </div>
        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2012.01.03</div>
          <div id="school-name" style="width:14vw;">新加坡南洋理工大學
            (交換學生計畫)</div>
          <div class="co-detail" style="width:22.5vw;">3年內有效，到期前30天決定續約或中止。若中途有一方要中止合約應於六個月內書面通知他方，並不得影響原學生之權益。</div>
          <div class="co-detail" style="width:23.375vw; list-style-type:decimal;">
            <ol>
              <li>依平等互惠原則，每校每學年至10位交換學生。</li>
              <li>交換期間繳交原校註冊費。簽證、住宿、旅遊、餐飲、保險、書籍、文具等費用需自付。</li>
              <li>須遵守接待學校之規範，有些課程不適用交換 學生。</li>
              <li>須在原校完成學位。</li>
              <li>若半途放棄，不得遞補其他學生。</li>
              <li>必須完成登記課程的考試及測驗，無論是否可抵免原校學分。</li>
              <li>違反接待學校之校規或該國法律，於告知原校後有權終止交換計畫。</li>
              <li>交換期間結束成績單將直接寄到學校。</li>
            </ol>
          </div>
        </div>

        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2011.10.15</div>
          <div id="school-name" style="width:14vw;">新加坡大學</div>
          <div class="co-detail" style="width:22.5vw;">- 2016</div>
          <div class="co-detail" style="width:23.375vw; list-style-type:decimal;">
            <ol>
              <li style="height: 7vh;">一學年兩位交換學生名額，若人數不足可保留，合約期限內以兩校交換人數均等為原則。( 一學期兩位等於一學年一位)</li>
              <li>交換學生為非學位性質，亦排除轉校之期待。交換期間結束須回原校註冊。</li>
              <li>交換期間繳交原校註冊費</li>
              <li>原校依標準選送交換學生，接待學校保留評定及拒絕之權。</li>
              <li>交換學生須遵守接待學校之規範</li>
              <li>此協議書五年內有效。</li>
            </ol>
          </div>
        </div>
        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2010.4</div>
          <div id="school-name" style="width:14vw;">香港中文大學
            文化宗教研究系</div>
          <div class="co-detail" style="width:22.5vw;">- 2015已再續約</div>
          <div class="co-detail" style="width:23.375vw; ">
            <li>每學年的兩學期，兩校各保留一位交換學生的名額，以兩校均等為原則。</li>
            <li>交換學生由原學校於交換學校的報名期限前提出申請。</li>
            <li>所修學分參照原學校之學分認可辦法。</li>
            <li>學費付給原學校， CUHK的中文課程不在此限。</li>
            <li>此協議書五年內有效。</li>
          </div>
        </div>
        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2010.04</div>
          <div id="school-name" style="width:14vw;">上海大學
            中國當代文化研究中心</div>
          <div class="co-detail" style="width:22.5vw;"></div>
          <div class="co-detail" style="width:23.375vw; ">
            <ol>
              <li>學術研究活動合作</li>
              <li>教師交流</li>
              <li>學生交流</li>
              <li>學術出版品交流</li>
              <li>經雙方同意進行之交流活動</li>
            </ol>
          </div>
        </div>

        <div class="co_content" style=" border-bottom: #000 solid 1px; padding-top: 2vh;">
          <div class="co-detail" style="width:7vw;">2009.12</div>
          <div id="school-name" style="width:14vw;">華東師範大學
            思勉人文高等研究院</div>
          <div class="co-detail" style="width:22.5vw;"></div>
          <div class="co-detail" style="width:23.375vw; ">
            <ol>
              <li>學術研究活動合作</li>
              <li>教師交流</li>
              <li>學生交流</li>
              <li>學術出版品交流</li>
              <li>經雙方同意進行之交流活動</li>
            </ol>
          </div>
        </div> -->

        <a href="#" class="button_style_gray" style="border-radius:0; background-color:rgba(50,50,50,1); color: rgba(255, 255, 255, 1); margin-top:1.5vh;">校際合作會議</a>

        <div class="co-buttom-list" style="width:72vw; margin-top: 6vh;">
          <ol>
            <li><a href="#">台灣大學社會系（97學年下學期-102學年度上學期）</a></li>
            <li><a href="#">台灣大學法律系（98學年上學期-102學年度下學期）</a></li>
            <li><a href="#">台灣大學城鄉所（101學年上學期-105學年度下學期）</a></li>


          </ol>
        </div>

      </div>
    </div>
</body>
