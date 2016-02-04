<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl/owl.carousel.min.js"></script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<nav class="nav slidedown" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
		</div>
		<div class="wrapper">
			<div class="stage">  <!-- begin stage,-->
				<div class="row">
					<div class="col col--2-of-12 col--m-1-of-3">
						<div class="sliding-header">
							<div class="service-container">
								<nav class="nav language">
									<?php service_nav(); ?>
								</nav>
								<?php get_template_part('searchform'); ?>
								<p class="opening-hours">Täglich geöffnet</br>(außer 24. Dezember)</p>
								<p class="opening-hours">April – Oktober:</br>10.00 – 18.00 Uhr</p>
								<p class="opening-hours">November-März:</br>10.00 – 17.00 Uhr</p>

							</div>
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<div class="service-container calendar">
							<?php echo do_shortcode('[eo_calendar]'); ?>
						</div>
						<a href="javascript:void(0);" class="menu-activator">&#9776;</a>
					</div>
					</div> <!-- end of actuall header elements -->
