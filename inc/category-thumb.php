
<?php
$cat_selected = array(
    'wooden-bicycle',
    'wooden-fashion',
    'wooden-interior',
    'wooden-toys',
    'wooden-hobbies',
);

$cat         = get_query_var('cat');
$cat_current = get_category ($cat);
$cat_slug    = $cat_current->slug;
?>
        <div id="common-productcategories" class="<?php echo (is_category() ? 'category' : '') ?><?php echo (is_category() ? ' ' . $cat_slug : '') ?>">

<?php
foreach($cat_selected as $item):
    $cat       = get_category_by_slug( $item );
    $cat_id    = $cat->term_id;
    $cat_title = $cat->name;
    $cat_link  = get_category_link( $cat_id );
?>
            <div class="item<?php echo (is_category( $item ) ? ' active ' : '') ?>">
                <div class="outer">
                    <div class="inner">
                        <div><a href="<?php echo esc_url( $cat_link ); ?>"><?php echo $cat_title ?></a></div>
                    </div>
                </div>
            </div>
<?php endforeach; ?>

        </div>
