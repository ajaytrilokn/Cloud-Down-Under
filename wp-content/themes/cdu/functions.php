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

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Blog Details Settings',
        'menu_title'    => 'Blog Detail Box',
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


// Custom Case Study Post 

function case_studies_post_type() {

	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'        => __( 'Case Study', 'text_domain' ),
		'archives'              => __( 'Case Study Archives', 'text_domain' ),
		'attributes'            => __( 'Case Study Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Case Study:', 'text_domain' ),
		'all_items'             => __( 'All Case Studies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Case Study', 'text_domain' ),
		'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
		'update_item'           => __( 'Update Case Study', 'text_domain' ),
		'view_item'             => __( 'View Case Study', 'text_domain' ),
		'view_items'            => __( 'View Case Studies', 'text_domain' ),
		'search_items'          => __( 'Search Case Study', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into case study', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this case study', 'text_domain' ),
		'items_list'            => __( 'Case studies list', 'text_domain' ),
		'items_list_navigation' => __( 'Case study list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter case studies list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Case Study', 'text_domain' ),
		'description'           => __( 'Case studies', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions','title', 'editor', 'excerpt', 'author','trackbacks', 'custom-fields', 'comments', 'page-attributes' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-spreadsheet',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => true,
        'capability_type'       => 'post',
		'taxonomies'  => array( 'category','post_tag'),
		

	);
	register_post_type( 'case-study', $args );

}
add_action( 'init', 'case_studies_post_type',0);



// Function to calculate and display reading time
function custom_reading_time() {
    $content = get_post_field( 'post_content', get_the_ID() );

    $word_count = str_word_count( strip_tags( $content ) );

    $words_per_minute = 200;

    $reading_time = ceil( $word_count / $words_per_minute );

    echo $reading_time . ' Min';
}


?>