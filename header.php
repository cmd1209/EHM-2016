<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
				<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
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

				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-10932812-6', 'hansemuseum.eu');
				  ga('send', 'pageview');

				</script>


	</head>
	<body <?php body_class(); ?>>
		<!-- <div class="cookie-jar">
			<div class="cookie-box">
				<p>
					We use cookies to ensure the best experience on our website - by using this site or closing this message you're agreeing to our cookies policy.
				</p>
				<a href="#" class="button" id="cookie-accept">accept</a>
			</div>
		</div> -->
		<!-- wrapper -->
			<nav class="nav slidedown" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
		<div class="wrapper stage">
			<div class="searchwrapper">
				<?php get_template_part('searchform'); ?>
			</div>

			<!-- <div class="english-tooltip">
				<h6>
					We are working hard to bring our non-German speakers the best experience possible. Please visit us again shortly and we should have everything up-to-date.
				</h6>
			</div> -->

			<?php if(is_home() ): ?>
				<header class="extrawide">
			<?php else: ?>
				<header>
			<?php endif; ?>


					<div class="header-child orderA ">
						<nav class="nav language mobile-right">
							<?php service_nav(); ?>
							<div class="social">
								<a href="#"><i class="fa fa-search search-icon"></i></a>
								<a href="https://www.facebook.com/hansemuseum/timeline"><i class="fa fa-facebook"></i></a>
								<?php $currentlang = get_bloginfo('language'); if($currentlang=="de-DE"): ?>
									<a href="<?php echo get_page_link(162); ?>"><i class="fa fa-envelope-o"></i></a>
								<?php else: ?>
									<a href="<?php echo get_page_link(185); ?>"><i class="fa fa-envelope-o"></i></a>
								<?php endif; ?>
							</div>
						</nav>
					</div>
					<div class="header-child orderB">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-vert.svg" alt="Logo" class="logo-img">
							</a>
						</div>
					</div>
					<div class="header-child orderC">
						<a href="#" class="menu-activator"><i class="fa fa-bars"></i></a>
					</div>
			</header>
