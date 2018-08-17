<?php ?>
    <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="breadcrumbs-block">
            <div class="container clearfix">
                <div class="right">
                    <span>Вы здесь:</span><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </section>
        <section class="inner-content article-page">
            <div class="container clearfix">
                <div class="article left">
                    <?php
                        if ( is_single() ) :
                            the_title( '<p class="inner-title">', '</p>' );
                        else :
                            the_title( '<p class="inner-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
                        endif; ?>

                      <div class="article-info">
                          <span class="date"><?php echo get_the_date('j F Y года'); ?></span><span class="author"><?php echo get_the_author(); ?></span>
                      </div>

                      <div class="article-content">
                            <?php
                                the_content( sprintf(

                                    wp_kses( __( '<span class="meta-nav">&rarr;</span>', 'hobl' ), array( 'span' => array( 'class' => array() ) ) ),
                                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Страница:', 'hobl' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                      </div>
                  </div>
                  <aside class="right">
                      <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
    </main>