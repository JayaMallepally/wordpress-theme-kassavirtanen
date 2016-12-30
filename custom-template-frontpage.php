<?php
/**
 * author:      Skylar Kong
 * version:     1.0.0
 * created:     30.12.2016
 *
 * Template Name: custom-frontpage
 *
 */

get_header(); ?>


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
$rows = get_field('home_post_repeater');

echo '<div class="afc-repeater">';

if ($rows) {

    foreach ( $rows as $row ) {

        $row_image_url = $row['post_image']['url'];
        $row_image_alt = $row['post_image']['alt'];
        $row_post_content = $row['post_content'];

        echo "<div class='afc-repeater-post'>\n
                <img src='$row_image_url' alt='$row_image_alt'>\n
                <p>$row_post_content</p>\n
              </div>\n";
    }
}

echo '</div>';

?>

<?php get_footer(); ?>