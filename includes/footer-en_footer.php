<?php
    $GLOBALS['q_config']['language'] = 'en';
?>
<footer class="site-footer">


	<div class="dynamic-footer">
    </?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
<!--
  <div class="page-footer">
		<link rel="stylesheet" href="</?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
    <p>&copy; </?php echo date('Y'); ?> <a href="</?php echo home_url('/'); ?>"></?php bloginfo('name'); ?></a></p>
  </div>
-->



	<div class="footer">
		<div class="footer_left">
			<div class="footer_margin">
				<div class="footer_text1">
					<ol class="v">
						<li>NCTU</li>
						<li>Web Navigation</li>
						<li>Old Version Website</li>
						<li>Design Guidelines</li>
						<li>Copyright Statement</li>
					</ol>
				</div>
				<div class="footer_text2">
					<ol class="v">
						<li id="school" style="font-size: 1.3em; font-weight: 400;">交通大學</li>
						<li id="graduate-school" style="font-weight: 400; font-size: 1.3em;">社會與文化研究所</li>
					</ol>
					
				</div>
				<div class="footer_text3">
					<ol class="v">
						<li>Tel - 03 - 5131593</li>
						<li>Fax - 03 - 5734450</li>
						<li>assistant 洪慧芳小姐</li>
						<li>30010 1001 University road, Hsinchu, Taiwan 300, ROC, Room 212, HA Building 2, NCTU</li>
						<li>Copyright Any form of reprint, please contact the National Institute of Network and Communication Institute Webpage Production Team</li>
					</ol>
				</div>
				<div class="footer_icons" style="margin-top: -6vh; margin-left: 86vw;width: 8vw;">
					<div class="icons_block" style="    width: 8vw;">
						<a  class="icons icons_facebook" href="<?php echo site_url(); ?>/aboutus"></a>
						<a  class="icons icons_instagram" href="<?php echo site_url(); ?>/aboutus"></a>
					</div>
					<!-- <div class="icons_block" style="    width: 8vw;">
						<a  class="icons icons_twitter" href="<?php echo site_url(); ?>/aboutus"></a>
						<a  class="icons icons_twitter" href="<?php echo site_url(); ?>/aboutus"></a>
					</div>
					<div class="icons_block" style="    width: 8vw;">
						<a  class="icons icons_blogger" href="<?php echo site_url(); ?>/aboutus"></a>
						<a  class="icons icons_gallery" href="<?php echo site_url(); ?>/aboutus"></a>
					</div> -->
				</div>
			</div>

		</div>
		<div class="footer_right">
		</div>
	</div>

</footer>

</?php wp_footer(); ?>
</body>
</html>
