<?php 
/*
 **************************************************************************
    INCLUIMOS SCRIPTS
 **************************************************************************
 */
    if(!function_exists('pizza_new_add_scripts'))
    {
    	function('pizza_new_add_scripts')
    	{
    		wp_enqueue_script('jquery');
    		wp_enqueue_script( 'all_js', get_template_directory_uri().'/js/all.min.js', ['jquery'], '1.0', truee );
    	}
    }
    add_action('wp_enqueue_scripts','pizza_new_add_scripts');