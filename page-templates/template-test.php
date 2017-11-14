<?php
/*
 * Template Name: test for image slider
 */
?>


<head>
  <!-- Place somewhere in the <head> of your document -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
  <meta charset="UTF-8">
    <title>單頁輪撥式網站設計</title>
<!--    匯入jQuery    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery.mousewheel.min.js"></script>
    <script>
        $(document).ready(function(){
            var num_li=$("li").length//偵測我們有幾個標點（圖片）

            //滾動滑鼠滾輪時，移動到上一頁、下一頁的效果
            n=1
            moving=0
            $(window).mousewheel(function(e){
                $("html,body").stop()
                if(moving==0){
                    moving=1
                    if(e.deltaY==-1){
                        if(n<num_li){
                            n++
                        }
                    }else{
                        if(n>1){
                            n--
                        }
                    }
                }
                $("html,body").animate({"scrollTop":$(".p0"+n).offset().top},function(){moving=0})
                console.log(n)
            })

            //根據捲軸的位置改變右方導覽列游標的顏色
            $(window).scroll(function(){
                 if($(window).scrollTop()>=$(".p01").offset().top && $(window).scrollTop()<$(".p02").offset().top){
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    $(".nav li:eq(0)").css("background-color","#46dd46")
                }else if($(window).scrollTop()>=$(".p02").offset().top && $(window).scrollTop()<$(".p03").offset().top){
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    $(".nav li:eq(1)").css("background-color","#46dd46")
                }else if($(window).scrollTop()>=$(".p03").offset().top && $(window).scrollTop()<$(".p04").offset().top){
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    $(".nav li:eq(2)").css("background-color","#46dd46")
                }else if($(window).scrollTop()>=$(".p04").offset().top && $(window).scrollTop()<$(".p05").offset().top){
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    $(".nav li:eq(3)").css("background-color","#46dd46")
                }else if($(window).scrollTop()>=$(".p05").offset().top){
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    $(".nav li:eq(4)").css("background-color","#46dd46")
                }
            })

            //點選右方導覽列時會到指定圖片
            for(i=0;i<=num_li;i++){
                $(".nav li:eq("+i+")").click({id:i},function(e){
                    $("html,body").stop()
                    $(".nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
                    page=e.data.id+1
                    $("html,body").animate({"scrollTop":$(".p0"+page).offset().top})
                    $(".nav li:eq("+e.data.id+")").css("background-color","#46dd46")//被點擊到的游標變色，前面的selector用this也可以
                    n=e.data.id+1
                })
            }
            //一進入網頁時，將導覽列垂直置中計算導覽列置中的位置
           center()

           //縮放網頁時，將導覽列垂直置中
            $(window).resize(function(){
                center()
            })

            //計算導覽列垂直置中的高度
            function center(){
                pos=$(window).height()/2-$(".nav").height()/2
                $(".nav").css("top",pos)
            }

        })
    </script>

  <!-- Place in the <head>, after the three links -->
  <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
  </script>
  <style>
    *{
        padding:0;
        margin:0;
    }
    body{
        overflow: hidden;
    }
/*    插入背景圖片    */
    .p01{
        background-image:url(images/p01.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        height:100vh;
    }
    .p02{
        background-image:url(images/p02.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        height:100vh;
    }
    .p03{
        background-image:url(images/p03.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        height:100vh;
    }
    .p04{
        background-image:url(images/p04.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        height:100vh;
    }
    .p05{
        background-image:url(images/p05.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        height:100vh;
    }
/*    插入導覽列     */
    .nav{
        position: fixed;
        top:50%;
        right:0px;
        cursor:pointer;
    }
    li{
        width:10px;
        height:10px;
        margin: 10px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 1px 1px 1px rgba(0,0,0,0.5) inset,-1px -1px 1px rgba(0,0,0,0.5) inset;
        list-style-type: none;
    }
    h1{
        font-size:60px;
        color:ghostwhite;
        text-shadow:0px 0px 15px black;
    }
</style>
</head>

<?php get_template_part('includes/header'); ?>


<div class="container">
  <div class="row">
    <!-- Place somewhere in the <body> of your page -->
    <div class="flexslider">
      <ul class="slides" style="width:100vw; height:100vh;">
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/bg.jpg" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_1.png" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_2.png" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_3.png" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/cover_banner_4.png" />
        </li>
      </ul>
    </div>

    <body>
        <div class="container">
            <div class="nav">
                <ul>
                    <li style="background-color:#46dd46"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="p01"><h1>Page 1</h1></div>
            <div class="p02"><h1>Page 2</h1></div>
            <div class="p03"><h1>Page 3</h1></div>
            <div class="p04"><h1>Page 4</h1></div>
            <div class="p05"><h1>Page 5</h1></div>
        </div>

</body>
  </div><!-- /.row -->
</div><!-- /.container -->



</?php get_template_part('includes/footer'); ?>
