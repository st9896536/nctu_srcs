
<!--
<aside class="sidebar">
  </?php dynamic_sidebar('sidebar-widget-area'); ?>
</aside>
-->

<!--
<div class="sidebarmenu">
  <a id="currentpage" href="</?php echo site_url(); ?>/aboutus" class="sidebartext">關於本所</a>
  <a href="</?php echo site_url(); ?>/full-time-teacher" class="sidebartext">專任師資</a>
  <a href="</?php echo site_url(); ?>/adjunct-teacher" class="sidebartext">兼任師資</a>
  <a href="</?php echo site_url(); ?>/guest-professor" class="sidebartext">客座教授</a>
  <a href="</?php echo site_url(); ?>/administration-staff" class="sidebartext">行政人員</a>
  <a href="#" class="sidebartext">在校生</a>
  <a href="#" class="sidebartext">畢業生</a>
</div>
-->



<div class="sidebarmenu">

  </?php $URL=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  echo $URL;
  ?>
  <a <?php if ($URL=="<?php echo site_url(); ?>/aboutus") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/aboutus" class="sidebartext">關於本所</a>
  <a <?php if ($URL=="<?php echo site_url(); ?>/full-time-teacher") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/full-time-teacher" class="sidebartext">專任師資</a>
  <a <?php if ($URL=="<?php echo site_url(); ?>/adjunct-teacher") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/adjunct-teacher" class="sidebartext">兼任師資</a>
  <a <?php if ($URL=="<?php echo site_url(); ?>/guest-professor") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/guest-professor" class="sidebartext">客座教授</a>
  <a <?php if ($URL=="<?php echo site_url(); ?>/administration-staff") echo " id=\"currentpage\""; ?> href="<?php echo site_url(); ?>/administration-staff" class="sidebartext">行政人員</a>
  <a href="#" class="sidebartext">在校生</a>
  <a href="#" class="sidebartext">畢業生</a>
</div>

<head>
  <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $(".sidebarmenu a").click(function() {
              $(".sidebarmenu a").removeClass('active');
              $(".sidebartext").addClass('active');
          });
    });

  </script>
</head>
