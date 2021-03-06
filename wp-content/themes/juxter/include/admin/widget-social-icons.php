<?php
/**
 * Social Icons Widget
 *
 * @package    Hoot
 * @subpackage Juxter
 */

/**
* Class Hoot_Social_Icons_Widget
*/
class Hoot_Social_Icons_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-social-icons-widget';
		$settings['name'] = __( 'Hoot > Social Icons', 'juxter' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Social Icons', 'juxter'),
			// 'classname'		=> 'hoot-social-icons-widget', // CSS class applied to frontend widget container via 'before_widget' arg
		);
		$settings['control_options'] = array();
		$settings['form_options'] = array(
			//'name' => can be empty or false to hide the name
			array(
				'name'		=> __( "Title (optional)", 'juxter' ),
				'id'		=> 'title',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Icon Size', 'juxter' ),
				'id'		=> 'size',
				'type'		=> 'select',
				'std'		=> 'small',
				'options'	=> array(
					'small'		=> __( 'Small', 'juxter' ),
					'medium'	=> __( 'Medium', 'juxter' ),
					'large'		=> __( 'Large', 'juxter' ),
					'huge'		=> __( 'Huge', 'juxter' ),
				),
			),
			array(
				'name'		=> __( 'Social Icons', 'juxter' ),
				'id'		=> 'icons',
				'type'		=> 'group',
				'options'	=> array(
					'item_name'	=> __( 'Icon', 'juxter' ),
				),
				'fields'	=> array(
					array(
						'name'		=> __( 'Social Icon', 'juxter' ),
						'id'		=> 'icon',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL (enter username for Skype, email address for Email)', 'juxter' ),
						'id'		=> 'url',
						'type'		=> 'text',
						'sanitize'	=> 'social_icons_sanitize_url',
					),
				),
			),
			array(
				'name'		=> __( 'Widget CSS', 'juxter' ),
				'id'		=> 'customcss',
				'type'		=> 'collapse',
				'fields'	=> array(
					array(
						'name'		=> __( 'Custom CSS Class', 'juxter' ),
						'desc'		=> __( 'Give this widget a custom css classname', 'juxter' ),
						'id'		=> 'class',
						'type'		=> 'text',
					),
					array(
						'name'		=> __( 'Margin Top', 'juxter' ),
						'desc'		=> __( '(in pixels) Leave empty to load default margins', 'juxter' ),
						'id'		=> 'mt',
						'type'		=> 'text',
						'settings'	=> array( 'size' => 3 ),
						'sanitize'	=> 'integer',
					),
					array(
						'name'		=> __( 'Margin Bottom', 'juxter' ),
						'desc'		=> __( '(in pixels) Leave empty to load default margins', 'juxter' ),
						'id'		=> 'mb',
						'type'		=> 'text',
						'settings'	=> array( 'size' => 3 ),
						'sanitize'	=> 'integer',
					),
					array(
						'name'		=> __( 'Widget ID', 'juxter' ),
						'id'		=> 'widgetid',
						'type'		=> '<span class="widgetid" data-baseid="' . $settings['id'] . '">' . __( 'Save this widget to view its ID', 'juxter' ) . '</span>',
					),
				),
			),
		);

		$settings = apply_filters( 'hoot_social_icons_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'social-icons' ) ); // Loads the widget/social-icons or template-parts/widget-social-icons.php template.
	}

}

/**
 * Register Widget
 */
function hoot_social_icons_widget_register(){
	register_widget('Hoot_Social_Icons_Widget');
}
add_action('widgets_init', 'hoot_social_icons_widget_register');

/**
 * Custom Sanitization Function
 */
function hoot_social_icons_sanitize_url( $value, $name, $instance ){
	if ( $name == 'social_icons_sanitize_url' ) {
		if ( !empty( $instance['icon'] ) && $instance['icon'] == 'fa-skype' )
			$new = sanitize_user( $value, true );
		elseif ( !empty( $instance['icon'] ) && $instance['icon'] == 'fa-envelope' )
			$new = is_email( $value );
		else
			$new = esc_url_raw( $value );
		return $new;
	}
	return $value;
}
add_filter('widget_admin_sanitize_field', 'hoot_social_icons_sanitize_url', 10, 3);