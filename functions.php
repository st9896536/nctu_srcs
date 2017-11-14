<?php
function template_is($pageName='') {
    return is_page_template('page-templates/template-'.$pageName.'.php');
}

$translate = qtranxf_getLanguage()!='zh' ? true : false;

register_nav_menu('top-navbar', __('Main menu', 'bst'));

/*** Custom backend login logo ***/
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.jpg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*** Custom backend login url ***/
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*** Custom backend login logo text ***/
function my_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*** Custom backend footer ***/
function custom_dashboard_footer () {
 echo 'Office of International Affairs, NCTU | &copy;'.date("Y");
}
add_filter('admin_footer_text', 'custom_dashboard_footer');
