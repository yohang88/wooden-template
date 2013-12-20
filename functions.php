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
    wp_enqueue_script( 'theme-script-equal', get_template_directory_uri() . '/js/jquery.equalheights.js', array(), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-holder', get_template_directory_uri() . '/js/holder.js', array(), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-common', get_template_directory_uri() . '/js/common.js', array(), '1.0', true );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );


add_action( 'admin_menu', 'admin_theme_menu' );

function admin_theme_menu() {
    add_menu_page(__('Pengaturan Lain','menu-test'), __('Pengaturan Lain','menu-test'), 'manage_options', 'admin-theme-options', 'admin_theme_options' );

    add_action( 'admin_init', 'theme_mysettings' );
}

function theme_mysettings() {
    register_setting( 'theme-settings-group', 'google_map_iframe' );

    register_setting( 'theme-settings-group', 'display_product_featured' );
    register_setting( 'theme-settings-group', 'display_product_categories' );
    register_setting( 'theme-settings-group', 'social_fb' );
    register_setting( 'theme-settings-group', 'social_twitter' );
    register_setting( 'theme-settings-group', 'social_pinterest' );
    register_setting( 'theme-settings-group', 'social_youtube' );
    register_setting( 'theme-settings-group', 'social_gplus' );
    register_setting( 'theme-settings-group', 'widget_text_title' );
    register_setting( 'theme-settings-group', 'widget_text_content' );
    register_setting( 'theme-settings-group', 'widget_youtube_title' );
    register_setting( 'theme-settings-group', 'widget_youtube_url' );
    register_setting( 'theme-settings-group', 'widget_youtube_description' );

}

function admin_theme_options() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    } else {
?>

<div class="wrap">
<?php // screen_icon(); ?>
<form method="post" action="options.php">
    <h2>Pengaturan Ekstra</h2>
    <?php if(isset($_GET['settings-updated'])): ?>
        <div id="message" class="updated">Settings saved</div>
    <?php endif; ?>

    <?php settings_fields( 'theme-settings-group' ); ?>
    <?php do_settings_sections( 'theme-settings-group' ); ?>
    <h3>Tampilan Produk</h3>
    <p>Jumlah produk yang ditampilkan dalam satu halaman</p>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Featured Product (Homepage)</th>
        <td><input type="text" name="display_product_featured" value="<?php echo get_option('display_product_featured'); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Category Page</th>
        <td><input type="text" name="display_product_categories" value="<?php echo get_option('display_product_categories'); ?>" /></td>
        </tr>
    </table>

    <h3>Social Media</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Facebook URL</th>
        <td><input type="text" name="social_fb" style="width:300px" value="<?php echo get_option('social_fb'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Twitter URL</th>
        <td><input type="text" name="social_twitter" style="width:300px" value="<?php echo get_option('social_twitter'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Pinterest URL</th>
        <td><input type="text" name="social_pinterest" style="width:300px" value="<?php echo get_option('social_pinterest'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Youtube URL</th>
        <td><input type="text" name="social_youtube" style="width:300px" value="<?php echo get_option('social_youtube'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Google Plus URL</th>
        <td><input type="text" name="social_gplus" style="width:300px"  value="<?php echo get_option('social_gplus'); ?>" /></td>
        </tr>
    </table>

    <h3>Widget Frontpage</h3>
    <h4>Artikel Pendek</h4>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Widget Title</th>
        <td><input type="text" name="widget_text_title" style="width:300px" value="<?php echo get_option('widget_text_title'); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Content</th>
        <td><?php wp_editor(get_option('widget_text_content'), 'widget_text_content', array('textarea_rows' => 4)); ?></td>
        </tr>
    </table>

    <h4>Youtube</h4>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Widget Title</th>
        <td><input type="text" name="widget_youtube_title" style="width:300px" value="<?php echo get_option('widget_youtube_title'); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Youtube URL</th>
        <td><input type="text" name="widget_youtube_url" style="width:300px" value="<?php echo get_option('widget_youtube_url'); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Youtube Description</th>
        <td><?php wp_editor(get_option('widget_youtube_description'), 'widget_youtube_description', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td>
        </tr>
    </table>

    <h3>Lainnya</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Google Maps Embed Code</th>
        <td><textarea name="google_map_iframe" style="width:100%" rows="7"><?php echo get_option('google_map_iframe'); ?></textarea></td>
        </tr>
    </table>


    <?php submit_button(); ?>
</form>
</div>

<?php
    } // end if

} // end function


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
			<div class="nav-previous" style="float:right"><?php next_posts_link( __( 'Next <span class="meta-nav">&rarr;</span> ' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous' ) ); ?></div>
			<?php endif; ?>

            <div class="clearfix"></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-lg btn-success"';
}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

function productcategory_pagesize( $query ) {

    if ( is_category(array('wooden-bicycle','wooden-fashion','wooden-interior','wooden-toys','wooden-hobbies')))
    {
        $query->set( 'posts_per_page', get_option('display_product_categories'));
        return;
    }
}
add_action( 'pre_get_posts', 'productcategory_pagesize', 1 );

function shortcode_pembatas_hijau( $atts ){
    return '<div class="horizontal_line"></div>';
}
add_shortcode( 'pembatas_hijau', 'shortcode_pembatas_hijau' );

function shortcode_google_map_iframe( $atts ){
    return get_option('google_map_iframe');
}
add_shortcode( 'google_map_iframe', 'shortcode_google_map_iframe' );

function shortcode_contact_socialmedia( $atts ){

    return '<div class="contactpage-socialmedia">
                <div class="social-item"><img src="'.get_bloginfo('stylesheet_directory').'/img/white-fb.png" alt="Facebook" /></div>
                <div class="social-item"><img src="'.get_bloginfo('stylesheet_directory').'/img/white-pinterest.png" alt="Pinterest" /></div>
                <div class="social-item"><img src="'.get_bloginfo('stylesheet_directory').'/img/white-twitter.png" alt="Twitter" /></div>
                <div class="clearfix"></div>
            </div>
            ';
}
add_shortcode( 'contact_socialmedia', 'shortcode_contact_socialmedia' );