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

<?php

    echo '<div class="row afc-home">';

    echo '<div class="col-xs-12 col-md-12 afc-description-header">';
        echo '<p>';
            the_field('home_description_header');
        echo '</p>';
    echo '</div>';

    echo '<div class="col-xs-12 col-md-12 col-md-offset-4 afc-description">';
        echo '<p>';
            the_field('home_description');
        echo '</p>';
    echo '</div>';

    echo '</div>';
?>

<?php

echo '<div class="afc-divider">';
    the_field('home_divider');
echo '</div>';
?>

<?php
echo '<div class="afc-repeater">';
echo '<div class="row">';

$post_objects = get_posts( 'home_post_objects' );

$counter = 0;

if ( $post_objects ): ?>

        <?php foreach( $post_objects as $post ): ?>
        <?php setup_postdata($post); ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
            <?php the_content(); if ( $counter == 2 ) { break; }; ?>
        </div>
        <?php $counter++; endforeach; ?>
    <?php wp_reset_postdata(); endif; ?>

<?php
echo '</div>';
echo '</div>';
?>

<?php get_footer(); ?>