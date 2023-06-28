<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function my_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_add_inline_script( 'jquery', 'window.jQuery = window.$ = jQuery;' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


// custom hamburger breakpoint
add_filter( 'astra_tablet_breakpoint', function() {
    return 1106;
});

//custom JS
function enqueue_custom_scripts() {
    $scripts = array(
        'custom-script-1' => '/js/carousel.js',
        'custom-script-2' => '/js/cenik.js',
		'custom-script-3' => '/js/faq.js',
		'custom-script-4' => '/js/tabs.js',
		//'custom-script-5' => '/js/videoplayer.js',
		'custom-script-6' => '/js/scroll.js',
		'custom-script-7' => '/js/readmore.js',
    );

    foreach ($scripts as $handle => $path) {
        $script_src = get_stylesheet_directory_uri() . $path;
        wp_register_script($handle, $script_src, array(), false, true);
        // atribut async
        wp_script_add_data($handle, 'async', true);
        wp_enqueue_script($handle);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function footer_gtm() {
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PWKWRN7');</script>
    <!-- End Google Tag Manager -->
    <?php
}
add_action('wp_footer', 'footer_gtm');

add_action( 'wpcf7_before_send_mail', 'send_post_after_cf7' );
function send_post_after_cf7( $contact_form ) {
    $submission = WPCF7_Submission::get_instance();

    if ( $submission ) {
        $posted_data = $submission->get_posted_data();
        
        $email = $posted_data['your-email'];
        $name = $posted_data['jmeno'];
        $phone = $posted_data['tel'];
        $message = $posted_data['your-message'];
        $source = "james_contact_form_issuer_submit";

        $api_url = 'https://bonds.api.comfortfinancegroup.com/api/v1/leads/';
        
        $body = array(
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'data' => array(
                'note' => $message,
            ),
            'source' => $source,
        );

        $args = array(
            'method' => 'POST',
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
            'body' => json_encode( $body ),
        );
        
        $response = wp_remote_request( $api_url, $args );
		if( is_wp_error( $response ) ) {
    error_log( "Error in API request: " . $response->get_error_message() );
} else {
    if( wp_remote_retrieve_response_code( $response ) == 200 ) {
        error_log( "API request successful, response: " . wp_remote_retrieve_body( $response ) );
    } else {
        error_log( "API request failed, response: " . wp_remote_retrieve_body( $response ) );
    }
}
		
		
    }
}