
<?php
function template_is($pageName='') {
    return is_page_template('page-templates/template-'.$pageName.'.php');
}

$translate = qtranxf_getLanguage()!='zh' ? true : false;

register_nav_menu('top-navbar', __('Main menu', 'bst'));


function custom_button_example($wp_admin_bar){
$args = array(
'id' => 'custom-button',
'title' => 'Custom Button',
'href' => 'http://example.com/',
'meta' => array(
'class' => 'custom-button-class'
)
);
$wp_admin_bar->add_node($args);
}

add_action('admin_bar_menu', 'custom_button_example', 50);

/**
 * Filter the upload size limit for non-administrators.
 *
 * @param string $size Upload size limit (in bytes).
 * @return int (maybe) Filtered size limit.
 */
function filter_site_upload_size_limit( $size ) {
    // Set the upload size limit to 10 MB for users lacking the 'manage_options' capability.
    if ( ! current_user_can( 'manage_options' ) ) {
        // 10 MB.
        $size = 1024 * 10000;
    }
    return $size;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );

function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.jpg);
          float: right;
          height:153px;
      		width:320px;
      		background-size: 320px 153px;
      		background-repeat: no-repeat;
        	/* padding-bottom: 30px; */
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
 echo 'Institute of Social Research and Cultural Studies, NCTU | &copy;'.date("Y");
}
add_filter('admin_footer_text', 'custom_dashboard_footer');



/*練習新增radiobutton*/
function demo_settings()
{
    add_settings_section("section", "海報button test 0225", null, "demo");
    add_settings_field("radiobutton-test", "Demo Radio Buttons", "demo_radio_display", "demo", "section");
    register_setting("section", "radiobutton-test");
}

function demo_radio_display()
{
   ?>
        <input type="radio" name="radiobutton-test" value="1" <?php checked(1, get_option('radiobutton-test'), true); ?>>活動網頁
        <input type="radio" name="radiobutton-test" value="2" <?php checked(2, get_option('radiobutton-test'), true); ?>>線上報名
   <?php
}

add_action("admin_init", "demo_settings");

function demo_page()
{
  ?>
      <div class="wrap">
         <h1>radiobutton test</h1>

         <form method="post" action="options.php">
            <?php
               settings_fields("section");

               do_settings_sections("demo");

               submit_button();
            ?>
         </form>
      </div>
   <?php
}

function menu_item()
{
  add_submenu_page("options-general.php", "Demo", "Demo", "manage_options", "demo", "demo_page");
}

add_action("admin_menu", "menu_item");
/*練習新增radiobutton*/




/*02/25 customize register*/

add_action('customize_register', 'my_customize_reg');

function my_customize_reg($wp_customize){

  // setting
  $wp_customize->add_setting('hide_button_reg',array(
    'default'    => 0,
		'transport'  => 'postMessage'
  ));

  $wp_customize->add_setting('hide_button_web',array(
    'default'    => 0,
		'transport'  => 'postMessage'
  ));

  // control
  $wp_customize->add_control( 'hide_button_reg', array(
		'label'      => 'Hide Button (隱藏線上報名)',
		'section'    => 'title_tagline',
		'settings'   => 'hide_button_reg',
		'type'       => 'checkbox',
		'priority'   => 40,
	));

  $wp_customize->add_control( 'hide_button_web', array(
		'label'      => 'Hide Button (隱藏活動網頁)',
		'section'    => 'title_tagline',
		'settings'   => 'hide_button_web',
		'type'       => 'checkbox',
		'priority'   => 40,
	));
}

/* Customize Script */
add_action( 'customize_preview_init', 'my_customize_script' );

/* Customizer: Enqueue Script */
function my_customize_script(){
	wp_enqueue_script( 'my-customizer-js', get_stylesheet_directory_uri() . '/js/customizer.js', array( 'jquery', 'customize-preview' ), '0.1.0', true );
}

/* Body Class */
add_filter( 'body_class', 'my_body_class' );

/* Add Body Class */
function my_body_class( $classes ){
	if( get_theme_mod( 'hide_button_reg' ) ){
		$classes[] = 'hide_button_reg';
	}
  else if( get_theme_mod( 'hide_button_web' ) ){
		$classes[] = 'hide_button_web';
	}
	return $classes;
}
