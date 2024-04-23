<?php

/* Custom Categories */
function create_categories()
{
    //create the main category
    wp_insert_term(
        'Covers',
        'category',
        array(
            'slug' => 'cover',
        )
    );
    wp_insert_term(
        'Blogs',
        'category',
        array(
            'slug' => 'blogs',
        )
    );
    wp_insert_term(
        'Courses',
        'category',
        array(
            'slug' => 'courses',
        )
    );
    wp_insert_term(
        'Tutorials',
        'category',
        array(
            'slug' => 'tutorials',
        )
    );
    wp_insert_term(
        'Projects',
        'category',
        array(
            'slug' => 'projects',
        )
    );
    wp_insert_term(
        'IELTS',
        'category',
        array(
            'slug' => 'ielts',
        )
    );




    wp_insert_term(
        'Control Systems 2024',
        'category',
        array(
            'slug' => 'course-control-systems-2024', 
            'parent'=> term_exists( 'Courses', 'category' )['term_id']
        ));
    wp_insert_term(
        'Multi Agent Systems Control 2024',
        'category',
        array(
            'slug' => 'course-mas-systems-2024', 
            'parent'=> term_exists( 'Courses', 'category' )['term_id']
        ));
}
// Hooking up our function to theme setup
add_action('init', 'create_categories');
