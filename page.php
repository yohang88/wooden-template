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

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>