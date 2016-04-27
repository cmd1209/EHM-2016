<?php get_header(); ?>
<section id="content">
  <div class="page-thumbnail">
      <?php if (has_post_thumbnail() ): ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;"></div>
      <?php else: ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;"></div>
      <?php endif ?>
  </div>
  <div class="page-content row">
    <div class="wordpress-import col col--9-of-12">
      <h1 class="page-title">Events</h1>
      <?php include("parts/program-single-day.php"); ?>
    </div>
    <aside class="sidebar col col--3-of-12" role="complementary">
      <?php get_sidebar(); ?>
<br class="clear">
  </div>
  <?php get_footer(); ?>
</section>
