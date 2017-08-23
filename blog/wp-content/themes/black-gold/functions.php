<?php

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*         REQUIRED FILES
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

// Allows utilization of the Bootstrap 3.0 menu structure for a single
// dropdown level
if ( ! class_exists( 'wp_bootstrap_navwalker' ) ) {
    require_once ( get_template_directory() . '/includes/wp-bootstrap-navwalker.php' );
}

// Provides the code necessary to set up our settings, controls 
// and sections for customizing our theme
require_once( get_template_directory() . '/includes/customizer.php' );

/*
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
 *         THEME SETUP
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
 *
 *   Sets up the theme defaults and registers support for various WordPress
 *   features.
 *
 *   Note that this function is hooked into the after_setup_theme hook, which runs
 *   before the init hook. The init hook is too late for some features, such as indicating
 *   support post thumbnails.
 *
*/
function blackgold_setup_theme() {

    // Configuration options for custom header
    $header_defaults = array(
        'default-image' => get_template_directory_uri() . '/images/sam.jpg',
        'height' => 700,
        'width' => 1024,
        'uploads' => true,
        'header_text' => true,
        'default-text-color' => 'c9bab0',
        'wp-head-callback' => 'blackgold_style_header',
    );

    $custom_background = array( 
        'default-color' => 'fcfcfc',
    );

    // Since V4.1, WordPress uses add_theme_support for supporting title tags
    add_theme_support( "title-tag" );
    // Since V3.1, WordPress uses add_theme_support for custom headers
    add_theme_support( 'custom-header', $header_defaults );
    // Since V3.4, WordPress uses add_theme_support for custom backgrounds
    add_theme_support( 'custom-background', $custom_background );
    // Since V2.9, WordPress uses add_theme_support for post thumbnails
    add_theme_support( 'post-thumbnails' );
    // Since V3.0, WordPress uses add_theme_support for automatic feed links
    add_theme_support( 'automatic-feed-links' );
    // Allow for partial refreshes of widgets in sidebars 
    add_theme_support( 'customize-selective-refresh-widgets' );

    load_theme_textdomain( 'black-gold',  get_template_directory() . '/languages/' );

}


add_action( 'after_setup_theme', 'blackgold_setup_theme' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*         THEME CUSTOMIZER
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

add_action( 'customize_register', 'blackgold_customize_register' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*          CALLBACKS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/
/*
*   Callback function for updating header styles
*   Responsible for styling the applied header image
*   and selected header text color.
*/
function blackgold_style_header() {
    
    // get users selected text color
    $text_color = get_header_textcolor();

    ?>
    <style type="text/css">
        header {
            <?php if( get_header_image() != "" ) : ?>
                background: url( '<?php echo esc_url( header_image() ); ?>' ) no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: top;
            <?php endif; ?>
        }
        .blackgold-heading-box h1 {
            color: #<?php echo esc_attr( $text_color ); ?>;
        }
    </style>
    <?php 
}


/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*      SANITATION CALLBACKS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

/*
*   
*   Ensure that the value received from our select dropdown 
*   corresponds to a suitable value.
*
*/
function blackgold_sanitize_select( $input, $setting ) {
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    $choice = intval( $input );

    if ( $choice >= 0 && $choice <= sizeof( $control->choices ) ) {
        return $choice;
    } else {
        return 0;
    } 
}

/*
*   Ensure that the value received from our checkboxes
*   correspond to a suitable value.
*/
function blackgold_sanitize_option( $input ) {
    if( $input == 'true' )
        return 1;
    else 
        return 0;
}

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*             MENUS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*
*   Registers custom Navigation Menus for use in the custom menu editor,
*   allowing administration users to create custom menus.
*/
function blackgold_register_menus() {
    register_nav_menu( 'main_menu', __( 'Main Menu', 'black-gold' ) );
}

add_action( 'init', 'blackgold_register_menus' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*            WIDGETS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*
*   Registers sidebars for use in the custom widgets editor,
*   allowing administration users to add & remove widgets from
*   each respective sidebar.
*
*/
function blackgold_register_widgets() {

    // Register the Home Sidebar
    register_sidebar( array(
        'name' => __( 'Home Sidebar', 'black-gold' ),
        'id' => 'home_sidebar',
        'description' => __( 'The sidebar showcased on the main area of your screen', 'black-gold'),
        'before_widget' => '<div class="blackgold-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    // Register the Footer Sidebar
    register_sidebar( array(
        'name' => __( 'Footer Sidebar', 'black-gold' ),
        'id' => 'footer_sidebar',
        'description' => __( 'The sidebar positioned in the footer at the bottom of the screen', 'black-gold' ),
        'before_widget' => '<div class="col-md-4"><div class="blackgold-widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
} 

add_action( 'widgets_init', 'blackgold_register_widgets' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*          EDITOR STYLE
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*   
*   Adds the editor style for control over the appearance
*   of your content in the TinyMCE visual editor.   
*
*/
function blackgold_add_editor_style() {
    add_editor_style( 'https://fonts.googleapis.com/css?family=Andada&subset=latin-ext' );
    add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}

add_action( 'after_setup_theme', 'blackgold_add_editor_style' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*       RETRIEVE CSS & JS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*
*   Enqueue external scripts and styles to prevent plugin
*   conflicts. Scripts and styles are enqueued using the wp_enqueue_scripts
*   action hook
*
*/
function blackgold_load_css() {
    /* Third Party CSS */
    // >>> Bootstrap CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    // >>> Font-Awesome CSS
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );

    // >>> Custom CSS
    wp_enqueue_style( 'black-gold-main-css', get_stylesheet_uri() );
}

function blackgold_load_js() {
    /* Third Party JS */
    
    // >>> Bootstrap
    wp_enqueue_script( 'bootstrap-js', 
        get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ),
        '', true );

    // >>> HTML 5 Shiv
    wp_enqueue_script( 'html5-js', get_template_directory_uri() . '/js/html5.js' );
    wp_script_add_data( 'html5-js', 'conditional', 'lt IE 9' );

    // >> Customizer JS
    if( is_customize_preview() ) {
        wp_enqueue_script( 'black-gold-customizer-js', get_template_directory_uri() . '/js/customizer.js', 
                        array( 'jquery' ), '', true );
    }
    
    // >> Comments JS
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }
}

function blackgold_inline_styles() {

    $site_title_color = get_theme_mod( 'site_title_color' );
    $header_box_color = get_theme_mod( 'header_box_color', '#151e1f' );
    $header_title_shadow_color = get_theme_mod( 'header_title_shadow_color', '#151e1f' );

    $custom_inline_style = '.blackgold-logo.navbar-brand { color: ' . esc_attr( $site_title_color ) . '; }';
    $custom_inline_style .= '.blackgold-heading-box { background-color: ' . esc_attr( $header_box_color ) . '; }';
    $custom_inline_style .= '.blackgold-heading-box h1 { text-shadow: 3px 3px 1px ' . esc_attr( $header_title_shadow_color ) . '; }';
    wp_add_inline_style( 'black-gold-main-css', $custom_inline_style );

}

function blackgold_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Andada|Dancing+Script:400,700', null, null );
}

function blackgold_load_scripts() {
    blackgold_google_fonts();
    blackgold_load_css();
    blackgold_inline_styles();
    blackgold_load_js();
}

add_action( 'wp_enqueue_scripts', 'blackgold_load_scripts' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*         CONTENT WIDTH
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*   
*   Sets the maximum allowed width for any of the content
*   improving plugin integration.
*
*/
if ( ! isset( $content_width ) ) $content_width = 960;

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*            FILTERS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

/*
*   Alters the default form elements displayed
*   in the comments section by modiyfing the existing markup
*   defined by WordPress.   
*/
function blackgold_comment_form_defaults( $fields ) {

    $submit_button_value = __( 'Post Comment', 'black-gold' );

    // Add the Bootstrap Form Control class
    $fields['comment_field'] = '<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>';

    // Add a custom class to the submit button
    $fields['submit_button'] = sprintf( '<input name="submit" class="blackgold-btn-dark-small" type="submit" id="submit" class="submit" value=\'%s\'>', $submit_button_value );
    
    return $fields;
}

add_filter( 'comment_form_defaults', 'blackgold_comment_form_defaults' );

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*        CUSTOM FUNCTIONS
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

/*
*   Applies the respective classes to available
*   pages, as well as the currently selected
*   page item for wp_link_pages.
*/
function blackgold_wp_link_pages( ) {

    $defaults = array(
        'before' => '<div class="nav-links">',
        'after' => '</div>',
        'pagelink' => '%',
        'separator' => '',
        'echo' => 0,
    );

    $link_pages = wp_link_pages( $defaults );
    $link_pages = str_replace('<a ', '<a class="page-numbers"', $link_pages);
    $link_pages = preg_replace('/((?:a>)|(?:> ))(\d+)(<)/', 
        "$1<span class='page-numbers current'>$2</span>$3", $link_pages);

    echo $link_pages;
}
