<?php get_header() ?>
<header>
    <div class="container">
        <div class="site-logo">
            <div class="inner">
                <h1>Wooden Handicraft</h1>
                <h2>Natural Living of Art</h2>
            </div>
        </div>
    </div>
</header>
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
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=540&amp;h=300" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=540&amp;h=300" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=540&amp;h=300" class="img-responsive" />
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
                        <div>Testing</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div>Testing</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div>Testing</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="outer">
                    <div class="inner">
                        <div>Testing</div>
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
                        <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" />
                    </div>   
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=300&amp;h=300" class="img-responsive" />
                    </div>                                      
                </div>
            </div>
            <div class="sidebar">
                <div class="widget">
                    <h1 class="caption">Sidebar</h1>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>                    
                </div>
                <div class="widget">
                    <h1 class="caption">Sidebar</h1>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>                    
                </div>                
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>                