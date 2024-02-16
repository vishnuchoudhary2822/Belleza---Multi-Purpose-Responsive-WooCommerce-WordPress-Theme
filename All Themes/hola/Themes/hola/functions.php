<?php
/**
 * hola functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hola
 */

if (!function_exists('hola_setup')): /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 

    function hola_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on hola, use a find and replace
         * to change 'hola' to the name of your theme in all the template files.
         */
        load_theme_textdomain('hola', get_template_directory() . '/languages');
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'hola')
        ));

        register_nav_menus(array(
            'top-nav' => esc_html__('Top Nav', 'hola')
        ));
        
        // Register Custom Navigation Walker
        require_once('wp_bootstrap_navwalker.php');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));
        
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('hola_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => ''
        )));
        
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add styles to the WP editor
        add_editor_style( 'css/editor-style.css' );
    }
endif;
add_action('after_setup_theme', 'hola_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hola_content_width()
{
    $GLOBALS['content_width'] = apply_filters('hola_content_width', 640);
}
add_action('after_setup_theme', 'hola_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hola_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'hola'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'hola'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    
    /*--------------------- Custom Widgets ------------------------*/
    
    register_sidebar(array(
        'name' => esc_html__('Logo & Address', 'hola'),
        'id' => 'footer-1',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => esc_html__('Social Icons & Email', 'hola'),
        'id' => 'footer-2',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Top-Bar-Left', 'hola'),
        'id' => 'top-bar',
        'description' => esc_html__('Appears in the Top-Bar', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'hola'),
        'id' => 'shop-footer-1',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'hola'),
        'id' => 'shop-footer-2',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'hola'),
        'id' => 'shop-footer-3',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'hola'),
        'id' => 'shop-footer-4',
        'description' => esc_html__('Appears in the footer area', 'hola'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar', 'hola'),
        'id' => 'shop-sidebar',
        'description' => esc_html__('Add widgets here.', 'hola'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Theme Feature', 'hola'),
        'id' => 'theme-feature',
        'description' => esc_html__('Add widgets here.', 'hola'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    
}
add_action('widgets_init', 'hola_widgets_init');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load Google Fonts file.
 */
require get_template_directory() . '/inc/google_fonts.php';
/**


/**
 * Enqueue scripts and styles.
 */


function hola_google_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'hola' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open+Sans|Oswald:300i,300,400,400italic,600,600i,700italic,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function hola_scripts()
{
    
    /* hola Theme CSS & JS */
    
    /* Bootstrap core CSS */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css');
    
    /* Custom Fonts */
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    
    /* FlexSlider CSS file */
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/vendor/woocommerce-FlexSlider/flexslider.css');
    
    /* Theme CSS */
    wp_enqueue_style('hola-default-theme-style', get_template_directory_uri() . '/css/default-theme-style.css');
    wp_enqueue_style('google-fonts-family', hola_google_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('hola-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('hola-custom', get_template_directory_uri() . '/css/custom.css');

   
    wp_enqueue_style( 'custom-woocommerce-style', get_template_directory_uri() . '/css/custom-woocommerce.css' );


    if(get_the_ID() == 1825){
    wp_enqueue_style('hola-custom-base', get_template_directory_uri() . '/css/custom-base.css');
    }
    /* Default CSS */
    wp_enqueue_style('style', get_stylesheet_uri());


    //hola css
    wp_enqueue_style( 'hola-default-at', get_template_directory_uri() . '/css/default-at-style.css');
    //wp_enqueue_style('hola-stylesheet', 'http://multipurposethemes.com/wordpressdemo/hola/wp-content/themes/hola/style.css');
    wp_enqueue_style('hola-stylesheet', get_template_directory_uri() . '/css/hola-style.css');

    // Add Multipurpose js
   //wp_enqueue_script( 'hola-customjs', get_stylesheet_directory_uri() . '/js/multipurpose.js');

    /* Just for debugging purposes. Don't actually copy these 2 lines! */
    wp_enqueue_script('emulation', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', array(), '', true);
    
    /* IE10 viewport hack for Surface/desktop Windows 8 bug */
    wp_enqueue_script('ie10', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array(), '', true);
    
    /* jQuery  */
    wp_register_script('jquery-core', '/wp-includes/js/jquery/jquery.js', array(), '', true);
    wp_enqueue_script('jquery-core');

    wp_register_script('jquery-migrate', '/wp-includes/js/jquery/jquery-migrate.js', array(), '', true);
    wp_enqueue_script('jquery-migrate');


    //navigation js
   wp_enqueue_script( 'hola-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );    
    
    /* Bootstrap Core JavaScript */
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '', true);
    
    /* Plugin JavaScript */
    wp_enqueue_script('easing', get_template_directory_uri() . '/vendor/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '', true);
    wp_enqueue_script('hola-scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array(), '', true);
    
    /* Theme JavaScript */
    wp_enqueue_script('hola-theme', get_template_directory_uri() . '/js/theme.js', array(), '', true);

    /* Theme retinajs */
    wp_enqueue_script('retinajs', get_template_directory_uri() . '/js/retina.js', array(), '', true);
       
    /* FlexSlider Js*/
    wp_enqueue_script('flexSlider', get_template_directory_uri() . '/vendor/woocommerce-FlexSlider/jquery.flexslider.js', array(), '', true);
    
    /* Skip Link Focus Js*/
    wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true);
    

    /* woocommerce quantity js Js*/
    wp_enqueue_script('wc-quantity-increment', get_template_directory_uri() . '/js/wc-quantity-increment.js', array(), '', true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'hola_scripts');

function hola_scripts_footer()
{
    wp_enqueue_script('hola-js');
}
add_action('wp_footer', 'hola_scripts_footer');


/* Theme Options 

function hola_add_theme_menu_item()
{
    add_theme_page("Theme Options", "Theme Options", "manage_options", "theme-panel", "hola_theme_settings_page", null, 99);
}

add_action("admin_menu", "hola_add_theme_menu_item");

function hola_theme_settings_page()
{
?>
       <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
    settings_fields("section");
    do_settings_sections("theme-options");
    submit_button();
?>          
        </form>
        </div>
    <?php
}

function hola_logo_display()
{
?>
       <input type="file" id="logo" name="logo"/><br/>
        <img src="<?php
    echo get_option('logo');
?>" />
   <?php
}

function hola_handle_logo_upload()
{
    if (!empty($_FILES["logo"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["logo"], array(
            'test_form' => FALSE
        ));
        if ($urls["error"]) {
            return $urls["error"];
        }
        $temp = $urls["url"];
        return $temp;
    }
    return get_option('logo');
}


function hola_change_font()
{
    $load_fonts = hola_google_fonts();
    $fonts      = '<select name="change_font" id="change_font" style="width:150px;">';
    $fonts .= '<option value="">Default</option>';
    foreach ($load_fonts as $font_name => $font_value) {
        $selected = ($font_value == get_option('change_font')) ? 'Selected' : '';
        $fonts .= '<option value="' . $font_value . '" ' . $selected . '>' . $font_name . '</option>';
    }
    $fonts .= '</select>';
    
    return print($fonts);
}

function hola_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");
    
    add_settings_field("change_font", "Google Font Family", "hola_change_font", "theme-options", "section");
    add_settings_field("logo", "Top Menu Logo", "hola_logo_display", "theme-options", "section");
    
    register_setting("section", "change_font");
    register_setting("section", "logo", "hola_handle_logo_upload");
}

add_action("admin_init", "hola_theme_panel_fields");

*/
/**
 * Theme Options
 */

if (!function_exists('hola_get_google_fonts')):
    function hola_get_google_fonts()
    {
        
        $theme_font_family = (get_option('change_font') != '') ? get_option('change_font') : '';
        if (!empty($theme_font_family)) {
            $google_family = str_replace('+', ' ', $theme_font_family); // make ready for query string
            $protocol      = is_ssl() ? 'https' : 'http';
            $subsets       = 'latin,latin-ext';
            $query_args    = array(
                'family' => $theme_font_family
            );
            wp_enqueue_style('google-font-' . sanitize_key($google_family), add_query_arg($query_args, "$protocol://fonts.googleapis.com/css"), array(), null);
        }
    }
endif;
add_action('wp_enqueue_scripts', 'hola_get_google_fonts');

function hola_theme_options(){
    $custom_css        = "";
    $theme_font_family = (get_option('change_font') != '') ? get_option('change_font') : '';
    if ($theme_font_family == ''):
        $google_family = "'Oswald', sans-serif;";
        
    else:
        $google_family = str_replace('+', ' ', $theme_font_family);
        $custom_css .= "
                body { 
                    font-family: {$google_family} !important;
                }
                ";
    endif;
       
    /* Custom CSS */
	//wp_enqueue_style('hola-custom-style', get_template_directory_uri() . '/css/custom.css');
    wp_add_inline_style('hola-custom-style', $custom_css);
    
}
add_action('wp_enqueue_scripts', 'hola_theme_options');

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
	    add_theme_support( 'woocommerce' );
}

add_theme_support( 'wc-product-gallery-zoom' );
//add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'wc-product-gallery-lightbox' );

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}


// Override theme default specification for product # per row
/*function loop_columns() {
return 3; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);
*/

add_filter( 'wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2 );
function my_wp_nav_menu_items( $items, $args, $ajax = false ) {
    // Top Navigation Area Only
    if ( ( isset( $ajax ) && $ajax ) || ( property_exists( $args, 'theme_location' ) && $args->theme_location === 'menu-1' ) ) {
        // WooCommerce
        if ( class_exists( 'woocommerce' ) ) {
            $css_class = 'menu-item menu-item-type-cart menu-item-type-woocommerce-cart';
            // Is this the cart page?
            if ( is_cart() )
                $css_class .= ' current-menu-item';
            $items .= '<li class="' . esc_attr( $css_class ) . '">';
                $items .= '<a class="cart-contents" href="' . esc_url( WC()->cart->get_cart_url() ) . '"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ';
                    $items .= wp_kses_data( WC()->cart->get_cart_total() ) . ' - <span class="count">' .  wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'hola' ), WC()->cart->get_cart_contents_count() ) ) . '</span>';
                $items .= '</a>';
            $items .= '</li>';
        }
        // Easy Digital Downloads
        else if ( class_exists( 'Easy_Digital_Downloads' ) ) {
            $css_class = 'menu-item menu-item-type-cart menu-item-type-edd-cart';
            // Is this the cart page?
            if ( edd_is_checkout() )
                $css_class .= ' current-menu-item';
            $items .= '<li class="' . esc_attr( $css_class ) . '">';
                $items .= '<a class="cart-contents" href="' . esc_url( edd_get_checkout_uri() ) . '"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ';
                    $items .= wp_kses_data( edd_cart_subtotal() ) . ' - <span class="count">' .  wp_kses_data( sprintf( _n( '%d item', '%d items', edd_get_cart_quantity(), 'hola' ), edd_get_cart_quantity() ) ) . '</span>';
                $items .= '</a>';
            $items .= '</li>';
        }
    }
    return $items;
}
/**
 * This function updates the Top Navigation WooCommerce cart link contents when an item is added via AJAX.
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'my_woocommerce_add_to_cart_fragments' );
function my_woocommerce_add_to_cart_fragments( $fragments ) {
    // Add our fragment
    $fragments['li.menu-item-type-woocommerce-cart'] = my_wp_nav_menu_items( '', new stdClass(), true );
    return $fragments;
}


add_filter( 'nav_menu_link_attributes', 'my_menu_atts', 10, 3 );
function my_menu_atts( $atts, $item, $args )
{
  // Provide the id of the targeted menu item
  $menu_target = 567;

  // inspect $item

  if ($item->ID == $menu_target) {
    // original post used a comma after 'modal' but this caused a 500 error as is mentioned in the OP's reply
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = '#myModal';
  }
  return $atts;
}

require_once get_template_directory() . '/inc/tgm-plugin-activation.php';


function custom_excerpt_length( $length ) {
    global $post;
    if ($post->post_type == 'post'){
    
        //$exceprt_lenght = get_options_data('blog', 'blog-excerpt-length');
        $exceprt_lenght = 60;
    
    return $exceprt_lenght;
    
    }
    
    if ($post->post_type == 'testimonial')
    return 15;
    else if ($post->post_type == 'portfolio')
    return 10;
 
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// add more link to excerpt

function hola_custom_excerpt_more($more) {
      global $post;
      if ($post->post_type == 'post'){
        // $readmore_text =  get_options_data('blog', 'blog-readmore-text');
      //    $readmore_value = '<a class="more-link" href="'. get_permalink($post->ID) . '">' . $readmore_text . '</a>';
      //    return   $readmore_value;
        return '';
       }
       else{
        return '';
       }
   }
   add_filter('excerpt_more', 'hola_custom_excerpt_more');
/*animated number counter script*/



/* +========================ot_theme_mode  Added By Dev8 on 15/09/2017===========================================*/
function hola_theme_file() {

	require_once( get_template_directory() . '/inc/hola-theme-option.php' );

}
add_action('wp_head', 'hola_theme_file');
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );


/**
 * Theme Options
 */
require( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );



add_action( 'init', 'custom_fix_thumbnail' );
 
function custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');
   
	function custom_woocommerce_placeholder_img_src( $src ) {
	$upload_dir = trailingslashit(get_template_directory_uri());
	//$uploads = untrailingslashit( $upload_dir['baseurl'] );
	$src = $upload_dir . 'images/no_product.png';
	 
	return $src;
	}
}


// Woocommerce rating stars always
    add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);

    function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }

    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
    }

/**
 * Page Options
 */
require( trailingslashit( get_template_directory() ) . 'inc/page_meta.php' );


function add_home_styles() {
    if ( is_page_template( 'page-templates/one-page.php' ) ) {
        wp_enqueue_style( 'home-style', get_template_directory_uri().'/css/onepage-style.css' , array() , 1.0 ,'(min-width:768px)');
        wp_enqueue_style( 'onepage-style', get_template_directory_uri().'/css/onepage.css');
    }
}
add_action( 'wp_footer', 'add_home_styles');

    
function add_home_scripts_styles() {
    if ( is_page_template( 'page-templates/one-page.php' ) ) {
        
        wp_enqueue_script( 'fullPage-js', get_template_directory_uri() . '/js/jquery.fullPage.js');
        wp_enqueue_script( 'home-script-js', get_template_directory_uri() . '/js/scripts.js' );   
    }   
}
add_action( 'wp_footer', 'add_home_scripts_styles');

/**
 * Megamenu Description
 */
function add_description_to_menu($item_output, $item, $depth, $args) {
    if (strlen($item->description) > 0 ) {
        // append description after link
        $item_output .= sprintf('<span class="menu-description">%s</span>', esc_html($item->description));

        // insert description as last item *in* link ($input_output ends with "</a>{$args->after}")
        //$item_output = substr($item_output, 0, -strlen("</a>{$args->after}")) . sprintf('<span class="description">%s</span >', esc_html($item->description)) . "</a>{$args->after}";
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);

/**
 * Demo Data Importer
 */

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'           => 'Hola',
      'categories'                 => array('Creative'),
      'import_file_url'            => 'http://html-templates.multipurposethemes.com/wordpress/themes/data/hola/demo-content.xml',
      'import_widget_file_url'     => 'http://html-templates.multipurposethemes.com/wordpress/themes/data/hola/widgets.wie',
      'import_customizer_file_url' => 'http://html-templates.multipurposethemes.com/wordpress/themes/data/hola/customizer.dat',
      'import_preview_image_url'   => 'http://html-templates.multipurposethemes.com/wordpress/themes/data/hola/screenshot.png',
      'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'maximum' ),
      'preview_url'                => 'http://creativewordpressthemes.multipurposethemes.com/hola/',
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );