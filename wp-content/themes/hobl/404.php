<?php get_header(); ?>
    <main>
        <section class="error-404 not-found">
            <div class="container">
                <p class="article-title"><?php esc_html_e( 'Оой 404! Данной страницы не существует.', 'hobl' ); ?></p>
                <img src="<?php bloginfo( 'template_url' ); ?>/img/error-404.png" alt="">
            </div>  
        </section>
    </main>
<?php get_footer();