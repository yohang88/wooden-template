<?php get_header() ?>

<section id="main-wrapper">
    <div id="wrapper" class="container">
        <div id="common-content">
            <div class="main page">
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <h1 class="ribbon"><?php the_title(); ?></h1>

                    <?php the_content(); ?>

                    <?php endwhile; ?>
                    <hr />
                    <h3>Related Articles</h3>
                        <ul>
                        <?php
                            $cat    = get_category_by_slug( 'blog' );
                            $cat_id = $cat->term_id;
                            $args = array(
                                        'category' => $cat_id,
                                        'numberposts' => 5,
                                    );

                            $recent_posts = get_posts( $args );
                            foreach($recent_posts as $post):
                                setup_postdata( $post );
                        ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                        <?php endforeach; ?>
                        </ul>

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>


        </div>
    </div>
</section>

<?php get_footer() ?>