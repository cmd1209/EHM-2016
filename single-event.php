<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section id="content">
  <div class="page-thumbnail">
      <?php if (has_post_thumbnail() ): ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat top center;"></div>
      <?php else: ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
        <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>)no-repeat top center;"></div>
      <?php endif ?>
  </div>
  <div class="page-content row">
    <div class="wordpress-import col col--9-of-12">
      <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (has_excerpt() ):?>
          <h2 class="page-excerpt"> <?php the_excerpt(); ?> </h2>
        <?php else: ?> <!-- don't display anything because it seems to grab the first paragraph -->
        <?php endif ?>
        <?php the_content(); ?>
    </div>
    <aside class="sidebar col col--3-of-12" role="complementary">
      <?php get_sidebar(); ?>
    </aside>
  <?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts();?>
<?php wp_reset_query();?>
<br class="clear">
  </div>
  <?php get_footer(); ?>
</section>
