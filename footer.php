<footer>
	<div class="container">
        <div class="row copyright">
            <div class="col-xs-6">
                &copy; <?php echo date('Y') ?> by Java Wooden Handicraft
            </div>
            <div class="col-xs-6" style="text-align:right">
                <?php $check = get_option('social_fb'); if(!empty($check)): ?>
                <a href="<?php echo get_option('social_fb') ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/white-fb.png" alt="Facebook" />
                </a>
                <?php endif; ?>

                <?php $check = get_option('social_pinterest'); if(!empty($check)): ?>
                <a href="<?php echo get_option('social_pinterest') ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/white-pinterest.png" alt="Pinterest" />
                </a>
                <?php endif; ?>

                <?php $check = get_option('social_twitter'); if(!empty($check)): ?>
                <a href="<?php echo get_option('social_twitter') ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/white-twitter.png" width="28px" alt="Twitter" />
                </a>
                <?php endif; ?>
            </div>
        </div>
        <!-- div class="row ulir hidden-xs"></div -->
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>