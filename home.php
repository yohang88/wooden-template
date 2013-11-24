<?php get_header() ?>

<section id="main-wrapper">
    <div id="wrapper" class="container">
        <div id="common-about">
            <div class="content">
<?php

$page = get_posts(
    array(
        'name'      => 'home',
        'post_type' => 'page'
    )
);

$home_title   = $page[0]->post_title;
$home_content = $page[0]->post_content;

?>
                <h1 class="ribbon"><?php echo $home_title ?></h1>
                <?php echo $home_content ?>
                <div class="clearfix"></div>
            </div>

            <?php get_template_part('inc/carousel') ?>

        </div>

        <?php get_template_part('inc/category-thumb') ?>

        <div id="common-content">
            <div class="main">
                <h1 class="caption">Featured Product</h1>
                <div class="productgallery">

<?php

$cat_selected = array(
    'wooden-bicycle',
    'wooden-fashion',
    'wooden-interior',
    'wooden-toys',
    'wooden-hobbies',
);

$cat    = get_category_by_slug( 'product-featured' );
$cat_id = $cat->term_id;

$args = array(
    'category' => $cat_id,
    'numberposts' => 4
    );

$myposts = get_posts( $args );

foreach($myposts as $post):

    setup_postdata( $post );

    $meta         = get_post_meta( get_the_ID() );
    $price_normal = $meta['price'][0];
    $price_sale   = $meta['price_sale'][0];

    $categories   = get_the_category();

    foreach($categories as $category) {

        if(in_array($category->slug, $cat_selected))
            $post_category_link = get_category_link($category->term_id);

    }

    $img_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'product-thumb');

?>
                    <div class="item">
                        <a href="<?php echo $post_category_link ?>">
                            <img src="<?php echo $img_thumb ?>" class="img-responsive" />
                        </a>
                        <div class="meta-product">
                            <div class="row">
                                <div class="col-sm-6 meta-product-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="col-sm-6 meta-product-price<?php echo (isset($price_sale) ? ' sale' : '') ?>">
                                    <span class="price_normal"><?php echo $price_normal ?></span><br />
                                    <span class="price_sale"><?php echo $price_sale ?></span>
                                </div>
                            </div>
                        </div>
                        <?php if(has_category('best-seller')): ?>
                        <div class="tag-special best-seller" onclick="location.href='<?php echo $post_category_link ?>'"></div>
                        <?php endif; ?>
                    </div>

<?php endforeach; ?>

                </div>
            </div>

            <?php get_sidebar() ?>

        </div>
    </div>
</section>

<?php get_footer() ?>