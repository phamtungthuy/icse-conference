<?php 
    function icse_support_theme() {
        add_theme_support('widgets');
    }
    add_action('after_setup_theme', 'icse_support_theme');

        
    function icse_register_styles() {
        wp_enqueue_style('icse-style', get_template_directory_uri().'/style.css');
    }
    
    add_action('wp_enqueue_scripts', 'icse_register_styles');
    

    function icse_register_menus() {
        $locations = array(
            'menu' => 'menu'
        );

        register_nav_menus($locations);
    
    }
    add_action('init', icse_register_menus());
?>