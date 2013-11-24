<?php
$cat    = get_category_by_slug( 'slider-featured' );
$cat_id = $cat->term_id;

$args = array(
    'category' => $cat_id,
    'post_type' => 'attachment',
    'numberposts' => 5
    );

$sliders = get_posts( $args );

?>
            <div class="slider">
                <div id="carousel-generic" class="carousel slide" data-interval="5000">
                    <ol class="carousel-indicators">
                        <?php
                        $n = 0;
                        foreach($sliders as $slider):
                        ?>
                        <li data-target="#carousel-generic" data-slide-to="<?php echo $n ?>" class="<?php echo ($n==0 ? 'active' : '') ?>"></li>
                        <?php $n++; endforeach; ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $n = 0;
                        foreach($sliders as $slider):
                            setup_postdata( $slider );
                        ?>
                        <div class="item<?php echo ($n==0 ? ' active' : '') ?>">
                            <?php
                            $image_attributes = wp_get_attachment_image_src( $slider->ID , 'slider-featured' );
                            ?>
                            <img src="<?php echo $image_attributes[0]; ?>" class="img-responsive" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <?php $n++; endforeach; ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>