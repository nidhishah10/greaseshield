<?php
// Exit if accessed directly
if (!defined("ABSPATH")) {
    exit();
}
/**
 * Parking Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Grease Shield
 * @since 1.0
 */

function get_theme_domain()
{
    return "greaseshield";
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greaseshield_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/herb-and-water
     * If you're building a theme based on Parking Systems, use a find and replace
     * to change 'herb-and-water' to the name of your theme in all the template files.
     */
    load_theme_textdomain("greaseshield");
    // Add default posts and comments RSS feed links to head.
    add_theme_support("automatic-feed-links");
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support("post-thumbnails");
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support("html5", ["comment-form", "contact-from"]);
    // Set the default content width.
    $GLOBALS["content_width"] = 525;
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus([
        "main-menu" => __("Main Menu", get_theme_domain()),

        "footer-menu" => __("Footer Menu ", get_theme_domain()),
    ]);
    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
      */
    add_editor_style(["css/editor-style.css"]);
    //add_theme_support( 'woocommerce' );
}

add_action("after_setup_theme", "greaseshield_setup");

/**
 * Enqueues scripts and styles.
 */

function greaseshield_scripts()
{
    // Theme swiper Stylesheet

    

   /* wp_enqueue_style(
        "greaseshield-owl-theme-style",
        get_theme_file_uri("css/vendor/owl.theme.default.min.css"),
        [],
        rand()
    );*/

    // Theme Main Stylesheet
    wp_enqueue_style(
        "greaseshield-style",
        get_theme_file_uri("css/style.css"),
        [],
        rand()
    );

    // Theme Responsive Stylesheet
    wp_enqueue_style(
        "greaseshield-responsive-style",
        get_theme_file_uri("css/responsive.css"),
        [],
        rand()
    );


    wp_enqueue_style(
        "greaseshield-icons-style",
        get_theme_file_uri("css/vendor/icons.css"),
        [],
        rand()
    );


    wp_enqueue_style(
        "greaseshield-owl-min-style",
        get_theme_file_uri("css/vendor/owl.carousel.min.css"),
        [],
        null
    );


    wp_enqueue_style(
        "greaseshield-sal-style",
        get_theme_file_uri("css/vendor/sal.css"),
        [],
        rand()
    );


    wp_enqueue_style(
        "greaseshield-lightcase-style",
        get_theme_file_uri("css/vendor/lightcase.css"),
        [],
        rand()
    );

    // Theme Normalize Stylesheet
    //wp_enqueue_style( 'quest-audio-normalize-style', get_theme_file_uri('css/normalize.css'), array(), rand() );

    //check is not admin

    if (!is_admin()) {
        //Unload WP default jQuery

        wp_deregister_script("jquery");

        //Load jquery

        wp_register_script(
            "jquery",
            get_theme_file_uri("js/vendor/jquery.js"),
            [],
            null,
            true
        );

        wp_enqueue_script("jquery");
    } //Endif

    // Owl Script File
    wp_enqueue_script(
        "greaseshield-owl-script",
        get_theme_file_uri("js/vendor/owl.carousel.min.js"),
        [],
        null,
        true
    );

    // Lightcase Script File
    wp_enqueue_script(
        "greaseshield-lightcase-script",
        get_theme_file_uri("js/vendor/lightcase.js"),
        [],
        null,
        true
    );


    /*wp_enqueue_script(
        "greaseshield-jqui-script",
        get_theme_file_uri("js/vendor/jquery-ui.js"),
        [],
        null,
        true
    );*/


    wp_enqueue_script(
        "greaseshield-sal-script",
        get_theme_file_uri("js/vendor/sal.js"),
        [],
        null,
        true
    );

    // Stickyfill Script File
    wp_enqueue_script(
        "greaseshield-stickyfill-script",
        get_theme_file_uri("js/vendor/stickyfill.min.js"),
        [],
        null,
        true
    );

    // Theme Main Script File
    wp_enqueue_script(
        "greaseshield-general-script",
        get_theme_file_uri("js/general.js"),
        [],
        rand(),
        true
    );


   
}

add_action("wp_enqueue_scripts", "greaseshield_scripts");

//Add acf option for the theme

if (function_exists("acf_add_options_page")) {
    acf_add_options_page(); //Options Page
} //endif

if (!function_exists("greaseshield_add_favicon")):


    function greaseshield_add_favicon()
    {
        $favicom = get_field("favicon_icon", "option")
            ? get_field("favicon_icon", "option")
            : get_theme_file_uri("/images/favicon.ico");

        echo '<link rel="shortcut icon" href="' . $favicom . '" />';
    }
    add_action("login_head", "greaseshield_add_favicon");
    add_action("admin_head", "greaseshield_add_favicon");
    add_action("wp_head", "greaseshield_add_favicon");
endif; //endif

/**

 * Add Body class for logged in admin

 */

add_filter("body_class", "greaseshield_admin_body_class");

function greaseshield_admin_body_class($classes)
{
    $user = wp_get_current_user();

    if (current_user_can("administrator")) {
        $classes[] = "admin-logged-in"; // your custom class name
    }

    if (!is_page("home")) {
        $classes[] = "inner-page";
    }

    //return $classes;

    return $classes;
}

if (!function_exists("greaseshield_mime_types")):
    /**

 * Mime Types

 **/

    function greaseshield_mime_types($mimes)
    {
        $mimes["svg"] = "image/svg+xml";

        return $mimes;
    }

    add_filter("upload_mimes", "greaseshield_mime_types");
endif; //endif


add_filter('nav_menu_css_class' , 'greaseshield_nav_class' , 10 , 2);

function greaseshield_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

/*function modify_product_cat_query($query)
{
    if (is_post_type_archive("blog")) {
        $query->set("posts_per_page", 6);
    }
}

add_action("pre_get_posts", "modify_product_cat_query");*/



/**
 * ACF Load More Repeater
*/

// add action for logged in users
add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
// add action for non logged in users
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more() {
    // validate the nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
        exit;
    }
    // make sure we have the other values
    if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
        return;
    }
    $show = 8; // how many more to show
    $start = $_POST['offset'];
    $end = $start+$show;
    $post_id = $_POST['post_id'];
    // use an object buffer to capture the html output
    // alternately you could create a varaible like $html
    // and add the content to this string, but I find
    // object buffers make the code easier to work with
    ob_start();
    if (have_rows('products', $post_id)) {
        $total = count(get_field('products', $post_id));
        $count = 0;
        while (have_rows('products', $post_id)) {
            the_row();
            $prod_count = 0;
            if ($count < $start) {
                // we have not gotten to where
                // we need to start showing
                // increment count and continue
                $count++;
                continue;
            }
            ?>

             <?php $demo_product_title = get_sub_field('product_title'); 
             $string = str_replace(' ', '', $demo_product_title); 
           ?>
            <div class="multiple-product-block">
                <?php $button_popup_class = get_field('button_popup_class');
                      $button_popup_data_rel = get_field('button_popup_data_rel'); ?>
              <img src="<?php the_sub_field('product_image'); ?>" alt="ast-pf" width="186" height="124" />
                <h5><?php echo $demo_product_title; ?></h5>
                <p>
                  <?php echo the_sub_field('product_content'); ?>
                </p>
                <a href="" class="button poptrigger" data-rel="<?php echo $string .$prod_count; ?>"><?php echo the_sub_field('product_button_name'); ?></a>
                 <div class="popouterbox" id="<?php echo $string .$prod_count; ?>">
              <div class="popup-block">
               
                <a href="#" class="close-dialogbox"></a>
                <div class="pop-contentbox">
               <?php 
                   
               if( have_rows('icon_data') ): 
                
                ?>
                  <ul class="product-icons-row">
                  <?php while( have_rows('icon_data') ) : the_row();
                  $icon_image = get_sub_field('icon_image');
                      $download_link = get_sub_field('icon_url'); ?>
                      <li>
                      <a href="<?php echo $download_link; ?>" download>
                        <figure>
                            <img src="<?php echo $icon_image; ?>" alt="product-icon">
                        </figure>
                      </a>
                    </li>
                   <?php endwhile; ?>
                  </ul>
					<?php else: ?>
					<p>No Data Found</p>
                <?php endif; ?>
                 
                </div>
              </div><!--/.popup-block -->
            </div> 
            </div>


            <?php 
            $count++;
            if ($count == $end) {
                // we have shown the number, break out of loop
                break;
            }
        } // end while have rows
    } // end if have rows
    $content = ob_get_clean();
    // check to see if we have shown the last item
    $more = false;
    if ($total > $count) {
        $more = true;
    }
    // output our 3 values as a json encoded array
    echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
    exit;
} // end function my_repeater_show_more

