<?php
/*** 
 * 
 * CUSTOM POST TYPE: ISSUE
 * 
***/

function issue_custom_post_type() {
    $labels = array(
        'name'              => _x('Issues', 'Post Type General Name', 'wp_atomic_core'),
        'singular_name'     => _x('Issue', 'Post Type Singular Name', 'wp_atomic_core'),
        'menu_name'         => __('Issues', 'wp_atomic_core'),
        'parent_item_colon' => __('Parent Issue', 'wp_atomic_core'),
        'all_items'         => __('All Issues', 'wp_atomic_core'),
        'view_item'         => __('View Issue', 'wp_atomic_core'),
        'add_new_item'      => __('Add New Issue', 'wp_atomic_core'),
        'add_new'           => __('Add New', 'wp_atomic_core'),
        'edit_item'         => __('Edit Issue', 'wp_atomic_core'),
        'update_item'       => __('Update Issue', 'wp_atomic_core'),
        'search_items'      => __('Search Issue', 'wp_atomic_core'),
        'not_found'         => __('Not Found', 'wp_atomic_core'),
        'not_found_in_trash'=> __('Not found in trash', 'wp_atomic_core'),
    );
    $args = array(
        'label'             => __('issues', 'wp_atomic_core'),
        'description'       => __('Issues', 'wp_atomic_core'),
        'labels'            => $labels,
        'supports'          => array('title', 'editor', 'excerpts', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position'     => 5,
        'can_export'        => true,
        'has_archive'       => 'archive/issues',
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'capability_type'    => 'post',
        'show_in_rest' => true,
    );
    register_post_type('issues', $args);
}

add_action('init', 'issue_custom_post_type', 0);

?>