<?php

function project_post_type() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => _('Projects'),
                'singular_name' => _('Project')
             ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'page-attributes',
                'post-formats'
            )
        )
    );
}
add_action( 'init', 'project_post_type' );

add_filter('manage_projects_posts_columns', 'deathbyjetlag_projects_columns');

function deathbyjetlag_projects_columns($columns) {
    $columns = array(
        'cb' => 'cb',
        'title' => 'Project',
        'framework' => 'Framework',
        'repo' => 'Repository',
        'date' => 'Date'
    );
    unset($columns['comments']);
    return $columns;
}

add_action('manage_projects_posts_custom_column', 'deathbyjetlag_projects_show_columns');

function deathbyjetlag_projects_show_columns($column_name) {
    global $post;
    if ($column_name == 'framework') :
        echo get_post_meta(get_the_ID(), 'framework', true);
    endif;

    if ($column_name == 'repo') :
        echo get_post_meta(get_the_ID(), 'repo', true);
    endif;
}