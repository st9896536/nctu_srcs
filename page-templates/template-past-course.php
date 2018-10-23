<?php
/*
 * Template Name: past-course
 */
?>

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="//script.sheetsu.com/"></script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(2)").addClass('nav_active');
      $ (".sidebarmenu a:eq(1)").removeClass('a_show');
      $ (".sidebarmenu a:eq(1)").addClass('sidebarmenu_active');

    // call google sheet api
    $.callGoogleSheet = function(sheetID) {
      var googleSpreadsheetID = "1WSb3LxV18-pW17a-aUFjPTlsT689vbINB1OlLP0fTyg";
      // var worksheet = "od6"; //工作表1
      // var worksheet = "o2lo9pr"; //工作表2
      // var worksheet = "oka1znq"; //工作表3
      var worksheet = sheetID;
      var url = "https://spreadsheets.google.com/feeds/list/" + googleSpreadsheetID + "/" + worksheet + "/public/values?alt=json";

      $.getJSON(url, function(data){
        // Get all entries from the google sheet
        var entries = data.feed.entry;
        var mysheet = [];

        console.log(data);

        for (var i = 0; i<entries.length; i++){
          mysheet[i] = {
            "sheet_category": entries[i].gsx$attribute1.$t,
            "attribute_first": entries[i].gsx$attribute2.$t,
            "attribute_second": entries[i].gsx$attribute3.$t,
            "attribute_third": entries[i].gsx$attribute4.$t,
            "attribute_fourth": entries[i].gsx$attribute5.$t,
          }
          console.log(mysheet[i])
          console.log(mysheet[i].sheet_category)
          console.log(mysheet[i].attribute_first)
          console.log(mysheet[i].attribute_second)
          console.log(mysheet[i].attribute_third)
          console.log(mysheet[i].attribute_fourth)

          if(mysheet[i].sheet_category == "選修課程"){
            $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
            $('#btn_block_' + i).append("<div class=button_style_blue>" + mysheet[i].sheet_category + "</div>");
          }
          else if(mysheet[i].sheet_category == "核心課程"){
            $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
            $('#btn_block_' + i).append("<div class=button_style_red>" + mysheet[i].sheet_category + "</div>");
          }
          if(mysheet[i].attribute_first || mysheet[i].attribute_second || mysheet[i].attribute_third || mysheet[i].attribute_fourth){
            $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_first +"</div>");
            $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_second +"</div>");
            $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_third +"</div>");
            $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_fourth +"</div>");
          }
        }
      });
    };

    // $.loadJSON = function(jsonUrl) {
    //   $.getJSON(jsonUrl, function(data){
    //         console.log(data);
    //         var obj = Object.keys(data).map(function(_) { return data[_]; }); //轉array
    //         // console.log(obj);
    //         var new_obj = Object.keys(obj[0]).map(function(_) { return obj[0][_]; }); //轉array
    //         // console.log(new_obj);
    //         var new_obj_arr = Object.keys(new_obj[0]).map(function(_) { return new_obj[0][_]; });  //轉array
    //         var second_arr = Object.keys(new_obj[1]).map(function(_) { return new_obj[1][_]; });  //轉array
    //         // console.log(new_obj_arr);  //還沒排序過
    //         new_obj_arr = new_obj_arr.concat(second_arr) //將兩個array合併
    //         // console.log(new_obj_arr[0]);

    //         new_obj_arr = new_obj_arr.sort(function (a, b) {
    //          return a.cos_time > b.cos_time ? 1 : -1;
    //         });

    //         console.log(new_obj_arr) //已排序

    //         var cos_time = []; //授課時間
    //         var arr_weekdays = []; //星期幾
    //         var arr_time = []; //undefinedEFG
    //         var final_time = []; //EFG
    //         var arr_timetable = []; //最後合併的課表array

    //         for (var i in new_obj_arr){
    //           cos_time[i] = new_obj_arr[i].cos_time;

    //           // 切割cos_time區分為星期與時間
    //           arr_weekdays[i] = cos_time[i][0];
    //           for (var j=1; j<4;j++){
    //             arr_time[i] += cos_time[i][j];
    //           }
    //           final_time[i] = arr_time[i][9] + arr_time[i][10] + arr_time[i][11];
    //         }

    //         var count = [0,0,0,0,0,0]; //計算星期一到星期五的數量
    //         for(var i = 0; i<arr_weekdays.length; i++){

    //           // console.log(weekdays[i]);
    //           if (arr_weekdays[i] == 1){
    //             count[1]++;
    //           }
    //           else if (arr_weekdays[i] == 2){
    //             count[2]++;
    //           }
    //           else if (arr_weekdays[i] == 3){
    //             count[3]++;
    //           }
    //           else if (arr_weekdays[i] == 4){
    //             count[4]++;
    //           }
    //           else if (arr_weekdays[i] == 5){
    //             count[5]++;
    //           }
    //           else{
    //             count[0]++;
    //           }
    //         }
    //          console.log(count);

    //         //控制板型要新增多少
    //         var num = 0;
    //         var weekdays_chi = [];
    //         for(var i = 0; i <count.length; i++) {
    //           $('.main').append("<div id=107_first_sem></div>");
    //           $('#107_first_sem').append("<div id=weekdays_" + i +" class=table></div>");
    //           $('#weekdays_' + i).append("<div id=row_" + i + " class=row></div>");
    //           $('#weekdays_' + (i+1)).append("<div id=cource_block_" + (j+1) +  " class=row></div>");
    //           for (var j = 0; j< count[i];j++){
    //             $('#row_' + i).append("<div id=cource_block_" + i + j +  " class=row_container> </div>");
    //             $('#cource_block_' + i + j).append("<div id=cour_"  + num + " class=course> </div>");
    //             $('#cource_block_' + i + j).append("<div id=btn-course-block class=cell_" + num + "> </div>");
    //             // if (document.getElementById("cell_" + num).innerHTML == "NaN" ){
    //             //    document.getElementById("cell_" + num).innerHTML = "預約";
    //             // }
    //             num++;
    //           }
    //           $('#btn-course-block').css("width","36.825vw");
    //         }
    //         for (var i = 0; i < num; i++){
    //           $('#cour_' + i).append("<div class=course-title-chi>" + new_obj_arr[i].cos_cname +  "</div>");
    //           $('#cour_' + i).append("<div class=course-title-eng>" + new_obj_arr[i].cos_ename +  "</div>");
    //           $('#cour_' + i).append("<HR size=1px style=margin-right:1vw; >");
    //           $('#cour_' + i).append("<div class=professor-name-chi>" + new_obj_arr[i].teacher +  "</div>");
    //         }
    //     });
    // };

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
              // $('.main').append("<div id=weekdays_" + i +" class=table></div>");
              $('.main').append("<div id=107_first_sem></div>");
              $('#107_first_sem').append("<div id=weekdays_" + i +" class=table></div>");
              $('#weekdays_' + i).append("<div id=row_" + i + " class=row></div>");
              // $('#row_' + i).append("<div class=cell_weekdays>" + weekdays_chi[i] + "</div>");
              $('#weekdays_' + (i+1)).append("<div id=cource_block_" + (j+1) +  " class=row></div>");
              
              for (var j = 0; j< count[i];j++){
                // $('#weekdays_' + (i)).append("<div id=cource_block_" + (i) + (j) +  " class=row_container> </div>");
                $('#row_' + i).append("<div id=cource_block_" + i + j +  " class=row_container> </div>");
                // $('#cource_block_' + i + j).append("<div id=cell_" + num +  " class=cell>" + final_time[num] + "</div>");
                $('#cource_block_' + i + j).append("<div id=cour_"  + num + " class=course> </div>");
                $('#cource_block_' + i + j).append("<div id=btn-course-block class=cell_" + num + "> </div>");
                $('.cell_' + num ).css("width","36.825vw");
                // if (document.getElementById("cell_" + num).innerHTML == "NaN" ){
                //    document.getElementById("cell_" + num).innerHTML = "預約";
                // }
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

    $.callGoogleSheet("od6");  //call function to fetch googleSheet第一個工作表
    // var jsonUrl = "<?php bloginfo('template_url'); ?>/srcs_1071.json";
    // $.loadJSON("jsonUrl");

    //依照課表時間排版，讀取google spreadsheet
    // $(function(){
    //   var googleSpreadsheetID = "1WSb3LxV18-pW17a-aUFjPTlsT689vbINB1OlLP0fTyg";
    //   var worksheet = "od6"; //工作表1
    //   // var worksheet = "o2lo9pr"; //工作表2
    //   // var worksheet = "oka1znq"; //工作表3
    //   var url = "https://spreadsheets.google.com/feeds/list/" + googleSpreadsheetID + "/" + worksheet + "/public/values?alt=json";

    //   $.getJSON(url, function(data){
    //     // Get all entries from the google sheet
    //     var entries = data.feed.entry;
    //     var mysheet = [];

    //     console.log(data);

    //     for (var i = 0; i<entries.length; i++){
    //       mysheet[i] = {
    //         "sheet_category": entries[i].gsx$attribute1.$t,
    //         "attribute_first": entries[i].gsx$attribute2.$t,
    //         "attribute_second": entries[i].gsx$attribute3.$t,
    //         "attribute_third": entries[i].gsx$attribute4.$t,
    //         "attribute_fourth": entries[i].gsx$attribute5.$t,
    //       }
    //       console.log(mysheet[i])
    //       console.log(mysheet[i].sheet_category)
    //       console.log(mysheet[i].attribute_first)
    //       console.log(mysheet[i].attribute_second)
    //       console.log(mysheet[i].attribute_third)
    //       console.log(mysheet[i].attribute_fourth)

    //       if(mysheet[i].sheet_category == "選修課程"){
    //         $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
    //         $('#btn_block_' + i).append("<div class=button_style_blue>" + mysheet[i].sheet_category + "</div>");
    //       }
    //       else if(mysheet[i].sheet_category == "核心課程"){
    //         $('.cell_' + i).append("<div id=btn_block_" + i + " class=btn_block></div>");
    //         $('#btn_block_' + i).append("<div class=button_style_red>" + mysheet[i].sheet_category + "</div>");
    //       }
    //       if(mysheet[i].attribute_first || mysheet[i].attribute_second || mysheet[i].attribute_third || mysheet[i].attribute_fourth){
    //         $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_first +"</div>");
    //         $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_second +"</div>");
    //         $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_third +"</div>");
    //         $('.cell_' + i).append("<div class=button_style_gray>" + mysheet[i].attribute_fourth +"</div>");
    //       }
    //     }
    //   });
    // });

    function removeDiv() {
      $('#107_first_sem').remove();
    }

    $('#semester').change(function() {
        var jsonUrl = "";
        var sheet_id = "";
        if(document.getElementById('semester').value == "107_first_sem") {
          removeDiv();
          jsonUrl = "<?php bloginfo('template_url'); ?>/srcs_1071.json";
          sheet_id = "od6";
          $.callGoogleSheet(sheet_id);
        }
        else if (document.getElementById('semester').value == "106_second_sem"){
          removeDiv();
          jsonUrl = "<?php bloginfo('template_url'); ?>/srcs_1062.json";
          sheet_id = "o2lo9pr";
          $.callGoogleSheet(sheet_id);
        }
        else if (document.getElementById('semester').value == "106_first_sem"){
          removeDiv();
          jsonUrl = "<?php bloginfo('template_url'); ?>/srcs_1061.json";
          sheet_id = "oka1znq";
          $.callGoogleSheet(sheet_id);
        }
        
        $.getJSON(jsonUrl, function(data){
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
              // $('.main').append("<div id=weekdays_" + i +" class=table></div>");
              $('.main').append("<div id=107_first_sem></div>");
              $('#107_first_sem').append("<div id=weekdays_" + i +" class=table></div>");
              $('#weekdays_' + i).append("<div id=row_" + i + " class=row></div>");
              // $('#row_' + i).append("<div class=cell_weekdays>" + weekdays_chi[i] + "</div>");
              $('#weekdays_' + (i+1)).append("<div id=cource_block_" + (j+1) +  " class=row></div>");
              
              for (var j = 0; j< count[i];j++){
                // $('#weekdays_' + (i)).append("<div id=cource_block_" + (i) + (j) +  " class=row_container> </div>");
                $('#row_' + i).append("<div id=cource_block_" + i + j +  " class=row_container> </div>");
                // $('#cource_block_' + i + j).append("<div id=cell_" + num +  " class=cell>" + final_time[num] + "</div>");
                $('#cource_block_' + i + j).append("<div id=cour_"  + num + " class=course> </div>");
                $('#cource_block_' + i + j).append("<div id=btn-course-block class=cell_" + num + "> </div>");
                $('.cell_' + num ).css("width","36.825vw");
                // if (document.getElementById("cell_" + num).innerHTML == "NaN" ){
                //    document.getElementById("cell_" + num).innerHTML = "預約";
                // }
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
    });

});
  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar-course'); ?>


<body>
    <div class="main" style="margin-bottom:5vh;">
      <div class="title_block" style="width:73vw; height:5vh; margin-bottom: 3.75vh;">
        <div class="title_r" style="width:25vw; float:left;">歷年課程</div>
        <div class="options" style="width:48vw; float:right; ">
            <form>
            <select class="semester" id="semester" style="background: #e6e6e6 url('<?php bloginfo('template_url'); ?>/images/btn/arrowhead-pointing-down.png')  no-repeat; background-position: 10vw;">
            　<option value="107_first_sem">107上</option>
            　<option value="106_second_sem">106下</option>
            　<option value="106_first_sem">106上</option>
            </select>
            </form>
        </div>
      </div>
    </div>
</body>
