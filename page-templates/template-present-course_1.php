<?php
/*
 * Template Name: present-course_1
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="//script.sheetsu.com/"></script>
  <script>

    $( document ).ready(function() {

		// hover css 停留功能
      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');
	  
		// 讀取json檔進來
      $.getJSON("<?php bloginfo('template_url'); ?>/srcs_1061.json", function(data){
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
            var weekdays_chi = [];
            for(var i = 0; i <count.length; i++) {

              if(i == 0){
                weekdays_chi[i] = "配合老師時間"
              }
              else if(i == 1){
                weekdays_chi[i] = "星期一"
              }
              else if(i == 2){
                weekdays_chi[i] = "星期二"
              }
              else if(i == 3){
                weekdays_chi[i] = "星期三"
              }
              else if(i == 4){
                weekdays_chi[i] = "星期四"
              }
              else{
                weekdays_chi[i] = "星期五"
              }

              // switch (i) {
              //   case 0:
              //     weekdays_chi[i] = "個別安排"
              //   case 1:
              //     weekdays_chi[i] = "星期一"
              //   case 2:
              //     weekdays_chi[i] = "星期二"
              //   case 3:
              //     weekdays_chi[i] = "星期三"
              //   case 4:
              //     weekdays_chi[i] = "星期四"
              //   case 5:
              //     weekdays_chi[i] = "星期五"
              // }

              $('.main').append("<div id=weekdays_" + i +" class=table></div>");
              $('#weekdays_' + i).append("<div id=row_" + i + " class=row></div>");
              $('#row_' + i).append("<div class=cell_weekdays>" + weekdays_chi[i] + "</div>");
              $('#weekdays_' + (i+1)).append("<div id=cource_block_" + (j+1) +  " class=row></div>");
              for (var j = 0; j< count[i];j++){

                // $('#weekdays_' + (i)).append("<div id=cource_block_" + (i) + (j) +  " class=row_container> </div>");
                $('#row_' + i).append("<div id=cource_block_" + i + j +  " class=row_container> </div>");
                $('#cource_block_' + i + j).append("<div id=cell_" + num +  " class=cell>" + final_time[num] + "</div>");
                $('#cource_block_' + i + j).append("<div id=cour_"  + num + " class=course> </div>");
                $('#cource_block_' + i + j).append("<div id=btn-course-block class=cell_" + num + "> </div>");
                if (document.getElementById("cell_" + num).innerHTML == "NaN" ){
                   document.getElementById("cell_" + num).innerHTML = "預約";
                }
                num++;
              }

            }


            for (var i = 0; i < num; i++){
              $('#cour_' + i).append("<div class=course-title-chi>" + new_obj_arr[i].cos_cname +  "</div>");
              $('#cour_' + i).append("<div class=course-title-eng>" + new_obj_arr[i].cos_ename +  "</div>");
              $('#cour_' + i).append("<HR size=1px style=margin-right:1vw; >");
              $('#cour_' + i).append("<div class=professor-name-chi>" + new_obj_arr[i].teacher +  "</div>");

            }
        });

        sheet_category = [];  //課程屬性
        attribute_first = []; //attribute2
        attribute_second = []; //attribute3
        attribute_third = []; //attribute4
        attribute_fourth = []; //attribute5
        function successFunc(googlesheet) {
          console.log(googlesheet);
          for (var i in googlesheet){
              sheet_category[i] = googlesheet[i].attribute1; //核心課程or選修課程
              attribute_first[i] = googlesheet[i].attribute2;
              attribute_second[i] = googlesheet[i].attribute3;
              attribute_third[i] = googlesheet[i].attribute4;
              attribute_fourth[i] = googlesheet[i].attribute5;
              console.log(sheet_category[i]);
              if(sheet_category[i] == "選修課程"){
                $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
                $('#btn_block_' + i).append("<div class=button_style_blue>" + sheet_category[i] + "</div>");
                // $('.cell_' + i).append("<div class=button_style_blue>" + sheet_category[i] + "</div>");
              }
              else if(sheet_category[i] == "核心課程"){
                $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
                $('#btn_block_' + i).append("<div class=button_style_red>" + sheet_category[i] + "</div>");
              }
              if(attribute_first[i] || attribute_second[i] || attribute_third[i] || attribute_fourth[i]){
                $('.cell_' + i).append("<div class=button_style_gray>" + attribute_first[i] +"</div>");
                $('.cell_' + i).append("<div class=button_style_gray>" + attribute_second[i] +"</div>");
                $('.cell_' + i).append("<div class=button_style_gray>" + attribute_third[i] +"</div>");
                $('.cell_' + i).append("<div class=button_style_gray>" + attribute_fourth[i] +"</div>");
                
              }

             
              
          }
        }

        
        Sheetsu.read("https://sheetsu.com/apis/v1.0qw/d84322613df5/",{},successFunc);

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
            <a id="btn-second" href="<?php echo site_url(); ?>/present-course-second-semester" >106下</a>
            <a id="btn-first" href="<?php echo site_url(); ?>/present-course-first-semester" >106上</a>

        </div>
      </div>

      <!-- 星期一 -->
        <!-- <div class='table'>

            <div class='row'>

              <div class='cell_weekdays' style="width:2.35vw;">星期一</div>
                <div class='intable'>
                  <div class='row_container'>
                    <div class='cell'>EFG</div>
                    <div class='course'>


                        <div class="course-title-chi">文化研究理論(博)</div>
                        <div class="course-title-eng">Introduction to Cultural Studies</div>
                        <HR size="1px" style="margin-top:0.25vh; margin-bottom:1.25vh; margin-right: 1vw;">
                        <div class="professor-name-chi">朱元鴻／劉紀蕙／陳奕麟教授 合授</div>
                        <div class="professor-name-eng">Yuan-Horng Chu, Joyce C.H. Liu and Allen Chun</div>

                    </div>
                    <div class='cell' id="btn-course-block" >
                        <script>
                            function successFunc(data) {
                              console.log(data);
                            }
                            // Get all rows where column 'score' is '42'
                            var searchQuery = {
                              "屬性／課程領域1": *,
                            };
                            Sheetsu.read("https://sheetsu.com/apis/v1.0qw/d84322613df5/", {
                              search: searchQuery
                            }, successFunc);
                        </script>                                     

                      <a href="#" class="button_style_blue">選修課程</a>
                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">核心課程</a>
                      <a href="#" class="button_style_gray" style=" color: rgba(50, 50, 50, 1);">英文授課</a>

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

      </div>

 -->




    </div>

  
</body>
