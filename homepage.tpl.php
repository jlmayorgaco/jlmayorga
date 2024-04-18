<?php
/**
 * Template Name: Custom Homepage
 */

get_header(); ?>


<h1>Portfolio</h1>

<div>
  <?php    
  if ( have_posts() ) :    
     while ( have_posts() ) : the_post();
       the_content();
     endwhile;
  endif;   
  ?>  
</div>

<div>
  <?php
  $wp_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish'
  ));
  if ( $wp_query->have_posts() ) :
    while ( $wp_query->have_posts() ) : $wp_query->the_post();
      the_title();
      /* Post loop content goes here */    
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>

<?php get_footer(); ?>