<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jlmayorga
 */

get_header();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />




<main id="primary" class="site site-main site-container">

	<section class="jm__home_carousel">
		<?php include_once(get_template_directory().'/components/home-cover.component.php'); ?>
	</section>

	<section class="jm__home_categories">
		<?php include_once(get_template_directory().'/components/home-categories.component.php'); ?>
	</section>

	<section class="jm__home_articles">
		<ul class="on-recent">
			<li></li>
		</ul>
		<ul class="on-trending">
			<li>

			</li>
		</ul>
	</section>

	<section class="jm_home__projects">
	</section>

	<section class="jm_home__up_coming_events">
	</section>

	<section class="jm_home__about_me">
	</section>


</main><!-- #main -->


<?php
//get_sidebar();
get_footer();

