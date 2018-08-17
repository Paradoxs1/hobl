<?php get_header(); ?>

    <main>
        <section class="breadcrumbs-block">
            <div class="container clearfix">
                <div class="right">
                    <span>Вы здесь:</span><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </section>
        <section class="inner-content">
            <div class="container clearfix">
                <div class="article left">
                    <p class="inner-title">Новости</p>
                    <div class="article-container">
                        <?php 
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $q = new WP_Query('category_name=news&posts_per_page=6&paged=' . $paged);?>
                            <?php if ( $q->have_posts() ) { ?>
                                <?php while ( $q->have_posts() ) : $q->the_post(); ?>
                                    <div class="article-block">
                                        <a href="<?php echo get_permalink(); ?>" class="article-img">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <a href="<?php echo get_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                                        <div class="article-info">
                                            <span class="date"><?php echo get_the_date('j F Y года'); ?></span><span class="author"><?php echo get_the_author(); ?></span>
                                        </div>
                                        <p><?php echo substr(get_the_excerpt(), 0, -10); ?></p>
                                        <a href="<?php echo get_permalink(); ?>" class="btn-article">Читать далее</a>
                                    </div>
                              <?php
                            endwhile; 
                            } ?>
                    </div>
                     <?php kama_pagenavi(); ?>
                </div>
                <aside class="right">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
    </main>


<?php get_footer();
