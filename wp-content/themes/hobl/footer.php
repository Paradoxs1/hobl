<?php ?>

        <footer>
            <div class="footer-top">
                <div class="container">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/stetoskop.png" class="stetoskop" alt="стетоскоп" title="стетоскоп"> 
                    <div class="footer-top-content clearfix">
                      <a href="http://integramed.info" class="left"><img src="<?php bloginfo( 'template_url' ); ?>/img/imservice.png"  alt="ИнтеграМедСервис" title="ИнтеграМедСервис"></a>
                        <div>
                            <span>При поддержке</span>
                            <p>ИнтеграМедсервис</p>
                            <span>тел: <a href="tel:<?php echo str_replace(array(" ", "(", ")"), "", ot_get_option('footer-tel')) ?>"><?php echo ot_get_option('footer-tel'); ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'footer_contact',
                        'menu'            => '', 
                        'container'       => false, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="social">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                    <p><?php echo comicpress_copyright(); ?> <?php echo ot_get_option('copyright'); ?></p>
                </div>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
