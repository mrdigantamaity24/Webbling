<?php
/*
** Banner Meta Field
*/
add_action( 'cmb2_init', 'cmb2_add_metabox' );

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
*/
function weaversweb_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}


function cmb2_add_metabox() {

	$prefix = '_ww_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'homebanner',
		'title'        => __( 'Banner Area', 'cmb2' ),
		'object_types' => array( 'page' ),       
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Active Banner', 'cmb2' ),
		'id' => $prefix . 'banner_active_section',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Banner Image', 'cmb2' ),
		'id' => $prefix . 'banner_image',
		'type' => 'file',
		'preview_size' => array( 'small' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'id' => $prefix . 'banner_title',
		'type' => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name' => __( 'Content', 'cmb2' ),
		'id' => $prefix . 'banner_excerpt',
		'type' => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name' => __( 'Button Text', 'cmb2' ),
		'id' => $prefix . 'banner_button_text',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Button Link', 'cmb2' ),
		'id' => $prefix . 'banner_button_link',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => __( 'BG Text', 'cmb2' ),
		'id' => $prefix . 'banner_bg_text',
		'type' => 'textarea_small',
	) );

}
?>
