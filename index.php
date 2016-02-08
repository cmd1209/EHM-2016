<?php get_header(); ?>
<section id="content">
  <div class="flex-container">
    <div class="flex-child">
      <?php $museumImage = wp_get_attachment_url( get_post_thumbnail_id(589) ); ?>
      <div class="intro-key" style="background:url(<?php echo $museumImage; ?>)center center;">
        <a href="<?php echo get_page_link(589); ?>" class="full-area-link"></a>
      </div>
      <a href="<?php echo get_page_link(589); ?>" class="intro-link">Museum</a>
    </div>
    <div class="flex-child">
      <?php $besuchImage = wp_get_attachment_url( get_post_thumbnail_id(297) ); ?>
      <div class="intro-key" style="background:url(<?php echo $besuchImage; ?>)center center;">
        <a href="<?php echo get_page_link(297); ?>" class="full-area-link"></a>
      </div>
      <a href="<?php echo get_page_link(297); ?>" class="intro-link">Ihr Besuch</a>
    </div>
    <div class="flex-child">
      <?php $eventsImage = wp_get_attachment_url( get_post_thumbnail_id(612) ); ?>
      <div class="intro-key" style="background:url(<?php echo $eventsImage; ?>)center center;">
        <a href="<?php echo get_page_link(612); ?>" class="full-area-link"></a>
      </div>
      <a href="<?php echo get_page_link(612); ?>" class="intro-link">Veranstaltungen & <br>Restaurant</a>
    </div>
  </div>
  <?php get_footer(); ?>
</section>
