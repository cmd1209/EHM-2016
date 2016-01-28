<section class="intro">
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
			<a href="javascript:void(0);" class="menu-activator unstuck">&#9776;</a>
		</div>

		<div class="flex-col flex-stretch">
			<?php $museumImage = wp_get_attachment_url( get_post_thumbnail_id(589) ); ?>
			<div class="intro-key" style="background:url(<?php echo $museumImage; ?>)center center;">
				<a href="<?php echo get_page_link(589); ?>" class="full-area-link"></a>
			</div>
			<a href="<?php echo get_page_link(589); ?>" class="intro-link">Museum</a>
		</div>
		<div class="flex-col flex-stretch">
			<?php $besuchImage = wp_get_attachment_url( get_post_thumbnail_id(297) ); ?>
			<div class="intro-key" style="background:url(<?php echo $besuchImage; ?>)center center;">
				<a href="<?php echo get_page_link(297); ?>" class="full-area-link"></a>
			</div>
			<a href="<?php echo get_page_link(297); ?>" class="intro-link">Ihr Besuch</a>
		</div>
		<div class="flex-col flex-stretch">
			<?php $eventsImage = wp_get_attachment_url( get_post_thumbnail_id(612) ); ?>
			<div class="intro-key" style="background:url(<?php echo $eventsImage; ?>)center center;">
				<a href="<?php echo get_page_link(612); ?>" class="full-area-link"></a>
			</div>
			<a href="<?php echo get_page_link(612); ?>" class="intro-link">Veranstaltungen & <br>Restaurant</a>
		</div>
	</div> <!--end row -->
</section>
