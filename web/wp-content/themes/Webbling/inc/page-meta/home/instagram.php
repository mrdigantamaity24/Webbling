<?php
add_action( 'cmb2_init', 'cmb2_add_instametabox' );
function cmb2_add_instametabox() {

	$prefix = '_ww_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_insta',
		'title'        => __( 'Instagram', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on_cb' => 'weaversweb_show_if_front_page',
		'context'      => 'normal',
		'priority'     => 'default',
	) );

    $cmb->add_field( array(
		'name' => __( 'Active Instagram', 'cmb2' ),
		'id' => $prefix . 'insta_active_section',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'id' => $prefix . 'insta_title',
		'type' => 'textarea_small',
	) );	
}
?>