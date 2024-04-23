<?php

/* Custom Post Type Start */
function create_posttypes()
{

/*
    register_post_type(
        'tutorial',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Tutorials'),
                'singular_name' => __('Tutorial')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'tutorial'),
        )
    );

    register_post_type(
        'course',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Courses'),
                'singular_name' => __('Course')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'course'),
        )
    );

    */
}
// Hooking up our function to theme setup
add_action('init', 'create_posttypes');
/* Custom Post Type End */
