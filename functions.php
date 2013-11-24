<?php

require_once('wp_bootstrap_navwalker.php');

function theme_setup() {

	register_nav_menu( 'primary', 'Navigation Menu' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('product-thumb', 300, 300, true);
	add_image_size('product-thumb-mini', 100, 75, true);
	add_image_size('slider-featured', 600, 335, true);

    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Photo 2',
                'id' => 'product-image-2',
                'post_type' => 'post'
            ));

        new MultiPostThumbnails(
            array(
                'label' => 'Photo 3',
                'id' => 'product-image-3',
                'post_type' => 'post'
            ));

        new MultiPostThumbnails(
            array(
                'label' => 'Photo 4',
                'id' => 'product-image-4',
                'post_type' => 'post'
            ));
        new MultiPostThumbnails(
            array(
                'label' => 'Photo 5',
                'id' => 'product-image-5',
                'post_type' => 'post'
            ));
    }
}

add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts_styles() {

	wp_enqueue_script( 'theme-script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-holder', get_template_directory_uri() . '/js/holder.js', array(), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-common', get_template_directory_uri() . '/js/common.js', array(), '1.0', true );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

function theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'theme' ), max( $paged, $page ) );

	return $title;
}


add_filter( 'wp_title', 'theme_wp_title', 10, 2 );



function theme_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( 'Selanjutnya <span class="meta-nav">&rarr;</span> ' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Sesudahnya' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );