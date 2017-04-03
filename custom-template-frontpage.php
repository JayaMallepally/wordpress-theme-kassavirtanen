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
$img = get_field('top_image');
$img = $img['url'];

$style = 'background-image: url(' . $img . ')';

echo '<div style="' . $style . '" class="afc-jetpack_div">';

//echo "<div style=" . $style . ">";

    echo '<p>';
    the_field('image_text');
    echo '</p>';

echo '</div>';

?>

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

echo '<div class="afc-register">';
the_field('register');
echo '</div>';
?>

<?php
echo '<div class="afc-repeater">';
echo '<div class="row">';
echo '<div class="col-lg-3"> </div>';
$post_objects = get_posts('home_post_objects');

$counter = 0;

if ($post_objects): ?>

    <?php foreach ($post_objects as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 ">
            <?php the_content();
            if ($counter == 1) {
                break;
            }; ?>
        </div>
        <?php $counter++; endforeach; ?>
    <?php wp_reset_postdata(); endif; ?>


<?php
echo '<div class="col-lg-3"></div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>

<?php

echo '<div class="afc-salary">';
the_field('salary');
echo '</div>';
?>

<?php

echo '<div class="col-xs-12 col-md-12 afc-description-header">';
    echo '<p>';
        the_field('description_bottom_desc');
    echo '</p>';
echo '</div>';

echo '<div class="col-xs-12 col-md-12 col-md-offset-4 afc-description">';
    echo '<p>';
        the_field('description');
    echo '</p>';
echo '</div>';
?>

<?php get_footer(); ?>
