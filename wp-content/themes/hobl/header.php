<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content="">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
    <?php if(is_front_page() && is_home() )  { ?>
    <header class="home">
        <div class="container clearfix">
            <a href="/" class="logo">хобл</a>
            <form action="/" method="get" class="right search">
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Поиск.."><button type="submit" class="right"></button>
            </form>
            <div class="toggle-block right">
                <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
            </div>
            <div class="clearfix">
                <div class="lungs left">
                    <p><?php echo ot_get_option("text"); ?></p>
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/lungs.png" alt="Легкие" title="Легкие">
                </div>
                <nav class="right">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'main_menu',
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
                        'items_wrap'      => '<ul class="menu">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                </nav>
            </div>
        </div>
    </header>
    <?php } else {?>
    <header class="inner">
            <div class="container clearfix">
                <a href="/" class="logo left"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-inner.jpg" alt="Логотип"> <span>хобл</span></a>
                <div class="head-social">
                    <span>Мы в социальных сетях</span>
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'header_contact',
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
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                </div>
                <div class="right">
                    <div class="toggle-block">
                        <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
                    </div>
                    <form action="/" method="get" class="search">
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Поиск.."><button type="submit" class="right"></button><span class="search-close"></span>
                    </form>
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'main_menu',
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
                        'items_wrap'      => '<ul class="menu">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                </div>
            </div>
        </header>
    <?php } ?>