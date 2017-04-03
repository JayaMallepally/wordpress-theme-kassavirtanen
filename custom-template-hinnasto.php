<?php
/**
 * Author: Erno Koliseva
 * version:     1.0.0
 * created:     30.12.2016
 *
 * Template Name: custom-hinnasto
 *
 */

get_header(); ?>


<?php
$img = get_field('top_image');
$img = $img['url'];

$style = 'background-image: url(' . $img . ')';

echo '<div style="' . $style . '" class="afc-jetpack_div">';


echo '<p>';
the_field('image_text');
echo '</p>';

echo '</div>';

?>

<?php

echo '<div class="container hinnasto">';
echo '<div class="row">';

echo '<div class= "col-md-4 hinnasto-panel afc-free-registration">';
echo '<div class="panel">';
echo '<p>';
the_field('register_for_free');
echo '</p>';
echo '</div>';
echo '</div>';

echo '<div class=" col-md-4 hinnasto-panel afc-free-billing">';
echo '<div class="panel">';
echo '<p>';
the_field('free_billing');
echo '</p>';
echo '</div>';
echo '</div>';

echo '<div class="col-md-4 hinnasto-panel afc-raise-salary">';
echo '<div class="panel">';
echo '<p>';
the_field('raise_salary');
echo '</p>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
?>

<?php get_footer(); ?>
