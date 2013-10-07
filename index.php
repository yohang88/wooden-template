<?php get_header() ?>

                <div id="primary" class="column">
                    <div id="primary-content" class="article">
                        <div class="section">

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php for($n=0; $n<6; $n++): ?>
                                <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Eli</a></h1>
                                <p class="post-author">Oleh: <a href="#">Yoga Hanggara</a></p>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget purus id velit varius pellentesque in non dolor. Maecenas euismod pellentesque tellus nec ultricies. Donec mattis faucibus turpis in laoreet. Nullam nunc diam, luctus eget rhoncus vitae, accumsan et enim. Pellentesque congue iaculis ipsum, eu varius eros porttitor eu.
                                </p>
                                <hr />
                                <?php endfor; ?>
                            <?php endwhile; else: ?>
                                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                            <?php endif; ?>

                        </div>

                    </div>
                </div> <!-- // primary -->

                <?php get_sidebar() ?>

<?php get_footer() ?>                