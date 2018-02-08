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
    add_settings_section("section", "Section test 0208", null, "demo");
    add_settings_field("demo-radio", "Demo Radio Buttons", "demo_radio_display", "demo", "section");
    register_setting("section", "demo-radio");
}

function demo_radio_display()
{
   ?>
        <input type="radio" name="demo-radio" value="1" <?php checked(1, get_option('demo-radio'), true); ?>>1
        <input type="radio" name="demo-radio" value="2" <?php checked(2, get_option('demo-radio'), true); ?>>2
   <?php
}

add_action("admin_init", "demo_settings");

function demo_page()
{
  ?>
      <div class="wrap">
         <h1>Demo test 0208</h1>

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









function save_my_custom_meta_box($post_id,  $post, $update)/*$post contains info about the post and $post_id is assigned to the id of the post*/
{
    /* Verify the nonce before proceeding. For security */
    if (!isset($_POST["qnimate-email-nonce"]) || !wp_verify_nonce($_POST["qnimate-email-nonce"], basename(__FILE__)))
      return $post_id;

    /* Check if the current user has permission to edit the post. For security */
    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    //check if it is autosave
    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    //check if the post type is correct
    $slug = "post";
    if($slug != $post->post_type)
        return;


    /* Store the user enter value in a variable */
    $user_entered_email_value = "";
    if(isset($_POST["author-email"]))
    {
        $user_entered_email_value = $_POST["author-email"];
    }
    else
    {
        $user_entered_email_value = "";
    }
    update_post_meta($post_id, "author-email", $user_entered_email_value);
}


function meta_box_markup($object)/*$object conatins the information about the post*/
{
    /*nonce for security purpose. more on it at http://codex.wordpress.org/WordPress_Nonces */
    wp_nonce_field(basename(__FILE__), 'qnimate-email-nonce');

    ?>
        <!-- Markup inside the custom meta box -->
        <div>
            <label for="author-email">E-Mail Of Author</label>
            <!-- Retrieve the email from database. If not yet set then empty string is returned. -->
            <input name="author-email" type="email" validate="true" value="<?php echo get_post_meta($object->ID, "author-email", true); ?>">
        </div>
    <?php
}

function my_custom_meta_box()
{
    /*
    Parameters for add_meta_box() are $id, $title, $callback, $page, $context, $priority, $callback_args
    -> $id is a unqiue id given to every meta box
    -> $title is the title displayed in custom meta box
    -> $callback is a function that outputs markup inside the custom meta box
    -> $page respresents the admin page on which the mata box will be displayed on. It can be page, post, custom post type
    -> $context respresents the postiton of the meta box. It can be normal, advanced or side.
    -> $priority is the position of the box insde the context. It can be high, core, default or low
    -> $cannback_args is used to pass arguements to the callback function.
    */
    add_meta_box("qnimate-meta-box", "Author Information", "meta_box_markup", "post", "normal", "default", null);
}

/* This action is responsibe for creating and displaying meta boxes */
add_action("add_meta_boxes", "my_custom_meta_box");

/* Used to store the meta data in database */
add_action("save_post", "save_my_custom_meta_box", 10, 3);
