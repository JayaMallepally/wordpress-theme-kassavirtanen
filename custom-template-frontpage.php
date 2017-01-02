<?php
/**
 * author:      Skylar Kong
 * version:     1.0.0
 * created:     30.12.2016
 *
 * Template Name: custom-frontpage
 *
 */

get_header(); wp_reset_query(); ?>


<?php

    echo '<div class="afc-image">';

    $image = get_field('top_image');
    if ( !empty($image) ):

        // vars
        $url = $image['url'];
        $alt = $image['alt'];
?>
        <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" />

    <?php endif; echo '</div>'; ?>

<?php the_field('home_description');  ?>

<?php the_field('home_divider'); ?>

<?php
echo '<div class="afc-repeater">';
echo '<div class="row">';

//$frontpage_post_object_left = get_posts('cat=11');
//$frontpage_post_object_middle = get_posts('cat=9');
//$frontpage_post_object_right = get_posts('cat=10');

$post_object = get_field( 'frontpage_post_left', 'category_11' );

if ($post_object) {
    echo $post_object;
} else {
    echo "empty";
}

//echo '<pre>';
//print_r( $post_object );
//echo '</pre>';


echo '</div>';
echo '</div>';

?>

<?php get_footer(); ?>