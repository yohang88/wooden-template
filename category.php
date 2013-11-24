<?php get_header() ?>

<section id="main-wrapper">
    <div id="wrapper" class="container">

    <?php
        if( is_category( array(
            'wooden-bicycle',
            'wooden-fashion',
            'wooden-hobbies',
            'wooden-interior',
            'wooden-toys'
        ))):
    ?>

        <?php get_template_part('inc/category-products') ?>

    <?php else: ?>


    <?php endif; ?>

    </div>
</section>


<?php get_footer() ?>