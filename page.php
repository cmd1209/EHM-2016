<?php get_header(); ?>
			<main role="main">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<section>
					<div class="row">
						<div class="col col--2-of-12 menuarea-page">
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
						<div class="col col--10-of-12">
							  <?php if (has_post_thumbnail() ): ?>
							      <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							      <div class="hero" style="background:url(<?php echo $featuredImage; ?>)center center;">
							      </div>
							  <?php else: ?>
							     <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
							      <div class="hero" style="background:url(<?php echo $featuredImage; ?>)center center;">
							      </div>
							 <?php endif ?>
						</div>
					</div>
					<div class="row top-row">
						<div class="col col--9-of-12 page-content">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<nav class="sub-page-menu">
								<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) {
$parent_title = get_the_title($post->post_parent);?>
<li><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a></li>
  <?php echo $children; ?>
  <?php } ?>
							</nav>
									<?php if (has_excerpt() ):?>
										<h2 class="page-excerpt"> <?php the_excerpt(); ?> </h2>
									<?php else: ?> <!-- don't display anything because it seems to grab the first paragraph -->
									<?php endif ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php rewind_posts();?>
					<?php wp_reset_query();?>
						</div>
						<div class="col col--3-of-12">
							<?php include ("parts/news.php"); ?>
						</div>
					</div>
					</section>
				</main>
				<br class="clear">
<?php get_footer(); ?>
