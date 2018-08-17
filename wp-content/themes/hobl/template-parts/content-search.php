<?php ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

	<div class="content-search">
		<?php echo substr(get_the_excerpt(), 0, -10) ?>
	</div>

	
</article>
