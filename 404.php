<?php get_header(); ?>
<section id="content">
  <div class="page-thumbnail">
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat top center;"></div>
  </div>
  <div class="page-content row" id="post-404">
    <div class="wordpress-import col col--9-of-12">
      <h1 class="page-title"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
			<h2>
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
			</h2>
    </div>
    <aside class="sidebar col col--3-of-12" role="complementary">
      <?php get_sidebar(); ?>
    </aside>
<br class="clear">
  </div>
  <?php get_footer(); ?>
</section>
