<section class="intro">

		<nav class="nav slidedown" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>

	<div class="flex-row">
		<div class="flex-col menuarea">
			<nav class="nav language">
				<?php service_nav(); ?>
			</nav>
			<?php get_template_part('searchform'); ?>
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
				</a>
			</div>
			<a href="javascript:void(0);" class="menu-activator">&#9776;</a>
		</div>

		<div class="flex-col flex-stretch">
			<div class="intro-key" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2016/01/WH1607-3019.jpg)no-repeat center center;"></div>
			<a href="#" class="intro-link">Museum</a>
		</div>
		<div class="flex-col flex-stretch">
			<div class="intro-key" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2016/01/WH1607-4582.jpg)no-repeat center center;"></div>
			<a href="#" class="intro-link">Ihr Besuch</a>
		</div>
		<div class="flex-col flex-stretch">
			<div class="intro-key" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2016/01/WH1607-4949_1.jpg)no-repeat center center;"></div>
			<a href="#" class="intro-link">Veranstaltungen & <br>Restaurant</a>
		</div>
	</div> <!--end row -->
</section>
