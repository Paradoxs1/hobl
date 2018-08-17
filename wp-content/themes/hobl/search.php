<?php get_header(); ?>

  <main>
      <section class="items search-page">
          <div class="container">
                <?php
                  if ( have_posts() ) : ?>
                        <p class="article-title"><?php printf( esc_html__( 'Результат поиска: %s', 'hobl' ), '<span>' . get_search_query() . '</span>' ); ?></p>
                      <?php
            
                      while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/content', 'search' );

                      endwhile;

                  else :

                      get_template_part( 'template-parts/content', 'none' );

                  endif; ?>
          </div>
      </section>
  </main>

<?php get_footer();
