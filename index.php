<?php get_header(); ?>
<section id="startcontent">
<?php $currentlang = get_bloginfo('language'); if($currentlang=="de-DE"): ?>
  <div class="flex-container intro-columns">
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
<?php else: ?>
  <div class="flex-container">
    <div class="flex-child">
      <?php $museumImage = wp_get_attachment_url( get_post_thumbnail_id(814) ); ?>
      <div class="intro-key museum" style="background:url(<?php echo $museumImage; ?>)center center;">
        <a href="<?php echo get_page_link(814); ?>" class="intro-link"><?php echo get_the_title(814); ?></a>
        <a href="<?php echo get_page_link(814); ?>" class="full-area-link"></a>
      </div>
    </div>
    <div class="flex-child">
      <?php $besuchImage = wp_get_attachment_url( get_post_thumbnail_id(410) ); ?>
      <div class="intro-key besuch" style="background:url(<?php echo $besuchImage; ?>)center center;">
        <a href="<?php echo get_page_link(410); ?>" class="intro-link"><?php echo get_the_title(410); ?></a>
        <a href="<?php echo get_page_link(410); ?>" class="full-area-link"></a>
      </div>
    </div>
    <div class="flex-child">
      <?php $eventsImage = wp_get_attachment_url( get_post_thumbnail_id(816) ); ?>
      <div class="intro-key veranstaltungen" style="background:url(<?php echo $eventsImage; ?>)center center;">
        <a href="<?php echo get_page_link(816); ?>" class="intro-link"><?php echo get_the_title(816); ?></a>
        <a href="<?php echo get_page_link(816); ?>" class="full-area-link"></a>
      </div>
    </div>
  </div>
<?php endif; ?>
  <?php get_footer(); ?>
</section>
