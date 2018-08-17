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
                <?php the_content();

                      wp_link_pages( array(
                          'before' => '<div class="page-links">' . esc_html__( 'Страница:', 'hobl' ),
                          'after'  => '</div>',
                      ) );
                  ?>
            </div>
            <aside class="right">
                  <?php get_sidebar(); ?>
            </aside>
        </div>
    </section>
</main>