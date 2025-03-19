<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jlmayorga
 */

?>
<footer id="colophon" class="footer site-footer">

	<section class="footer__titles">
		<h1>Join the Journey of Continuous Learning</h1>
		<h2>Venture Further into the Intriguing Worlds of Coding, Big Data, AI, IoT, Robotics, and Control Systems. Together, Let's Innovate, Create, and Shape Tomorrow's Tech Landscape!</h2>
		<button>
			<span>Join Now</span>
		</button>
	</section>
	<section class="footer__info">
		<div class="footer_info__col footer_info__col--col0 col--message">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img alt="Logo" src="<?php echo get_template_directory_uri() ?>/images/logo_wide_white_transparent.png">
				</a>
		</div>
		<div class="footer_info__col footer_info__col--col1 col--nav">
			<ul>
				<li class="footer_info__col__title"> Navigation </li>
				<li> <a href="">Projects</a></li>
				<li> <a href="">Tutorials</a></li>
				<li> <a href="">Services</a></li>
				<li> <a href="">Portfolio</a></li>
				<li> <a href="">Events</a></li>
				<li> <a href="">Contact Me</a></li>
			</ul>
		</div>
		<div class="footer_info__col footer_info__col--col2 col--legal">
			<ul>
				<li class="footer_info__col__title"> Legal and Policy </li>
				<li> <a href="">Terms of Use</a></li>
				<li> <a href="">Privacy Policy</a></li>
			</ul>
		</div>
		<div class="footer_info__col footer_info__col--col3 col--follow-us">
			<ul>
				<li class="footer_info__col__title"> Get in touch </li>
				<li> <a href=""> Email: contact@jlmayorga.com </a></li>
				<li> <a href=""> Github: </a></li>
				<li> <a href=""> LinkedIn: </a></li>
				<li> <a href=""> Facebook: </a></li>
				<li> <a href=""> Instagram: </a></li>
				<li> <a href=""> Youtube: </a></li>
				<li> <a href=""> Twitch: </a></li>
			</ul>
		</div>
	</section>
	<section class="footer__copyright">
		<h3>© 2021 – <?php echo date('Y'); ?>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(
				esc_html__(
					'Theme: %1$s by %2$s.',
					'wp-jlmayorga'
				),
				'wp-jlmayorga',
				'<a href="http://jlmayorga.com">jl.mayorga.co@gmail.com</a>'
			);
			?>
		</h3>
	</section>
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>


<script>
	//hljs.highlightAll();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>