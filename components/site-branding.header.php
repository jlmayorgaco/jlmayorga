<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img alt="Logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png">
						</a>
					</p>
					<?php
				endif;
				$personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description = get_bloginfo( 'description', 'display' );
				if ( $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>