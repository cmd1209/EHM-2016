<?php get_header(); ?>

<section id="content">
  <div class="page-thumbnail">
		<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
		<div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat top center;"></div>
  </div>
  <div class="page-content row">
    <div class="wordpress-import col col--9-of-12">


			<h1 class="page-title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

      <?php get_template_part('loop-search'); ?>


    </div>
    <aside class="sidebar col col--3-of-12" role="complementary">
      <?php get_sidebar(); ?>
    </aside>


<br class="clear">
  </div>
  <?php get_footer(); ?>
</section>
