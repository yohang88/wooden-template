<?php
$url = get_option('widget_youtube_url');
parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
$youtube_id = $my_array_of_vars['v'];
?>
            <div class="sidebar">
                <div class="widget">
                    <h1 class="caption"><?php echo get_option('widget_text_title'); ?></h1>
                    <?php echo nl2br(get_option('widget_text_content')); ?>
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
                </div>
                <div class="widget">
                    <h1 class="caption"><?php echo get_option('widget_youtube_title'); ?></h1>
                    <iframe width="272" height="300" src="//www.youtube.com/embed/<?php echo $youtube_id ?>" frameborder="0" allowfullscreen></iframe>
                    <?php echo get_option('widget_youtube_description'); ?>
                </div>
            </div>