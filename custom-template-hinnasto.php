<?php
/**
 * Author: Erno Koliseva / Olli Somero
 * version:     1.0.0
 * created:     04.04.2017
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

//piechartin asettelu alkaa tästä

$img = get_field('piechart');
$img = $img['url'];


echo '<div class="container hinnasto">';

echo '<div class="row">';

echo '<div class="col-md-12"><h1 class="greyh1">HINNASTO</h1></div>';
echo '<div class="col-md-12" style="height: 50px;"></div>';

echo '<div class= "col-md-4 hinnasto-panel">';
echo '<div class="separated-panel">';
echo '<div class="title"><h2>';
the_field('column1_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column1_text');
echo '</p></div>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-4 hinnasto-panel">';
echo '<div class="separated-panel">';
echo '<div class="title"><h2>';
the_field('column2_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column2_text');
echo '</p></div>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-4 hinnasto-panel">';
echo '<div class="separated-panel">';
echo '<div class="title"><h2>';
the_field('column3_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column3_text');
echo '</p></div>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-7 hinnasto-panel">';
echo '<div>';
echo '<img src=' . $img . '>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-5 hinnasto-panel">';
echo '<div class="separated-panel">';
echo '<div class="title"><h2>';
the_field('column4_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column4_text');
echo '</p></div>';
echo '</div>';
echo '</div>';


echo '<div class= "col-md-12 hinnasto-lowpanel">';
echo '<div class="lowpanel">';
echo '<p>';
echo '<h2>';
the_field('column5_name');
echo '</h2>';
echo '<p>';
the_field('column5_text');
echo '</p>';
echo '</div>';
echo '</div>';



echo '</div>';
echo '</div>';
?>

<?php get_footer(); ?>
