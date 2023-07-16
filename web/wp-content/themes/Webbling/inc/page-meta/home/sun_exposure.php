<?php
add_action( 'cmb2_init', 'cmb2_add_expmetabox' );
function cmb2_add_expmetabox() {

	$prefix = '_ww_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_sunexposure',
		'title'        => __( 'Exposer Area', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on_cb' => 'weaversweb_show_if_front_page',
		'context'      => 'normal',
		'priority'     => 'default',
	) );

    $cmb->add_field( array(
		'name' => __( 'Active Exposer', 'cmb2' ),
		'id' => $prefix . 'exposure_active_section',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Upload Image', 'cmb2' ),
		'id' => $prefix . 'exposure_image',
		'type' => 'file',
		'preview_size' => array( 'small' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'id' => $prefix . 'exposure_title',
		'type' => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name' => __( 'Content', 'cmb2' ),
		'id' => $prefix . 'exposure_content',
		'type' => 'wysiwyg',
	) );

	$cmb->add_field( array(
		'name' => __( 'Button Text', 'cmb2' ),
		'id' => $prefix . 'exposure_button_text',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Button Link', 'cmb2' ),
		'id' => $prefix . 'exposure_button_link',
		'type' => 'text_url',
	) );

}

?>