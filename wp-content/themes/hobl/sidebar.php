<div class="popular-article">
    <p class="article-title">Популярные статьи</p>
      <?php
        $args = array(
            'category_name' => 'blog-stati',
            'posts_per_page' => 3,
            'meta_key'    => 'post_views_count',
            'orderby'     => 'meta_value_num',
            'order'       => 'DESC'
        );
        query_posts( $args );
        while ( have_posts() ) : the_post();
            ?>
            <div class="aside-article">
                <a href="<?php echo get_permalink(); ?>" class="article-img">
                    <?php the_post_thumbnail('full'); ?>
                </a>
                <a href="<?php echo get_permalink(); ?>" class="article-title"><?php the_title(); ?></a>

                <p><?php echo substr(get_the_excerpt(), 0, -253) . "..."; ?></p>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
</div>
<div class="last-article">
    <p class="article-title">Последние новости</p>
    
    <?php 
      $q = new WP_Query('category_name=news&posts_per_page=2');?>
      <?php if ( $q->have_posts() ) { ?>
          <?php while ( $q->have_posts() ) : $q->the_post(); ?>
              <div class="aside-article">
                  <a href="<?php echo get_permalink(); ?>" class="article-img">
                      <?php the_post_thumbnail('full'); ?>
                  </a>
                  <a href="<?php echo get_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                 
                  <p><?php echo substr(get_the_excerpt(), 0, -253) . "..."; ?></p>
              </div>
        <?php
      endwhile; 
      } ?>
</div>