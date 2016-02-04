<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="col col--10-of-12 col--m-2-of-3 col--s-1-of-1">
    <section class="row">
      <div class="col col--4-of-12">
        <?php if (has_post_thumbnail() ): ?>
          <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
          <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
        <?php else: ?>
          <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
          <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
        <?php endif ?>
      </div>
      <div class="col col--6-of-12 page-content">
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
        </div>
        <div class="col col--2-of-12">
          <?php get_sidebar(); ?>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php rewind_posts();?>
  <?php wp_reset_query();?>
  <br class="clear">
  <?php get_footer(); ?>
