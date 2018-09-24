<?php
/*
 * Template Name: present-course_1
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="//script.sheetsu.com/"></script>
  <script>

    $( document ).ready(function() {

		// hover css 停留功能
      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(0)").removeClass('a_show');
      $ (".sidebarmenu a:eq(0)").addClass('sidebarmenu_active');

		// 讀取json檔進來
      $.getJSON("<?php bloginfo('template_url'); ?>/srcs_1071.json", function(data){
            console.log(data);
            var obj = Object.keys(data).map(function(_) { return data[_]; }); //轉array
            // console.log(obj);
            var new_obj = Object.keys(obj[0]).map(function(_) { return obj[0][_]; }); //轉array
            // console.log(new_obj);
            var new_obj_arr = Object.keys(new_obj[0]).map(function(_) { return new_obj[0][_]; });  //轉array
            var second_arr = Object.keys(new_obj[1]).map(function(_) { return new_obj[1][_]; });  //轉array
            // console.log(new_obj_arr);  //還沒排序過
            new_obj_arr = new_obj_arr.concat(second_arr) //將兩個array合併
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
        Sheetsu.read("https://sheetsu.com/apis/v1.0qu/88e849b06cfc",{},successFunc);

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
    </div>


</body>
