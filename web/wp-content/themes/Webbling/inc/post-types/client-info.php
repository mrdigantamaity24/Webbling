<?php

/***
 * Client Info Post Type
 ***/

if (!class_exists('WeaversWeb_Client_Post_Type')) :
	class WeaversWeb_Client_Post_Type
	{

		function __construct()
		{
			// Adds the project post type and taxonomies
			add_action('init', array(&$this, 'client_init'), 0);
			// Thumbnail support for clients posts
			add_theme_support('post-thumbnails', array('Client-info'));
		}

		function client_init()
		{
			/**
			 * Enable the Clients_init custom post type
			 * http://codex.wordpress.org/Function_Reference/register_post_type
			 */
			$labels = array(
				'name'					=> __('Client Information', 'WeaversWeb'),
				'singular_name'		=> __('Client Opening Name', 'WeaversWeb'),
				'add_new'				=> __('Add New Client', 'WeaversWeb'),
				'add_new_item'			=> __('Add New Client Position', 'WeaversWeb'),
				'edit_item'			=> __('Edit Client', 'WeaversWeb'),
				'new_item'				=> __('Add New Client', 'WeaversWeb'),
				'view_item'			=> __('View Client', 'WeaversWeb'),
				'search_items'			=> __('Search Client', 'WeaversWeb'),
				'not_found'			=> __('No Position items found', 'WeaversWeb'),
				'not_found_in_trash'	=> __('No Position found in trash', 'WeaversWeb')
			);

			$args = array(
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'menu_icon' => 'dashicons-businessperson',
				'rewrite' => array('slug' => 'clientInfo'),
				'map_meta_cap' => true,
				'hierarchical' => false,
				'menu_position' => 10,
				'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
			);

			$args = apply_filters('WeaversWeb_clientinfo_args', $args);
			register_post_type('clientInfo', $args);

		}
	}
	new WeaversWeb_Client_Post_Type;
endif;