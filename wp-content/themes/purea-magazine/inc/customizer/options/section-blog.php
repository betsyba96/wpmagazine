<?php
/**
 * Theme Customizer Controls
 *
 * @package purea-magazine
 */


if ( ! function_exists( 'purea_magazine_customizer_blog_register' ) ) :
function purea_magazine_customizer_blog_register( $wp_customize ) {
	
	$wp_customize->add_panel(
        'purea_magazine_blog_settings_panel',
        array (
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Blog Settings', 'purea-magazine' ),
        )
    );

	// Section Posts
    $wp_customize->add_section(
        'purea_magazine_posts_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Posts', 'purea-magazine' ),
            'panel'          => 'purea_magazine_blog_settings_panel',
        )
    ); 


    // Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_post_category_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_post_category_show', 
		array(
		    'label'       => esc_html__( 'Posts Category', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_post_category_show',
		) 
	));

	// Add an option to enable the category
	$wp_customize->add_setting( 
		'purea_magazine_enable_posts_cat', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_posts_cat', 
		array(
		    'label'       => esc_html__( 'Show Category', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_posts_cat',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_post_meta_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_post_meta_show', 
		array(
		    'label'       => esc_html__( 'Posts Meta', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_post_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'purea_magazine_enable_posts_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_posts_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_posts_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'purea_magazine_enable_posts_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_posts_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_posts_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'purea_magazine_enable_posts_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_posts_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_posts_meta_comments',
		) 
	));


	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_post_meta_content_settings', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_post_meta_content_settings', 
		array(
		    'label'       => esc_html__( 'Posts Meta Text Settings', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_post_meta_content_settings',
		) 
	));


	// add By textbox
    $wp_customize->add_setting(
        'purea_magazine_highlighted_area_by_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'By', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_highlighted_area_by_text',
        array(
            'settings'      => 'purea_magazine_highlighted_area_by_text',
            'section'       => 'purea_magazine_posts_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'By Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the Author By text displayed in the Highlighted Area and other Purea Magazine Widgets', 'purea-magazine' ),
        )
    );


	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_sidebar_layout', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'purea_magazine_blog_sidebar_layout',
        array(
            'default'			=> 'right',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'purea_magazine_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Purea_Magazine_Radio_Image_Control( $wp_customize,'purea_magazine_blog_sidebar_layout',
            array(
                'settings'		=> 'purea_magazine_blog_sidebar_layout',
                'section'		=> 'purea_magazine_posts_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'purea-magazine' ),
                'choices'		=> array(
                    'right'	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'no' 	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );


    // Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_blog_excerpt', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_blog_excerpt', 
		array(
		    'label'       => esc_html__( 'Post Excerpt', 'purea-magazine' ),
		    'section'     => 'purea_magazine_posts_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_blog_excerpt',
		) 
	));

	// add post excerpt textbox
    $wp_customize->add_setting(
        'purea_magazine_posts_excerpt_length',
        array(
            'type' => 'theme_mod',
            'default'           => 70,
            'sanitize_callback' => 'purea_magazine_sanitize_number',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_posts_excerpt_length',
        array(
            'settings'      => 'purea_magazine_posts_excerpt_length',
            'section'       => 'purea_magazine_posts_settings',
            'type'          => 'number',
            'label'         => esc_html__( 'Post Excerpt Length', 'purea-magazine' ),
        )
    );

    // add readmore textbox
    $wp_customize->add_setting(
        'purea_magazine_posts_readmore_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'READ MORE', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_posts_readmore_text',
        array(
            'settings'      => 'purea_magazine_posts_readmore_text',
            'section'       => 'purea_magazine_posts_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Read More Text', 'purea-magazine' ),
        )
    );

    //=========================================================================

	// Section Single Post
    $wp_customize->add_section(
        'purea_magazine_single_post_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Single Post', 'purea-magazine' ),
            'panel'          => 'purea_magazine_blog_settings_panel',
        )
    ); 


    // Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_single_post_category_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_single_post_category_show', 
		array(
		    'label'       => esc_html__( 'Post Category', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_single_post_category_show',
		) 
	));

	// Add an option to enable the category
	$wp_customize->add_setting( 
		'purea_magazine_enable_single_post_cat', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_cat', 
		array(
		    'label'       => esc_html__( 'Show Category', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_cat',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_single_post_tag_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_single_post_tag_show', 
		array(
		    'label'       => esc_html__( 'Post Tags', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_single_post_tag_show',
		) 
	));

	// Add an option to enable the tags
	$wp_customize->add_setting( 
		'purea_magazine_enable_single_post_tags', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_tags', 
		array(
		    'label'       => esc_html__( 'Show Tags', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_tags',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_single_pos_meta_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_single_pos_meta_show', 
		array(
		    'label'       => esc_html__( 'Post Meta', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_single_pos_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'purea_magazine_enable_single_post_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'purea_magazine_enable_single_post_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'purea_magazine_enable_single_post_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_meta_comments',
		) 
	));


	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_single_post_content_settings', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_single_post_content_settings', 
		array(
		    'label'       => esc_html__( 'Text Settings', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_single_post_content_settings',
		) 
	));

	// add Posted on textbox
    $wp_customize->add_setting(
        'purea_magazine_single_post_posted_on_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Posted on', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_posted_on_text',
        array(
            'settings'      => 'purea_magazine_single_post_posted_on_text',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Posted on Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the Date Posted by text displayed in the single posts meta and blog posts meta', 'purea-magazine' ),
        )
    );

	// add Posted by textbox
    $wp_customize->add_setting(
        'purea_magazine_single_post_posted_by_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Posted by', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_posted_by_text',
        array(
            'settings'      => 'purea_magazine_single_post_posted_by_text',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Posted by Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the Author Posted by text displayed in the single posts meta and blog posts meta', 'purea-magazine' ),
        )
    );

    // add comments textbox
    $wp_customize->add_setting(
        'purea_magazine_single_post_comments_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Comments', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_comments_text',
        array(
            'settings'      => 'purea_magazine_single_post_comments_text',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Comments Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the Comments text displayed in the single posts meta and blog posts meta', 'purea-magazine' ),
        )
    );

    // add next article textbox
    $wp_customize->add_setting(
        'purea_magazine_single_post_next_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Next Article', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_next_article_text',
        array(
            'settings'      => 'purea_magazine_single_post_next_article_text',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Next Article Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'purea-magazine' ),
        )
    );

    // add previous article textbox
    $wp_customize->add_setting(
        'purea_magazine_single_post_previous_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Previous Article', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_previous_article_text',
        array(
            'settings'      => 'purea_magazine_single_post_previous_article_text',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Previous Article Text', 'purea-magazine' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'purea-magazine' ),
        )
    );


	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_single_sidebar_layout', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_single_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_single_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'purea_magazine_blog_single_sidebar_layout',
        array(
            'default'			=> 'no',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'purea_magazine_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Purea_Magazine_Radio_Image_Control( $wp_customize,'purea_magazine_blog_single_sidebar_layout',
            array(
                'settings'		=> 'purea_magazine_blog_single_sidebar_layout',
                'section'		=> 'purea_magazine_single_post_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'purea-magazine' ),
                'choices'		=> array(
                    'right'	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'no' 	        => PUREA_MAGAZINE_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );

    //single post width options
    $wp_customize->add_setting(
        'purea_magazine_single_post_width',
        array(
            'type' => 'theme_mod',
            'default'           => 65,
            'sanitize_callback' => 'purea_magazine_sanitize_number',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_single_post_width',
        array(
            'settings'      => 'purea_magazine_single_post_width',
            'section'       => 'purea_magazine_single_post_settings',
            'type'          => 'number',
            'label'         => esc_html__( 'Post Layout Width (%)', 'purea-magazine' ),
            'description'   => esc_html__( 'Default is 65', 'purea-magazine' ),
            'active_callback' => 'purea_magazine_single_post_no_sidebar_enable_full_width_disable',
        )
    );
    

    // full width single post
    $wp_customize->add_setting( 
		'purea_magazine_enable_single_post_full_width', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_single_post_full_width', 
		array(
		    'label'       => esc_html__( 'Show Full Width Post', 'purea-magazine' ),
		    'section'     => 'purea_magazine_single_post_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_single_post_full_width',
		    'active_callback'  => 'purea_magazine_single_post_no_sidebar_enable',
		) 
	));

	//=========================================================================

	// Section Single Post
    $wp_customize->add_section(
        'purea_magazine_archive_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Archives', 'purea-magazine' ),
            'panel'          => 'purea_magazine_blog_settings_panel',
        )
    ); 


    // Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_category_archives_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_category_archives_show', 
		array(
		    'label'       => esc_html__( 'Category Archives', 'purea-magazine' ),
		    'section'     => 'purea_magazine_archive_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_category_archives_show',
		) 
	));

	// Add an option to enable the category archive settings
	$wp_customize->add_setting( 
		'purea_magazine_enable_cat_archive_settings', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'purea_magazine_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Toggle_Control( $wp_customize, 'purea_magazine_enable_cat_archive_settings', 
		array(
		    'label'       => esc_html__( 'Show Category Title Options', 'purea-magazine' ),
		    'section'     => 'purea_magazine_archive_settings',
		    'type'        => 'toggle',
		    'settings'    => 'purea_magazine_enable_cat_archive_settings',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'purea_magazine_label_category_archives_title_show', 
		array(
		    'sanitize_callback' => 'purea_magazine_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Purea_Magazine_Title_Info_Control( $wp_customize, 'purea_magazine_label_category_archives_title_show', 
		array(
		    'label'       => esc_html__( 'Category Title Settings', 'purea-magazine' ),
		    'section'     => 'purea_magazine_archive_settings',
		    'type'        => 'title',
		    'settings'    => 'purea_magazine_label_category_archives_title_show',
		    'active_callback'  => 'purea_magazine_cat_archive_enable',
		) 
	));

	// add category title textbox
    $wp_customize->add_setting(
        'purea_magazine_cat_archive_title_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Category:', 'purea-magazine' ),
            'sanitize_callback' => 'purea_magazine_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'purea_magazine_cat_archive_title_text',
        array(
            'settings'      => 'purea_magazine_cat_archive_title_text',
            'section'       => 'purea_magazine_archive_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Text Before Title', 'purea-magazine' ),
            'active_callback'  => 'purea_magazine_cat_archive_enable',
        )
    );

    $wp_customize->add_setting( 
        'purea_magazine_label_cat_archive_title_info_settings', 
        array(
            'sanitize_callback' => 'purea_magazine_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Purea_Magazine_Info_Control( $wp_customize, 'purea_magazine_label_cat_archive_title_info_settings', 
        array(
            'label'       => esc_html__( "If you do not see any changes in preview after changing options then click on publish button and then refresh the page again. ", 'purea-magazine' ),
            'section'     => 'purea_magazine_archive_settings',
            'type'        => 'title',
            'settings'    => 'purea_magazine_label_cat_archive_title_info_settings',
        ) 
    ));

}
endif;

add_action( 'customize_register', 'purea_magazine_customizer_blog_register' );