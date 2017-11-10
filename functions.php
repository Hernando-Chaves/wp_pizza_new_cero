<?php 
/*
 **************************************************************************
    INCLUIMOS SCRIPTS
 **************************************************************************
 */
    if(!function_exists('pizza_new_add_scripts'))
    {
    	function pizza_new_add_scripts()
    	{
    		wp_enqueue_script('jquery');
            wp_enqueue_script( 'all_js', get_template_directory_uri().'/js/all.min.js', ['jquery'], '1.0', true );
            wp_enqueue_style( 'custom_css', get_template_directory_uri().'/css/custom.css');
           
            // FONTAWESOME
            wp_enqueue_style( 'fontawesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
            // STYLE
            wp_enqueue_style('pizzeria_css',get_stylesheet_uri());
    	}
    }
    add_action('wp_enqueue_scripts','pizza_new_add_scripts');
/*
 **************************************************************************
    MENUS
 **************************************************************************
 */
    if(!function_exists('pizza_new_add_menus'))
        {
            function pizza_new_add_menus()
            {
                register_nav_menus([
                    'header-menu' => __('Header-menu'),
                    'social-menu' => __('Social-menu'),
                ]);
            }
        }
    add_action('init','pizza_new_add_menus');