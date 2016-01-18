<?php get_header(); ?>
			<main role="main">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<section>
					<div class="row">
						<div class="col col--3-of-12"></div>
						<div class="col col--9-of-12">
							<?php if (has_post_thumbnail() ): ?>
								<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							    <div class="hero" style="background:url(<?php echo $featuredImage; ?>)center center;">
							    </div>
							  <?php else: ?>

							 <?php endif ?>
						</div>
					</div>
					<div class="row">
						<div class="col col--9-of-12">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php rewind_posts();?>
				<?php wp_reset_query();?>
						<div class="col col--3-of-12">
							<?php include ("parts/news.php"); ?>
						</div>
					</section>
				</main>
				<br class="clear">
<?php get_footer(); ?>
