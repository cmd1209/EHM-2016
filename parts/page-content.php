<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="col col--12-of-12">
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
  <?php endwhile; ?>
<?php endif; ?>
<?php rewind_posts();?>
<?php wp_reset_query();?>
</div>
