<?php
/*
 * Template Name: adjunct-teacher
 */
?>


<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://use.typekit.net/hgf1mzq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>

    $( document ).ready(function() {
      $ ("#top-menu a:eq(0)").addClass('nav_active');
      $ (".sidebarmenu a:eq(2)").removeClass('a_show')
      $ (".sidebarmenu a:eq(2)").addClass('sidebarmenu_active')
});

  </script>
</head>

<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/sidebar'); ?>



<div class="container">
  <div class="row">
    <div class="main" >
      <div class="main_long"><font>兼任師資</font></div>
      
        
          <div class="name_block" style="width: 71.875vw; margin-top: 4vh; margin-bottom: 1.25vh;">
            

            <?php $adjunct_teacher = get_post_meta( $post->ID, 'adjunct_teacher', true ); 
            foreach( $adjunct_teacher as $teacher){?>
              <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
                <span style="width:10.5vw; margin-right:1.5vw; letter-spacing: 0.5px;"><?php echo $teacher['adjunct_teacher_name']?></span>
                <span style="width:11vw; margin-right:1.5vw;"><?php echo $teacher['adjunct_teacher_current_possition']?></span>
                <span style="width:20vw; margin-right:1.5vw;"><?php echo $teacher['adjunct_teacher_education']?></span>
                <span style="width:31.875vw;"><?php echo $teacher['adjunct_teacher_areas_of_expertise']?></span>
              </div>
              <?php
              
            }?>
          </div>
        

        
        <!-- <span style="width:10.5vw; margin-right:1.5vw; letter-spacing: 0.5px;">Thomas Carl Wall</span>
        <span style="width:11vw; margin-right:1.5vw;">台北科大副教授</span>
        <span style="width:20vw; margin-right:1.5vw;">華盛頓大學英美文學博士</span>
        <span style="width:31.875vw;">20世紀思想史、文學批評史、電影理論與批評</span> -->
      
      <!-- <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">司黛蕊</span>
        <span style="width:11vw; margin-right:1.5vw;">中研院助研究員</span>
        <span style="width:20vw; margin-right:1.5vw;">美國芝加哥大學人類學博士</span>
        <span style="width:31.875vw;">次文化、民族誌田野</span>
      </div>
      <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">顏娟英</span>
        <span style="width:11vw; margin-right:1.5vw;">中研院助歷史語言研究員</span>
        <span style="width:20vw; margin-right:1.5vw;">美國哈佛大學藝術史博士</span>
        <span style="width:31.875vw;">歷史語言學研究</span>
      </div>
      <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">魏德驥</span>
        <span style="width:11vw; margin-right:1.5vw;">助理教授</span>
        <span style="width:20vw; margin-right:1.5vw;">台灣大學哲學博士</span>
        <span style="width:31.875vw;">西洋古典哲學、希臘文化史、中國古典哲學、康德哲學、美學</span>
      </div>
      <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">何東洪</span>
        <span style="width:11vw; margin-right:1.5vw;">輔仁大學心理系副教授</span>
        <span style="width:20vw; margin-right:1.5vw;">英國藍開斯特大學社會學博士</span>
        <span style="width:31.875vw;">流行音樂研究、青年文化與政策、文化經濟學、當代批判理論、社會科學質性研究</span>
      </div>
      <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">黃建宏</span>
        <span style="width:11vw; margin-right:1.5vw;">台北藝術大學美術系副教授</span>
        <span style="width:20vw; margin-right:1.5vw;">巴黎第八大學哲學所美學組博士</span>
        <span style="width:31.875vw;">哲學、電影研究、當代藝術思潮</span>
      </div>
      <div class="name_block" style="width:71.875vw; display: inline-flex; margin-top: 1.25vh; margin-bottom: 1.25vh;">
        <span style="width:10.5vw; margin-right:1.5vw;">方天賜</span>
        <span style="width:11vw; margin-right:1.5vw;">清華大學兼任助理教授</span>
        <span style="width:20vw; margin-right:1.5vw;">倫敦政治經濟學院國際關係博士</span>
        <span style="width:31.875vw;">國際關係、印度研究</span>
      </div> -->
      </div>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->