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
        <?php // the query
        $args = array('post_type' => 'event');
        $the_query = new WP_Query( $args ); ?>
          <div class="col col--6-of-12 news">
            <?php $i = 0; if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  if ($i % 2 == 0): ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <h3><?php printf(eo_get_the_start('d/m/Y')); ?></h3>
                <span class="news-date"><?php printf(eo_get_the_start("G:i")); ?> - <?php printf(eo_get_the_end("G:i")); ?></span>


                <?php if (has_post_thumbnail()): ?>
                  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
                  <div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail thumbnail-tall"></div>
                <?php else: ?>
                <?php endif; ?>
                    <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="news-text"><?php the_excerpt(); ?></p>
                    <br class="clear">
              </article>
            <?php  endif; $i++; ?>
          <?php endwhile; endif; ?>
          </div>
          <div class="col col--6-of-12 news">
            <?php $i = 0; if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  if ($i % 2 == 1): ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <h3><?php printf(eo_get_the_start('d/m/Y')); ?></h3>
                <span class="news-date"><?php printf(eo_get_the_start("G:i")); ?> - <?php printf(eo_get_the_end("G:i")); ?></span>


                <?php if (has_post_thumbnail()): ?>
                  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
                  <div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail thumbnail-tall"></div>
                <?php else: ?>
                <?php endif; ?>
                    <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="news-text"><?php the_excerpt(); ?></p>
                    <br class="clear">
              </article>
            <?php  endif; $i++; ?>
            <?php endwhile; endif; ?>
          </div>
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