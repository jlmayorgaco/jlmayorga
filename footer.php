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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics' ), 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics', '<a href="http://jlmayorga.com">jl.mayorga.co@gmail.com</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>

</html>
