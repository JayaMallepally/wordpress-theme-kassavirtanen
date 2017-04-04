<?php
/**
 * Author: Erno Koliseva/Olli Somero
 * version:     1.0.0
 * created:     04.04.2017
 *
 * Template Name: custom-Sopiiyrityksillejayksityishenkiloille
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

$img1 = get_field('image1');
$img1 = $img1['url'];
$img2 = get_field('image2');
$img2 = $img2['url'];


echo '<div class="container hinnasto">';

echo '<div class="row">';

echo '<div class="col-md-10"><h1 class="greyh1">SOPII YRITYKSILLE JA YKSITYISHENKILÖILLE</h1></div>';
echo '<div class="col-md-10" style="height: 50px;"></div>';

echo '<div class= "col-md-5 hinnasto-panel" >';
echo '<div class="separated-panel is-taller">';
echo '<div class="title"><h2>';
the_field('column1_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column1_text');
echo '</p></div>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-5 hinnasto-panel" >';
echo '<div class="separated-panel is-taller">';
echo '<div class="title"><h2>';
the_field('column2_name');
echo '</h2></div>';
echo '<div class="content"><p>';
the_field('column2_text');
echo '</p></div>';
echo '</div>';
echo '</div>';


echo '<div class= "col-md-5 hinnasto-panel">';
echo '<div>';
echo '<img src=' . $img1 . '>';
echo '</div>';
echo '</div>';

echo '<div class= "col-md-5 hinnasto-panel">';
echo '<div>';
echo '<img src=' . $img2 . '>';
echo '</div>';
echo '</div>';

echo '<div class="col-md-12" style="height: 40px;"></div>';


echo '</div>';
echo '</div>';
?>


<?php get_footer(); ?>
