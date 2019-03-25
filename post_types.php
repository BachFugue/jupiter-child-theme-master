<?php

// Create post types
function add_custom_post_types() {
    
    ////////////
	// VENUES //
	////////////
	
	// Set UI labels for Custom Post Type
    $v_labels = array(
        'name'                => _x( 'Venues', 'Post Type General Name' ),
        'singular_name'       => _x( 'Venue', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Venues' ),
        'parent_item_colon'   => __( 'Parent Venue' ),
        'all_items'           => __( 'All Venues' ),
        'view_item'           => __( 'View Venue' ),
        'add_new_item'        => __( 'Add New Venue' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Venue' ),
        'update_item'         => __( 'Update Venue' ),
        'search_items'        => __( 'Search Venues' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
	// Set other options for Custom Post Type
    $v_args = array(
        'label'               => __( 'Venues' ),
        'description'         => __( 'Venue' ),
        'labels'              => $v_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 8,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'			  => 'dashicons-calendar-alt',
        // This is where we add taxonomies
        // https://wordpress.stackexchange.com/questions/57493/custom-taxonomy-specific-to-a-custom-post-type
        'taxonomies'          => array( 'venue-type' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'venues', $v_args );
	        
    
}

add_action('init', 'add_custom_post_types', 0);
