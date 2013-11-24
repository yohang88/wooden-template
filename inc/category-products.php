        <div id="common-about">
            <div class="content">
                <h1 class="ribbon"> <?php single_cat_title() ?> </h1>
                 <?php echo category_description() ?>
                <div class="clearfix"></div>
            </div>

            <?php get_template_part('inc/carousel') ?>

        </div>

        <?php get_template_part('inc/category-thumb') ?>

<?php

$page = get_posts(
    array(
        'name'      => 'order',
        'post_type' => 'page'
    )
);

$order_page_id   = $page[0]->ID;
$order_page_link = get_page_link($order_page_id);

?>
        <div id="common-content">
            <div class="main category">
                <h1 class="caption">Product</h1>

                <?php if ( have_posts() ) : ?>

                <div class="productgallery category">

                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                        $meta         = get_post_meta( get_the_ID() );
                        $price_normal = $meta['price'][0];
                        $price_sale   = $meta['price_sale'][0];
                    ?>

                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#modal-product-<?php the_ID() ?>">
                            <?php the_post_thumbnail( 'product-thumb', array('class' => 'img-responsive') ); ?>
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
                        <div class="tag-special best-seller" onclick="$('#modal-product-<?php the_ID() ?>').modal('show')"></div>
                        <?php endif; ?>
                    </div>

                    <div class="item-modal modal fade" id="modal-product-<?php the_ID() ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog product">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="#product-<?php the_ID() ?>-label">Java Wooden Handicraft</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <aside class="preview">
                                                <?php
                                                if (class_exists('MultiPostThumbnails')):
                                                    $img_full_1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'product-thumb');
                                                    $img_thumb_1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'product-thumb-mini');

                                                    $img_full_2 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-2', get_the_ID(), 'product-thumb');
                                                    $img_thumb_2 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-2', get_the_ID(), 'product-thumb-mini');

                                                    $img_full_3 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-3', get_the_ID(), 'product-thumb');
                                                    $img_thumb_3 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-3', get_the_ID(), 'product-thumb-mini');

                                                    $img_full_4 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-4', get_the_ID(), 'product-thumb');
                                                    $img_thumb_4 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-4', get_the_ID(), 'product-thumb-mini');

                                                    $img_full_5 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-4', get_the_ID(), 'product-thumb');
                                                    $img_thumb_5 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'product-image-4', get_the_ID(), 'product-thumb-mini');

                                                ?>

                                                <img class="main-photo img-responsive" src="<?php echo $img_full_1[0] ?>" alt="Alt title of image">
                                                <p class="caption"></p>
                                                <div class="productphotos-nav">
                                                    <?php if(!empty($img_full_1[0])): ?>
                                                    <a href="<?php echo $img_full_1[0] ?>">
                                                        <img src="<?php echo $img_thumb_1[0] ?>" title="Side 1 of the shoe" alt="Side 1 of the shoe">
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php if(!empty($img_full_2)): ?>
                                                    <a href="<?php echo $img_full_2 ?>">
                                                        <img src="<?php echo $img_thumb_2 ?>" title="Side 2 of the shoe" alt="Side 2 of the shoe">
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php if(!empty($img_full_3)): ?>
                                                    <a href="<?php echo $img_full_3 ?>">
                                                        <img src="<?php echo $img_thumb_3 ?>" title="Side 3 of the shoe" alt="Side 3 of the shoe">
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php if(!empty($img_full_4)): ?>
                                                    <a href="<?php echo $img_full_4 ?>">
                                                        <img src="<?php echo $img_thumb_4 ?>" title="Side 4 of the shoe" alt="Side 4 of the shoe">
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php if(!empty($img_full_5)): ?>
                                                    <a href="<?php echo $img_full_5 ?>">
                                                        <img src="<?php echo $img_thumb_5 ?>" title="Side 5 of the shoe" alt="Side 5 of the shoe">
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </aside>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2><?php the_title(); ?></h2>

                                            <div class="product-tag" style="margin-bottom: 10px">
                                            <?php if(has_category('best-seller')) echo '<h4 style="display:inline-block"><span class="label label-success">Best Seller</span></h4>' ?>
                                            <?php if(!empty($price_sale)) echo '<h4 style="display:inline-block"><span class="label label-danger">On Sale</span></h4>' ?>
                                            </div>
                                            <?php the_content(); ?>

                                            <?php if(isset($price_normal)): ?>
                                            <div class="row price-detail <?php echo (isset($price_sale) ? 'sale' : '') ?>">
                                                <div class="col-xs-6 price-normal">
                                                    <?php echo $price_normal ?>
                                                </div>
                                                <div class="col-xs-6 price-sale">
                                                    <?php echo $price_sale ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <a onclick="$('#modal-product-<?php the_ID() ?>').modal('hide')" href="<?php echo $order_page_link ?>" class="btn btn-default btn-order">Order</a>

                                            <div class="social-network">
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-fb.png" alt="Facebook" width="16px" />
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-pinterest.png" alt="Pinterest" width="16px" />
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-twitter.png" alt="Twitter" width="16px" />
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-gplus.png" alt="Google Plus" width="16px" />
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/brown-share-youtube.png" alt="Youtube" width="16px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>

                <?php theme_paging_nav() ?>

                <?php else : ?>
                    <p>Tidak ada data.</p>
                <?php endif; ?>

            </div>
        </div>
