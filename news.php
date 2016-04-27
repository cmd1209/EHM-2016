<?php /* Template Name: News */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
    <div class="wordpress-import col col--12-of-12">
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
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts();?>
<?php wp_reset_query();?>
<br class="clear">
  </div>

  <div class="col col--12-of-12">

    <?php // the query
    $args = array('post_type' => 'event');
    $the_query = new WP_Query( $args ); ?>
    <div class="page-content row news news-page">
      <?php

      $blogtime = date('Y');
      $prev_limit_year = $blogtime - 1;
      $prev_month = '';
      $prev_year = '';

      $args = array(
        'posts_per_page' => 25,
        'ignore_sticky_posts' => 1
      );

      $postsbymonth = new WP_Query($args);

      while($postsbymonth->have_posts()) {

        $postsbymonth->the_post();

        if(get_the_time('F') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {

          echo "<h2 class=\"news-month col col--12-of-12\">".get_the_time('F, Y')."</h2>\n\n";

        }

        ?>

        <article id="post-<?php the_ID(); ?>" class="col col--4-of-12">
          <?php if (has_post_thumbnail()): ?>
            <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
          <?php else: ?>
          <?php endif; ?>
          <span class="news-date"><?php the_date( 'd. m. Y' ); ?> </span>
          <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="news-text"><?php the_excerpt(); ?></p>
          <br class="clear">
        </article>

        <?php // your other template tags ?>


        <?php

        $prev_month = get_the_time('F');
        $prev_year = get_the_time('Y');

      }

      ?>



    </div>

  </div>
  <?php get_footer(); ?>
</section>
