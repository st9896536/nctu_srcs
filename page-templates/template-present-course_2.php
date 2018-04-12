<?php
/*
 * Template Name: present-course_2
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {


      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');

      $.getJSON("<?php bloginfo('template_url'); ?>/srcs_1062.json", function(data){
            console.log(data);
            console.log( "success" );
            console.log(typeof(data));
            var obj = Object.keys(data).map(function(_) { return data[_]; }); //轉array
            console.log(obj);
            var new_obj = Object.keys(obj[0]).map(function(_) { return obj[0][_]; }); //轉array
            console.log(new_obj[0]);
            var new_obj_arr = Object.keys(new_obj[0]).map(function(_) { return new_obj[0][_]; });  //轉array
            // console.log(new_obj_arr);  //還沒排序過
            // console.log(new_obj_arr[0]);


            for (var i = 0, l = new_obj_arr.length; i < l; i++) {
             // document.write(new_obj_arr[i].cos_time + ", " +
             // new_obj_arr[i].cos_cname + ", " +
             // new_obj_arr[i].cos_ename + ", " +
             // new_obj_arr[i].teacher + "<br/>");
            }

            new_obj_arr = new_obj_arr.sort(function (a, b) {
             return a.cos_time > b.cos_time ? 1 : -1;
            });

            console.log(new_obj_arr) //已排序


            var cos_time = []; //授課時間
            var arr_weekdays = []; //星期幾
            var arr_time = []; //undefinedEFG
            var final_time = []; //EFG
            var arr_timetable = []; //最後合併的課表array

            for (var i in new_obj_arr){
              cos_time[i] = new_obj_arr[i].cos_time;

              // 切割cos_time區分為星期與時間
              arr_weekdays[i] = cos_time[i][0];
              for (var j=1; j<4;j++){
                arr_time[i] += cos_time[i][j];
              }
              final_time[i] = arr_time[i][9] + arr_time[i][10] + arr_time[i][11];

            }

            var count = [0,0,0,0,0,0]; //計算星期一到星期五的數量
            for(var i = 0; i<arr_weekdays.length; i++){

              // console.log(weekdays[i]);
              if (arr_weekdays[i] == 1){
                count[1]++;
              }
              else if (arr_weekdays[i] == 2){
                count[2]++;
              }
              else if (arr_weekdays[i] == 3){
                count[3]++;
              }
              else if (arr_weekdays[i] == 4){
                count[4]++;
              }
              else if (arr_weekdays[i] == 5){
                count[5]++;
              }
              else{
                count[0]++;
              }
            }
             console.log(count);

            //控制板型要新增多少
            var num = 0;
            var c = 0;
            for(var i = 0; i <count.length; i++) {

              $('.main').append("<div id=weekdays_" + i +" class=table></div>");
              $('#weekdays_' + i).append("<div id=row_" + i + " class=row></div>");
              $('#row_' + i).append("<div class=cell_weekdays>" + "星期" + i + "</div>");
              $('#weekdays_' + (i+1)).append("<div id=cource_block_" + (j+1) +  " class=row></div>");

              // $('.row_block').append("<div class=cell_weekdays>" + "星期" + i + "</div>")
              for (var j = 0; j< count[i];j++){

                // $('#weekdays_' + (i)).append("<div id=cource_block_" + (i) + (j) +  " class=row_container> </div>");
                $('#row_' + (i)).append("<div id=cource_block_" + (i) + (j) +  " class=row_container> </div>");
                $('#cource_block_' + (i) + (j)).append("<div id=cell_" + num +  " class=cell>" + final_time[num] + "</div>");
                $('#cource_block_' + (i) + (j)).append("<div id=cour_"  + num + " class=course> </div>");
                $('#cource_block_' + (i) + (j)).append("<div class=cell id=btn-course-block> </div>");
                num++;

              }

            }
            for(var i = 0;i<count.length; i++){

            }


            console.log(num);

            for (var i = 0; i < num; i++){
              $('#cour_' + i).append("<div class=course-title-chi>" + new_obj_arr[i].cos_cname +  "</div>");
              $('#cour_' + i).append("<div class=course-title-eng>" + new_obj_arr[i].cos_ename +  "</div>");
              $('#cour_' + i).append("<HR size=1px style=margin-right:1vw; >");
              $('#cour_' + i).append("<div class=professor-name-chi>" + new_obj_arr[i].teacher +  "</div>");
            }
        });
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-course'); ?>


<body>

    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;"><?php the_title()?></div>
        <div id="buttons_course" style="width:48vw; float:right;">

            <a id="btn-whole" target="_blank" href="https://timetable.nctu.edu.tw/?flang=zh-tw" >全校課程搜尋</a>
            <a id="btn-first" href="<?php echo site_url(); ?>/present-course-second-semester" >106下</a>
            <a id="btn-second" href="<?php echo site_url(); ?>/present-course-first-semester" >106上</a>

        </div>
      </div>
      <!-- 星期一 -->
        <!-- <div class='table'> -->

            <!-- <div class='row'>

              <div class='cell merged' style="width:2.35vw;"></div>
                <div class='intable'>
                  <div class='row'>
                    <div class='cell'></div>
                    <div class='course'>


                        <div class="course-title-chi"></div>
                        <div class="course-title_eng"></div>
                        <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                        <div class="professor-name-chi"></div>
                        <div class="professor-name-eng"></div>

                    </div>
                    <div class='cell' id="btn-course-block" style="width:33.825vw; padding-top:1.5vh; vertical-align: top; padding-left: 1vw;">



                      <a href="#" class="button_style_blue"></a>
                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);"></a>

                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);"></a>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='cell'>EFG</div>
                    <div class='course'>

                        <div class="course-title-chi">文化研究理論(博)</div>
                        <div class="course-title_eng">Introduction to Cultural Studies</div>
                        <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                        <div class="professor-name-chi">朱元鴻／劉紀蕙／陳奕麟教授 合授</div>
                        <div class="professor-name-eng">Yuan-Horng Chu, Joyce C.H. Liu and Allen Chun</div>

                    </div>
                    <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top; padding-left: 1vw;">
                      <a href="#" class="button_style_gray" style="color: rgba(255, 255, 255, 1); background-color: rgba(180, 5, 0, 1);">核心課程</a>
                    </div>
                  </div>
                </div>

            </div>

        </div> -->
      <!-- 星期二 -->
      <!-- <div class='table'>

          <div class='row'>

            <div class='cell merged' style="width:2.35vw;">星期二</div>
              <div class='intable'>
                <div class='row'>
                  <div class='cell'>CDX</div>
                  <div class='course'>

                      <div class="course-title-chi">近現代日本思想史專題</div>
                      <div class="course-title_eng">Seminar on Modern Japanese Intellectual History</div>
                      <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                      <div class="professor-name-chi">藍弘岳 教授</div>
                      <div class="professor-name-eng">Hung-Yueh Lan</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top; padding-left: 1vw;">
                    <a href="#" class="button_style_blue">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">東亞現代研究</a>
                  </div>
                </div>
                <div class='row'>
                  <div class='cell'>EFG</div>
                  <div class='course'>

                      <div class="course-title-chi">國家與社會</div>
                      <div class="course-title_eng">State and Society</div>
                      <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                      <div class="professor-name-chi">林淑芬 教授</div>
                      <div class="professor-name-eng">Shu-fen Lin</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top; padding-left: 1vw;">
                    <a href="#" class="button_style_blue">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                  </div>
                </div>
                <div class='row'>
                  <div class='cell'>EFG</div>
                  <div class='course'>

                    <div class="course-title-chi">當代議題：老化的現代性</div>
                    <div class="course-title_eng">Contemporary Issue: Aging Modernity</div>
                    <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                    <div class="professor-name-chi">朱元鴻 教授</div>
                    <div class="professor-name-eng">Yuan-Horng Chu</div>

                  </div>
                  <div class='cell' style="width:33.825vw; padding-top:1.5vh; vertical-align: top; padding-left: 1vw;">
                    <a href="#" class="button_style_blue" style="color: rgba(255, 255, 255, 1);">選修課程</a>
                    <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">社會文化與政治思想</a>
                  </div>
                </div>
              </div>

          </div>

      </div> -->






    </div>


</body>
