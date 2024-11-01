<?php
// Register plugin style sheet.
add_action( 'wp_enqueue_scripts', 'wfnews_register_plugin_styles' );
function wfnews_register_plugin_styles() {
	wp_register_style('the_wfnews', WFNEWS_CSS_DIR .'the_wfnews.css');
	wp_enqueue_style( 'the_wfnews' );
}

// ! Rajdhani Font
function wfnews_fonts_rajdhani_url() {
$fonts_url = '';
 
/* Translators: If there are characters in your language that are not
* supported by Rajdhani, translate this to 'off'. Do not translate
* into your own language.
*/
$font = _x( 'on', 'Rajdhani font: on or off', 'wfnews');

$font_families = array();
 
if ( 'off' !== $font ) {
$font_families[] = 'Rajdhani:400,500,600,700';
}
 
$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext' ),
);
 
$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
 
return esc_url_raw( $fonts_url );
}

// ! Roboto Font
function wfnews_fonts_roboto_url() {
$fonts_url = '';
 
/* Translators: If there are characters in your language that are not
* supported by Roboto, translate this to 'off'. Do not translate
* into your own language.
*/
$font = _x( 'on', 'Roboto font: on or off', 'wfnews');

$font_families = array();
 
if ( 'off' !== $font ) {
$font_families[] = 'Roboto:400,500,600,700';
}
 
$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext' ),
);
 
$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
 
return esc_url_raw( $fonts_url );
}

// check fontawesome exists
add_action( 'wp_enqueue_scripts', 'wfnews_check_fontawesome_registration' );
if ( ! function_exists( 'wfnews_check_fontawesome_registration' ) ) {
    function wfnews_check_fontawesome_registration()
    {
        if (!(wp_style_is('fontawesome', $list = 'registered'))) {
            wp_register_style('fontawesome-5.8.1', plugins_url( 'the_wfnews/modules/fonts/font-awesome/css/fontawesome-all.min.css'), array(), '5.8.1', 'all');
            wp_enqueue_style('fontawesome-5.8.1'); //If -5.8.1 prefix is removed, then new fontawesome icons might not show in those themes which are using old versions of fontawesome library
        }
    }
}

// enquque bootstrap css
add_action( 'wp_enqueue_scripts', 'wfnews_check_bootstrap_registration' );
if ( ! function_exists( 'wfnews_check_bootstrap_registration' ) ) {
    function wfnews_check_bootstrap_registration()
    {
	wp_enqueue_style( 'wfnews-fonts-rajdhani', wfnews_fonts_rajdhani_url(), array(), null );
        if (!(wp_style_is('vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic', $list = 'registered'))) {
            wp_register_style('vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic', wfnews_fonts_roboto_url(), array(), null );
            wp_enqueue_style('vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic');
        }
		if (!(wp_style_is('bootstrap-v4', $list = 'registered'))) {
            wp_register_style('bootstrap-v4', WFNEWS_CSS_DIR .'bootstrap.min.css', array(), '4.1.3', 'all');
            wp_enqueue_style('bootstrap-v4'); //If -v4 prefix is removed, then this plugin might show design issues with those themes which are using old bootstrap version 3
        }
    }
}


// enquque custom Jquery Scripts.
add_action( 'wp_enqueue_scripts', 'register_wfnews_plugin_jquery' );
if ( ! function_exists( 'register_wfnews_plugin_jquery' ) ) {
    function register_wfnews_plugin_jquery()
    {
        //wp_enqueue_script('jquery');
        wp_enqueue_script('wfnews-custom', WFNEWS_JS_DIR .'theme.js', array('jquery'), '1.0.0');
        wp_enqueue_script('popper', WFNEWS_JS_DIR .'popper.min.js', array('jquery'), '1.0.0');
    }
}

// enquque bootstrap js.
add_action( 'wp_enqueue_scripts', 'wfnews_check_bootstrap_js_registration' );
if ( ! function_exists( 'wfnews_check_bootstrap_js_registration' ) ) {
    function wfnews_check_bootstrap_js_registration()
    {
        if (!(wp_script_is('bootstrap-v4', $list = 'registered'))) {
            wp_register_script('bootstrap-v4', WFNEWS_JS_DIR .'bootstrap.min.js', array('jquery'), '4.1.3');
            wp_enqueue_script('bootstrap-v4'); //If -v4 prefix is removed, then this plugin might show design issues with those themes which are using old bootstrap version 3
        }
    }
}