<?php
    function deathbyjetlag_enqueue() {
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), true);
    }

    add_action('wp_enqueue_scripts', 'deathbyjetlag_enqueue');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'header' => 'Header',
        'footer' => 'Footer'
    ));

    function deathbyjetlag_widgets_init() {
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar( array(
            'name' => 'Footer (Left)',
            'id' => 'footer_left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar( array(
            'name' => 'Footer (Center)',
            'id' => 'footer_center',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar( array(
            'name' => 'Footer (Right)',
            'id' => 'footer_right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }

    add_action('widgets_init', 'deathbyjetlag_widgets_init');

    function add_menu_link_class( $atts, $item, $args ) {
        if (property_exists($args, 'link_class')) {
            $atts['class'] = $args->link_class;
        }
        return $atts;
      }

    add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

    require_once('cpt/cpt.php');


    // This is only to be used to remove the 32px margin on the html due to the admin bar
    // add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );