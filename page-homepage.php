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

	<main id="primary" class="site-main">

		<section class="carousel"></section>
		<section class="categories"></section>
		<section class="articles">
			<ul class="the_lastes">
				<li></li>
			</ul>
			<ul class="on-trending">
				<li>
					
				</li>
			</ul>
		</section>
		<section class="projects">
			
		</section>
		<section class="up_coming_events">

		</section>
		<section class="about_me">

		</section>
		
		<section class=""></section>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
