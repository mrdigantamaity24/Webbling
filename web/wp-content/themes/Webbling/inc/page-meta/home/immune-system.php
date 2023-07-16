<?php
add_action( 'cmb2_init', 'cmb2_add_immunemetabox' );
function cmb2_add_immunemetabox() {

	$prefix = '_ww_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_immune',
		'title'        => __( 'Immune Area', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on_cb' => 'weaversweb_show_if_front_page',
		'context'      => 'normal',
		'priority'     => 'default',
	) );

    $cmb->add_field( array(
		'name' => __( 'Active Immune', 'cmb2' ),
		'id' => $prefix . 'immune_active_section',
		'type' => 'checkbox',
	) );

    $group_field_id = $cmb->add_field( array(
        'id'          => 'immune_group_meta',
        'type'        => 'group',
        'description' => __( 'Generate entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'immune_title',
        'type' => 'text',
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Description',
        'description' => 'Write a short description for this entry',
        'id'   => 'immune_description',
        'type' => 'textarea_small',
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Upload Logo',
        'id'   => 'immune_image',
        'type' => 'file',
        'preview_size' => 'thumbnail',
        'query_args' => array(            
            // Or only allow gif, jpg, or png images
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
    ) );        
}
?>