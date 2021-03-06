<?php get_header(); ?>

  <div class="col col--10-of-12 col--m-2-of-3 col--s-1-of-1">
    <section class="row">
      <div class="col col--4-of-12">
          <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
          <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
      </div>
      <div class="col col--8-of-12 page-content">
        <h1 class="page-title">News</h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
      </div>
      </section>

  <br class="clear">
  <?php get_footer(); ?>
