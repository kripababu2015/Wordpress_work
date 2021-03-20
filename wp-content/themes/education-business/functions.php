<?php

add_action( 'wp_enqueue_scripts', 'education_business_chld_thm_parent_css' );
function education_business_chld_thm_parent_css() {

    $education_business_theme = wp_get_theme();
    $theme_version = $education_business_theme->get( 'Version' );

    wp_enqueue_style( 
    	'education_business_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	),
        $theme_version
    );
    
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'education_business_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'education_business_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'education_business_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'education_business_change_theme_color' );
function education_business_change_theme_color(){
    return '#ffb606';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'education_business_header_menu_color_hover' );
function education_business_header_menu_color_hover(){
    return '#ffb606';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'education_business_header_button_color' );
function education_business_header_button_color(){
    return '#ffb606';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'education_business_header_button_color_hover' );
function education_business_header_button_color_hover(){
    return '#ffb606';
}

/**
* Changed to slider
*/
add_filter( 'bizberg_slider_banner_settings', 'education_business_slider_banner_settings' );
function education_business_slider_banner_settings(){
    return 'slider';
}

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return 'rgba(255,182,6,0.65)';
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_read_more_background_color_2', function(){
    return '#ffb606';
});

add_filter( 'bizberg_link_color', function(){
    return '#64686d';
});

add_filter( 'bizberg_link_color_hover', function(){
    return '#ffb606';
});

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_sidebar_widget_link_color_hover', function(){
    return '#ffb606';
});

add_filter( 'bizberg_sidebar_widget_title_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_footer_social_icon_background', function(){
    return '#ffb606';
});

add_filter( 'bizberg_footer_social_icon_color', function(){
    return '#fff';
});