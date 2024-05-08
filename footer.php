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
		<div class="footer_info__col footer_info__col--col0 col--message"></div>
		<div class="footer_info__col footer_info__col--col1 col--nav">
			Home
			Work
			NEW
			Services
			Careers
			Sectors
			Hex Test
			Contact
		</div>
		<div class="footer_info__col footer_info__col--col2 col--legal"></div>
		<div class="footer_info__col footer_info__col--col3 col--follow-us">

			Get in touch
			01942 894 596
			hello@madebyshape.co.uk
			MadeByShape 
			1 Gibfield Park Avenue 
			Atherton Manchester 
			M46 0SU

			///topped.little.pirate

		</div>
	</section>
	<section class="footer__copyright">
		<h3>© 2021–<?= date('Y'); ?>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics'), 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics', '<a href="http://jlmayorga.com">jl.mayorga.co@gmail.com</a>');
			?>
		</h3>
	</section>
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>


<script>
	hljs.highlightAll();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>