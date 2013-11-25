<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="site-logo">
            <div class="inner">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Java Wooden Handicraft" />
                <div class="social-network">

                    <?php $check = get_option('social_fb'); if(!empty($check)): ?>
                    <a href="<?php echo get_option('social_fb') ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-fb.png" alt="Facebook" />
                    </a>
                    <?php endif; ?>

                    <?php $check = get_option('social_pinterest'); if(!empty($check)): ?>
                    <a href="<?php echo get_option('social_pinterest') ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-pinterest.png" alt="Pinterest" />
                    </a>
                    <?php endif; ?>

                    <?php $check = get_option('social_twitter'); if(!empty($check)): ?>
                    <a href="<?php echo get_option('social_twitter') ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-twitter.png" alt="Twitter" />
                    </a>
                    <?php endif; ?>

                    <?php $check = get_option('social_gplus'); if(!empty($check)): ?>
                    <a href="<?php echo get_option('social_gplus') ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-gplus.png" alt="Google Plus" />
                    </a>
                    <?php endif; ?>

                    <?php $check = get_option('social_youtube'); if(!empty($check)): ?>
                    <a href="<?php echo get_option('social_youtube') ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-youtube.png" alt="Youtube" />
                    </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'      => 'nav navbar-nav',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ) ); ?>
            </div>
        </nav>
    </div>
</header>