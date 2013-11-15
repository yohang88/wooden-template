<?php get_header() ?>

<section id="main-wrapper">
    <div id="wrapper" class="container">

        <div id="common-content">
            <div class="main">
                <h1 class="caption">Main</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>

                <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,12) ?>.jpg&amp;w=700&amp;h=500" class="img-responsive" />

                <p align="center"><img src="<?php echo get_template_directory_uri() ?>/img/payment-options.png" width="150px" /></p>
            </div>

            <?php get_sidebar() ?>

        </div>

    </div>
</section>

<?php get_footer() ?>