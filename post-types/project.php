<?php
/*** 
 * 
 * CUSTOM POST TYPE: PROJECT
 * 
***/

function project_custom_post_type() {
    $labels = array(
        'name'              => _x('Projects', 'Post Type General Name', 'wp_atomic_core'),
        'singular_name'     => _x('Project', 'Post Type Singular Name', 'wp_atomic_core'),
        'menu_name'         => __('Projects', 'wp_atomic_core'),
        'parent_item_colon' => __('Parent Project', 'wp_atomic_core'),
        'all_items'         => __('All Projects', 'wp_atomic_core'),
        'view_item'         => __('View Project', 'wp_atomic_core'),
        'add_new_item'      => __('Add New Project', 'wp_atomic_core'),
        'add_new'           => __('Add New', 'wp_atomic_core'),
        'edit_item'         => __('Edit Project', 'wp_atomic_core'),
        'update_item'       => __('Update Project', 'wp_atomic_core'),
        'search_items'      => __('Search Project', 'wp_atomic_core'),
        'not_found'         => __('Not Found', 'wp_atomic_core'),
        'not_found_in_trash'=> __('Not found in trash', 'wp_atomic_core'),
    );
    $args = array(
        'label'             => __('projects', 'wp_atomic_core'),
        'description'       => __('Projects', 'wp_atomic_core'),
        'labels'            => $labels,
        'supports'          => array('title', 'editor', 'excerpts', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position'     => 6,
        'can_export'        => true,
        'has_archive'       => 'archive/projects',
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'capability_type'    => 'post',
        'show_in_rest' => true,
    );
    register_post_type('projects', $args);
}

add_action('init', 'project_custom_post_type', 0);

?>