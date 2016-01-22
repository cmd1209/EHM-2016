<?php get_header(); ?>
			<main role="main">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<section>
					<div class="row">
						<div class="col col--3-of-12 menuarea-page">
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
						<div class="col col--9-of-12">
							<div class="owl-carousel">
								<?php $archkey = wp_get_attachment_url( get_post_thumbnail_id(252	) ); ?>
								<?php $historykey = wp_get_attachment_url( get_post_thumbnail_id(134	) ); ?>
								<?php $forschungkey = wp_get_attachment_url( get_post_thumbnail_id(454	) ); ?>
								<?php $ausstellungkey = wp_get_attachment_url( get_post_thumbnail_id(98	) ); ?>
									<div class="page-key" style="background:url(<?php echo $archkey; ?>)center center;">
									</div>
									<div class="page-key" style="background:url(<?php echo $historykey; ?>)center center;">
									</div>
									<div class="page-key" style="background:url(<?php echo $forschungkey; ?>)center center;">
									</div>
									<div class="page-key" style="background:url(<?php echo $ausstellungkey; ?>)center center;">
									</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col--4-of-12">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</div>
						<div class="col col--8-of-12">
							<nav class="sub-page-menu">
								<?php global $id; wp_list_pages("title_li=&child_of=$id&show_date=modified&date_format=$date_format&depth=1"); ?>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col col--9-of-12 page-content">
							<h2 class="page-excerpt"><?php the_excerpt(); ?></h2>
							<?php the_content(); ?>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php rewind_posts();?>
					<?php wp_reset_query();?>
						<div class="col col--3-of-12">
							<?php include ("parts/news.php"); ?>
						</div>
					</div>
					</section>
				</main>
				<br class="clear">
<?php get_footer(); ?>
