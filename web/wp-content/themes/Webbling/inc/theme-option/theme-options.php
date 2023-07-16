<?php
add_action( 'cmb2_admin_init', 'weaversweb_register_theme_options_metabox' );

function weaversweb_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => 'weaversweb_theme_options_page',
		'title'        => esc_html__( 'Theme Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'weaversweb_theme_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'              => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		'parent_slug'             => 'themes.php', // Make options page a submenu item of the themes menu.
	) );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Header Logo', 'cmb2' ),
		'desc' => esc_html__( 'Upload logo image', 'cmb2' ),
		'id'   => 'ww_options_header_logo',
		'type' => 'file',
		'query_args' => array(			
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		'preview_size' => 'small'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Footer Logo', 'cmb2' ),
		'desc' => esc_html__( 'Upload logo image', 'cmb2' ),
		'id'   => 'ww_options_footer_logo',
		'type' => 'file',
		'query_args' => array(			
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		'preview_size' => 'small'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Facebook URL', 'cmb2' ),
		'desc' => esc_html__( 'Add URL', 'cmb2' ),
		'id'   => 'ww_options_fb_link',
		'type' => 'text_url',
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Twitter URL', 'cmb2' ),
		'desc' => esc_html__( 'Add URL', 'cmb2' ),
		'id'   => 'ww_options_tw_link',
		'type' => 'text_url',
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Instagram URL', 'cmb2' ),
		'desc' => esc_html__( 'Add URL', 'cmb2' ),
		'id'   => 'ww_options_insta_link',
		'type' => 'text_url',
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Linkedin URL', 'cmb2' ),
		'desc' => esc_html__( 'Add URL', 'cmb2' ),
		'id'   => 'ww_options_ld_link',
		'type' => 'text_url',
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Newsletter Title', 'cmb2' ),
		'desc' => esc_html__( 'Add title', 'cmb2' ),
		'id'   => 'ww_options_nl_title',
		'type' => 'text',
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Newsletter Sub-title', 'cmb2' ),
		'desc' => esc_html__( 'Add sub-title', 'cmb2' ),
		'id'   => 'ww_options_nl_subtitle',
		'type' => 'text',
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Newsletter code', 'cmb2' ),
		'desc' => esc_html__( 'Add shortcode', 'cmb2' ),
		'id'   => 'ww_options_nl_code',
		'type' => 'wysiwyg',
	) );

}
?>