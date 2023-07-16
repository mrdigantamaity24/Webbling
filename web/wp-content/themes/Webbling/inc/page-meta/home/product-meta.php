<?php
add_action( 'cmb2_init', 'cmb2_add_hpmetabox' );
function cmb2_add_hpmetabox() {

	$prefix = '_ww_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_product',
		'title'        => __( 'Product Area', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on_cb' => 'weaversweb_show_if_front_page',
		'context'      => 'normal',
		'priority'     => 'default',
	) );

    $cmb->add_field( array(
		'name' => __( 'Active Product', 'cmb2' ),
		'id' => $prefix . 'product_active_section',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'id' => $prefix . 'product_title',
		'type' => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name' => __( 'No of Product', 'cmb2' ),
		'id' => $prefix . 'product_number',
		'type' => 'text',
	) );

}
?>