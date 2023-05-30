<?php

add_action('after_setup_theme', 'arsha_setup');
add_action('init', 'arsha_register_types');
add_action('wp_enqueue_scripts', 'arsha_scripts');

$widgets = [
    'widget-video-button',
];
foreach ($widgets as $widget) {
    require_once(__DIR__ . '/widgets/' . $widget . '.php');
}

// show_admin_bar(false);
// function move_admin_bar()
// {
//     echo '
//     <style type="text/css">
//     body {margin-top: -32px;padding-bottom: 28px;}
//     body.admin-bar #wphead {padding-top: 0;}
//     body.admin-bar #footer {padding-bottom: 28px;}
//     #wpadminbar { top: auto !important;bottom: 0;}
//     #wpadminbar .quicklinks .menupop ul { bottom: 28px;}
//     </style>';
// }
// add_action('wp_head', 'move_admin_bar');



function arsha_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

function arsha_setup()
{
    // wp_die('Hi');
    add_theme_support('menus');

    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-useful-menu', 'Footer Useful Links Menu');
    register_nav_menu('footer-services-menu', 'Footer Our Services Menu');

    register_sidebar([
        'name' => 'Video Sidebar',
        'id' => 'arsha-video',
        'before_widget' => NULL,
        'after_widget' => NULL,
    ]);

    register_widget('arsha_video_button');
}

function arsha_scripts()
{
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

    // Vendor CSS Files
    wp_enqueue_style('aos', arsha_assets_path('assets/vendor/aos/aos.css'));
    wp_enqueue_style('bootstrap', arsha_assets_path('assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('bootstrap-icons', arsha_assets_path('assets/vendor/bootstrap-icons/bootstrap-icons.css'));
    wp_enqueue_style('boxicons', arsha_assets_path('assets/vendor/boxicons/css/boxicons.min.css'));
    wp_enqueue_style('glightbox', arsha_assets_path('assets/vendor/glightbox/css/glightbox.min.css'));
    wp_enqueue_style('remixicon', arsha_assets_path('assets/vendor/remixicon/remixicon.css'));
    wp_enqueue_style('swiper-bundle', arsha_assets_path('assets/vendor/swiper/swiper-bundle.min.css'));

    // Template Main CSS File
    wp_enqueue_style('main-styles', arsha_assets_path('assets/css/style.css'));


    // Vendor JS Files
    wp_enqueue_script('aos-js', arsha_assets_path('assets/vendor/aos/aos.js'));
    wp_enqueue_script('bootstrap-js', arsha_assets_path('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'));
    wp_enqueue_script('glightbox-js', arsha_assets_path('assets/vendor/glightbox/js/glightbox.min.js'));
    wp_enqueue_script('isotope-js', arsha_assets_path('assets/vendor/isotope-layout/isotope.pkgd.min.js'));
    wp_enqueue_script('swiper-bundle-js', arsha_assets_path('assets/vendor/swiper/swiper-bundle.min.js'));
    wp_enqueue_script('noframework-waypoints-js', arsha_assets_path('assets/vendor/waypoints/noframework.waypoints.js'));
    wp_enqueue_script('validate-js', arsha_assets_path('assets/vendor/php-email-form/validate.js'));

    // Template Main JS File
    wp_enqueue_script('main-js', arsha_assets_path('assets/js/main.js'), [], time(), true);
}


/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');




function arsha_customize_register($wp_customize)
{
    $wp_customize->add_setting('arsha_tagline-subtitle', array());
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'arsha_tagline-subtitle',
            array(
                'label'      => __('Tagline Subtitle', 'arsha'),
                'description' => __('Additional tagline in grey text', 'arsha'),
                'section'    => 'title_tagline',
                'settings'   => 'arsha_tagline-subtitle',
                'priority'   => 10,
                'type'       => 'textarea',
            )
        )
    );


    $wp_customize->add_setting('arsha_hero-image', array());
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'arsha_hero-image',
            array(
                'label'      => __('Hero Image', 'arsha'),
                'section'    => 'title_tagline',
                'settings'   => 'arsha_hero-image',
                'priority'   => 10,
            )
        )
    );

    // ..repeat ->add_setting() and ->add_control() for mytheme_company-division
}
add_action('customize_register', 'arsha_customize_register');

function arsha_register_types()
{
    register_post_type('clients', [
        'labels' => [
            'name'               => 'Clients',
            'singular_name'      => 'Client',
            'add_new'            => 'Add clients',
            'add_new_item'       => 'Add clients',
            'edit_item'          => 'Edit clients',
            'new_item'           => 'New client',
            'view_item'          => 'View clients',
            'search_items'       => 'Search clients',
            'not_found'          => 'No clients found',
            'not_found_in_trash' => 'No clients in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Clients',
        ],
        'public'                 => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-groups',
        'hierarchical'        => false,
        'supports'            => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true
    ]);

    register_post_type('services', [
        'labels' => [
            'name'               => 'Services',
            'singular_name'      => 'Services',
            'add_new'            => 'Add services',
            'add_new_item'       => 'Add services',
            'edit_item'          => 'Edit services',
            'new_item'           => 'New service',
            'view_item'          => 'View services',
            'search_items'       => 'Search services',
            'not_found'          => 'No services found',
            'not_found_in_trash' => 'No services in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Services',
        ],
        'public'                 => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-heart',
        'hierarchical'        => false,
        'supports'            => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true
    ]);
}


add_filter('wp_nav_menu_items', 'arsha_add_icon', 10, 2);
function arsha_add_icon($items, $args)
{
    if ($args->theme_location == 'header-menu') {
        $items .= '<li><a class="getstarted scrollto" href="#about">Get Started</a></li></ul><i class="bi bi-list mobile-nav-toggle"></i>';
    }
    return $items;
}
