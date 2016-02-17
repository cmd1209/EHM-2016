<?php get_header(); ?>
<section id="content">
  <div class="flex-container">
    <div class="flex-child">
      <?php $museumImage = wp_get_attachment_url( get_post_thumbnail_id(589) ); ?>
      <div class="intro-key museum" style="background:url(<?php echo $museumImage; ?>)center center;">
        <a href="<?php echo get_page_link(589); ?>" class="intro-link"><?php echo get_the_title(589); ?></a>
        <a href="<?php echo get_page_link(589); ?>" class="full-area-link"></a>
      </div>
    </div>
    <div class="flex-child">
      <?php $besuchImage = wp_get_attachment_url( get_post_thumbnail_id(297) ); ?>
      <div class="intro-key besuch" style="background:url(<?php echo $besuchImage; ?>)center center;">
        <a href="<?php echo get_page_link(297); ?>" class="intro-link"><?php echo get_the_title(297); ?></a>
        <a href="<?php echo get_page_link(297); ?>" class="full-area-link"></a>
      </div>
    </div>
    <div class="flex-child">
      <?php $eventsImage = wp_get_attachment_url( get_post_thumbnail_id(612) ); ?>
      <div class="intro-key veranstaltungen" style="background:url(<?php echo $eventsImage; ?>)center center;">
        <a href="<?php echo get_page_link(612); ?>" class="intro-link"><?php echo get_the_title(612); ?></a>
        <a href="<?php echo get_page_link(612); ?>" class="full-area-link"></a>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</section>
