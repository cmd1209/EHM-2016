<?php /* Template Name: Events */ get_header(); ?>
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
        <?php
        $blogtime = date('Y');
        $prev_limit_year = $blogtime - 1;
        $prev_month = '';
        $prev_year = '';
        $args = array(
          'post_type' => 'event',
                 'posts_per_page' => 25,
                 'ignore_sticky_posts' => 1
        );
        $postsbymonth = new WP_Query($args);

        while($postsbymonth->have_posts()) {

            $postsbymonth->the_post();

            if(eo_get_the_start('F') != $prev_month || eo_get_the_start('Y') != $prev_year && eo_get_the_start('Y') == $prev_limit_year) {

                           echo "<h2 class=\"col col--12-of-12 news-month\">".eo_get_the_start('F, Y')."</h2>\n\n";
                }
            ?>
            <article id="post-<?php the_ID(); ?>" class="col col--6-of-12">
              <?php if (has_post_thumbnail()): ?>
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
                <div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-page-thumbnail thumbnail-tall"></div>
              <?php else: ?>
              <?php endif; ?>
              <?php printf(eo_get_the_start('d. m. Y')); ?>
              <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="news-text"><?php the_excerpt(); ?></p>
              <br class="clear">
            </article>

                        <?php // your other template tags ?>


            <?php

            $prev_month = eo_get_the_start('F');
            $prev_year = eo_get_the_start('Y');

        }

                ?>

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
