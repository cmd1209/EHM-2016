<?php get_header(); ?>
<section id="content" class="row">
      <div class="col col--4-of-12">
          <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(252) ); ?>
          <div class="page-hero" style="background:url(<?php echo $featuredImage; ?>);"></div>
      </div>
      <div class="col col--8-of-12">
          <!-- <h1 class="page-title">Programm</h1>
 -->

          <div class="row">
            <div class="col col--4-of-8">
              <?php include("parts/program-single-day.php"); ?>
            </div>
            <div class="col col--4-of-8">
              <?php include("parts/news.php"); ?>


            </div>
          </div>


      </div>
      <br class="clear">
      <?php get_footer(); ?>
</section>
