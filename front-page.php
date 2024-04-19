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

<main id="primary" class="site site-main site-container">

	<section class="jm__home_carousel">
		<h1>TITLE</h1>
		<h2>SUBTITLE</h1>
	</section>
	<section class="jm__home_categories"></section>
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

	<section class=""></section>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
