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
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Java Wooden Handicraft" width="380px" />
                <div class="social-network">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/share-fb.png" alt="Facebook" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/share-twitter.png" alt="Twitter" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/share-gplus.png" alt="Google Plus" />
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/share-youtube.png" alt="Youtube" />
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php">About Us</a></li>
                    <li><a href="index.php">Order</a></li>
                    <li><a href="index.php">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>