<?php get_header() ?>

<section id="main-wrapper">
    <div id="wrapper" class="container">
        <div id="common-about">
            <div class="content">
                <h1 class="ribbon">Tentang Kami</h1>
                <img width="200" src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=200&amp;h=200" class="circle aligncenter" />
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
                <div class="clearfix"></div>
            </div>
            <div class="slider">
                <div id="carousel-generic" class="carousel slide" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/featured-<?php echo rand(1,5) ?>.jpg&amp;w=540&amp;h=380" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/featured-<?php echo rand(1,5) ?>.jpg&amp;w=540&amp;h=380" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/featured-<?php echo rand(1,5) ?>.jpg&amp;w=540&amp;h=380" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
        <div id="common-productcategories">
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div><a href="index.php?cat=1">Wooden Bicycle</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div><a href="index.php?cat=1">Wooden Accessories</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div><a href="index.php?cat=1">Wooden Interior</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div><a href="index.php?cat=1">Wooden Toys</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="common-content">
            <div class="main">
                <h1 class="caption">Main</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
                <div class="productgallery">
                    <div class="item">
                        <a href="index.php?cat=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" /></a>
                    </div>
                    <div class="item">
                        <a href="index.php?cat=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" /></a>
                    </div>
                    <div class="item">
                        <a href="index.php?cat=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" /></a>
                    </div>
                    <div class="item">
                        <a href="index.php?cat=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" /></a>
                    </div>
                </div>
            </div>

            <?php get_sidebar() ?>

        </div>
    </div>
</section>

<?php get_footer() ?>