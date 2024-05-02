<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jlmayorga
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<!-- --------------------------------------------------- -->
<!-- --- HEAD ------------------------------------------ -->
<!-- --------------------------------------------------- -->

<head>

	<!-- --------------------------------------- -->
	<!-- -- META TAGS -------------------------- -->
	<!-- --------------------------------------- -->
	<meta name="robots" content="follow" />
	<meta name="author" content="jl.mayorga.co@gmail.com" />
	<meta name="keywords" content="Angular, JavaScript, TypeScript, React, Vue, Frontend Development, Full Stack Development, UI/UX Design, Responsive Design, Agile Methodologies, Git, HTML, CSS, Node.js, Express.js, Nest.js, RESTful APIs, MySQL, PostgreSQL, MongoDB, Serverless Architecture, Webpack, Testing Frameworks (Jasmine, Karma, Jest, Cypress), DevOps, CI/CD, Docker, AWS, Azure, Heroku, GraphQL, Laravel, Python, Django, Flask, Machine Learning, Robotic Systems, Reinforcement Learning, Control Systems, Distributed Control, Game Theory, Research, Electronic Engineering, Embedded Systems, Raspberry Pi, BeagleBone Black, Sensors, IoT, Remote Sensing, Computer Vision, PID Control, LQR Control, Optimal Control, Dynamical Systems, Replicator Dynamics, Electronic Design, Hardware Integration, Edge Computing, Edge Devices, Data Acquisition, Signal Processing, Algorithm Development, Robotics, Internet of Things (IoT), Cyber-Physical Systems, Simulink, State Machines, Finite State Machines, Real-time Systems, Feedback Control, System Identification, Kalman Filtering, Decision Support Systems, Human-Machine Interaction, Human-Robot Interaction, Autonomous Systems, Swarm Robotics, Mechatronics, Actuators, Kinematics, Dynamics, Embedded C, Firmware Development, Energy Harvesting, Wireless Communication, MQTT, Zigbee, LoRa, Bluetooth, Industrial Automation." />
	<meta name="description" content="Highly skilled and experienced Angular Senior Front End Developer with over 6 years of experience in developing and implementing user-friendly and visually appealing web applications using Angular and other front-end technologies. Strong proficiency in HTML, CSS, and JavaScript. Excellent understanding of responsive design, cross-browser compatibility, and accessibility standards. Proven ability to work in a fast-paced environment and collaborate effectively with cross-functional teams. Strong communication and leadership skills, with experience mentoring junior developers. Demonstrated understanding of the software development life cycle, Agile methodologies, and software development best practices." />
	<meta name="copyright" content="Copyright Jorge Luis Mayorga Taborda" />
	<!-- --------------------------------------- -->

	<!-- --------------------------------------- -->
	<!-- --- META WORDPRESS --------------------- -->
	<!-- --------------------------------------- -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- --------------------------------------- -->

	<!-- --------------------------------------- -->
	<!-- ----WORDPRESS HEAD -------------------- -->
	<!-- --------------------------------------- -->
	<?php wp_head(); ?>
	<!-- --------------------------------------- -->


	<!-- --------------------------------------- -->
	<!-- ----WORDPRESS HEAD -------------------- -->
	<!-- --------------------------------------- -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<!-- --------------------------------------- -->


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/javascript.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>

</head>
<!-- ----------------------------------------------------------------- -->


<!-- --------------------------------------------------- -->
<!-- --- BODY ------------------------------------------ -->
<!-- --------------------------------------------------- -->

<?php
//session_start();
$visited = isset($_SESSION['visited']);
//$_SESSION['visited'] = true;
?>

<body <?php body_class();  ?> is-first-time="<?= $visited ? '' : 'first-visit' ?>" jm-theme="theme--2024" >

	<!-- --------------------------------------------------- -->
	<?php wp_body_open(); ?>
	<!-- --------------------------------------------------- -->

	<!-- -------------------------------------------------- -->
	<!-- --- PAGE ----------------------------------------- -->
	<!-- -------------------------------------------------- -->
	<div id="page" >

		<!-- -------------------------------------------------- -->
		<!-- ----WORDPRESS:: Skip to content ------------------ -->
		<!-- -------------------------------------------------- -->
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics'); ?>
		</a>
		<!-- -------------------------------------------------- -->

		<!-- -------------------------------------------------- -->
		<!-- ---- HEADER -------------------------------------- -->
		<!-- -------------------------------------------------- -->
		<header id="masthead" class="site-header">

			<!-- -------------------------------------------------- -->
			<!-- ---- HEADER::SITE BRANDING ----------------------- -->
			<!-- -------------------------------------------------- -->
			<div class="site-branding jl--logo-circle"  >
				<p class="site-title">
					<a style="text-decoration: none !important;" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<div class="jm__logo">
							<div class="logo__border">
								<div class="logo__content">
									<div class="logo__lt">&#8249;</div>
									<div class="logo__text">jl</div>
									<div class="logo__bt">&#8250;</div>
								</div>
							</div>
						</div>
					</a>
				</p>

				<?php
				$personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description = get_bloginfo('description', 'display');
				if ($personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div>
			<div class="site-branding jl--logo-rectangle" style="display: none;">
				<p class="site-title">
					<a style="text-decoration: none !important;" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<div class="jm__logo">
							<div class="logo__border">
								<div class="logo__content">
									<div class="logo__lt">&#8249;</div>
									<div class="logo__text">jorge.mayorga</div>
									<div class="logo__bt">&#8250;</div>
								</div>
							</div>
						</div>
					</a>
				</p>

				<?php
				$personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description = get_bloginfo('description', 'display');
				if ($personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div>
			<!-- -------------------------------------------------- -->
			<!-- ----- / HEADER::SITE BRANDING -------------------- -->
			<!-- -------------------------------------------------- -->


			<!-- -------------------------------------------------- -->
			<!-- ---- HEADER::HEADER NAVIGATION ------------------- -->
			<!-- -------------------------------------------------- -->
			<nav id="site-navigation" class="main-navigation">
				<ul id="primary-menu" class="main-navigation__nav-list">
					<?php
					$menu = wp_get_nav_menu_items('MenuHome', array('post_parent' => 0));
					foreach ($menu as $item) {
						if (!$item->menu_item_parent) {
					?>
							<li class="nav-list__item">
								<a class="item__link" href="<?php echo ($item->url); ?>">
									<?php echo ($item->title); ?>
								</a>
							</li>
					<?php
						}
					}

					?>
				</ul>
			</nav>
			<!-- -------------------------------------------------- -->
			<!-- ------ / HEADER::HEADER NAVIGATION --------------- -->
			<!-- -------------------------------------------------- -->


		</header>
		<!-- --- /header -------------------------------------- -->