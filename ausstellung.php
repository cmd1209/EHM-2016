<?php /* Template Name: Austellung */ get_header(); ?>
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
      <nav class="sub-page-menu">
        <?php
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
        if ($children) {
          $parent_title = get_the_title($post->post_parent);?>
          <?php if ($post->post_parent): ?>
            <li class="sub-page-menu-parent"><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a></li>
            <?php echo $children; ?>
            <?php else: ?>
            <?php echo $children; ?>
          <?php endif; ?>
          <?php } ?>
        </nav>
        <?php if (has_excerpt() ):?>
          <h2 class="page-excerpt"> <?php the_excerpt(); ?> </h2>
        <?php else: ?> <!-- don't display anything because it seems to grab the first paragraph -->
        <?php endif ?>
        <?php the_content(); ?>
        <?php $besuchImage = wp_get_attachment_url( get_post_thumbnail_id(297) ); ?>
        <div class="rundgang-preview" style="background:url(<?php echo $besuchImage; ?>)center center;">
          <a href="#" class="rundgang-start"></a>
          <i class="fa fa-play-circle rundgang-button"></i>
        </div>
        <div class="rundgang rundgang-hidden">
          <a href="#" class="rundgang-close"><i class="fa fa-times"></i></a>
          <div class="owl-carousel">
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room1"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room1name"); ?></h2>
              <h5><?php the_field("room1text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room2"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room2name"); ?></h2>
              <h5><?php the_field("room2text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room3"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room3name"); ?></h2>
              <h5><?php the_field("room3text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room4"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room4name"); ?></h2>
              <h5><?php the_field("room4text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room5"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room5name"); ?></h2>
              <h5><?php the_field("room5text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room6"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room6name"); ?></h2>
              <h5><?php the_field("room6text"); ?></h5>
            </div>
            <div class="room">
              <div class="slide" style="background:url(<?php the_field("room7"); ?>)no-repeat center center;"></div>
              <h2><?php the_field("room7name"); ?></h2>
              <h5><?php the_field("room7text"); ?></h5>
            </div>
          </div>
        </div>
        <div class="overlay"></div>
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
