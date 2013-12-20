<?php get_header() ?>
        <div id="common-content">
            <div class="main page">
                <h1 class="ribbon">Blog</h1>

                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                    <?php the_content(); ?>

                    <hr />
                    <?php endwhile; ?>

                    <div style="margin: 25px 0">
                        <?php theme_paging_nav() ?>
                    </div>
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer() ?>