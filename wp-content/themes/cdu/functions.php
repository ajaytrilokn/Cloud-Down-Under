<?php

function cloud_styleand_script()
{
    $template = get_template_directory_uri();

    wp_enqueue_style('fontawesome-cdu', $template.'/assets/font/font-awesome/css/font-awesome.min.css',array(),'1','all');
    wp_enqueue_style('bootstrape-cdu', $template.'/assets/css/bootstrap-5.0.2/css/bootstrap.min.css',array(),'5.0.2','all');
    wp_enqueue_style('stylesheet-cdu', $template.'/assets/font/font-family/stylesheet.css',array(),'1','all');
    wp_enqueue_style('animations-cdu', $template.'/assets/css/animations.css',array(),'1','all');
    wp_enqueue_style('slick-cdu', $template.'/assets/css/slick.min.css',array(),'1','all');
    wp_enqueue_style('fancy-cdu', $template.'/assets/css/fancybox.css',array(),'1','all');
    wp_enqueue_style('style-cdu', $template.'/assets/css/style.css',array(),'1','all');
    wp_enqueue_style('media-cdu', $template.'/assets/css/media.css',array(),'1','all');
    wp_enqueue_style('footer-cdu', $template.'/assets/css/footer.css',array(),'1','all');
    wp_enqueue_style('header-cdu', $template.'/assets/css/header.css',array(),'1','all');
    wp_enqueue_style('process-cdu', $template.'/assets/css/process.css',array(),'1','all');


    wp_enqueue_script('jquery-',$template.'/assets/js/jquery-3.6.0/jquery.min.js',array(),'3.6.0','all');
    wp_enqueue_script('bootstrap-js',$template.'/assets/js/bootstrap-5.0.2/js/bootstrap.min.js',array(),'5.0.2','all');
    wp_enqueue_script('animate-js', $template.'/assets/js/css3-animate-it.js',array(),'1','all');
    wp_enqueue_script('slick-js', $template.'/assets/js/slick.min.js',array(),'1','all');
    wp_enqueue_script('typed-js', $template.'/assets/js/typed.min.js',array(),'1','all');
    wp_enqueue_script('fancy-js', $template.'/assets/js/fancybox.js',array(),'1','all');
    wp_enqueue_script('process-module-js', $template.'/assets/js/process_module.js',array(),'1','all');
    wp_enqueue_script('custom-js', $template.'/assets/js/custom.js',array(),'1','all');

}
add_action('wp_enqueue_scripts','cloud_styleand_script');

function cloud_down_under_support()
{
    // Custom Logo Support
    add_theme_support( 'custom-logo' );
 

    // Featured Image 

    add_theme_support( 'post-thumbnails' ); 

    // Navigation Menu

    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
          'footer-menu' => __( 'Footer Menu' )
        )
      );


}
add_action('init','cloud_down_under_support');
// ACF Option Page 

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}


// SVG Images Upload Support

function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');


// Form And Contact Us Section Shortcode

function custom_contact_us_section_shortcode() {
    ob_start(); 
    include get_template_directory() . '/templates/custom-contact-us-section.php';
    $output = ob_get_clean();
    return $output;
}

add_shortcode('custom_contact_us_section', 'custom_contact_us_section_shortcode');

?>