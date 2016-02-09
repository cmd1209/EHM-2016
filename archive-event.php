<?php get_header(); ?>
<section id="content" >
  <div class="page-thumbnail">
      <?php if (has_post_thumbnail() ): ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
      <?php else: ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
      <?php endif ?>
  </div>
  <div class="page-content row">
    <div class="col col--6-of-12">
      <?php include("parts/program-single-day.php"); ?>
    </div>
    <div class="col col--6-of-12">
      <?php include("parts/news.php"); ?>
    </div>
  </div>
  <br class="clear">
  <?php get_footer(); ?>
</section>
