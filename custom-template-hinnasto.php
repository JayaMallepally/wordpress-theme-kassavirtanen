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

echo '<div class="home-image">';

$image = get_field('top_image');
if ( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];
    ?>
    <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" />
<?php endif; echo '</div>'; ?>

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