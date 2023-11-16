<?php
/**
 * Theme Customizer Controls
 *
 * @package purea-magazine
 */


if ( ! function_exists( 'purea_magazine_customizer_menusidebar_register' ) ) :
function purea_magazine_customizer_menusidebar_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'purea_magazine_menusidebar_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Menu Sidebar Settings', 'purea-magazine' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_menusidebar_settings_title', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_menusidebar_settings_title', 
		array(
		    'label'       => esc_html__( 'Menu Sidebar Settings', 'purea-magazine' ),
		    'section'     => 'purea_magazine_menusidebar_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_menusidebar_settings_title',
		) 
	));

	// Add an option to enable the menu sidebar
	$wp_customize->add_setting( 
		'purea_magazine_enable_menu_left_sidebar', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_menu_left_sidebar', 
		array(
		    'label'       => esc_html__( 'Show Menu Sidebar', 'purea-magazine' ),
		    'section'     => 'purea_magazine_menusidebar_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_menu_left_sidebar',
		) 
	));


	// Info label
	$wp_customize->add_setting( 
		'purea_magazine_label_menusidebar_content_info', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Info_Control( $wp_customize, 'purea_magazine_label_menusidebar_content_info', 
		array(
		    'label'       => esc_html__( 'Note: After enabling this, Go to Appearance -> Widgets and put the widgets on Menu Left Sidebar', 'purea-magazine' ),
		    'section'     => 'purea_magazine_menusidebar_settings',
		    'type'        => 'info',
		    'settings'    => 'purea_magazine_label_menusidebar_content_info',
		    'active_callback'  => 'purea_magazine_menu_sidebar_enable',
		) 
	));


	// Info label
	$wp_customize->add_setting( 
		'purea_magazine_label_menusidebar_info', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Info_Control( $wp_customize, 'purea_magazine_label_menusidebar_info', 
		array(
		    'label'       => esc_html__( 'Note: Refresh the page if you do not see any changes', 'purea-magazine' ),
		    'section'     => 'purea_magazine_menusidebar_settings',
		    'type'        => 'info',
		    'settings'    => 'purea_magazine_label_menusidebar_info',
		) 
	));

}
endif;

add_action( 'customize_register', 'purea_magazine_customizer_menusidebar_register' );