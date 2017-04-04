<?php
/**
 * Author: Erno Koliseva / Olli Somero
 * version:     1.0.0
 * created:     04.04.2017
 *
 * Template Name: custom-useinkysyttya
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
echo '<div class="container ukk">';

echo '<div class="row">';

echo '<div class="col-md-12"><h1 class="greyh1">USEIN KYSYTYT KYSYMYKSET</h1></div>';
echo '<div class="col-md-12" style="height: 32px;"></div></div>';
?>

<div class="faqpanels">
    <div class="collapsepanel is-open">
        <div class="title">
            <?php the_field(panel1_name); ?>
            <div class="icon"><i class="fa fa-fw"></i></div>
        </div>
        <div class="content">
            <?php the_field(panel1_text); ?>
        </div>
    </div>
    <div class="collapsepanel">
        <div class="title">
            <?php the_field(panel2_name); ?>
            <div class="icon"><i class="fa fa-fw"></i></div>
        </div>
        <div class="content">
            <?php the_field(panel2_text); ?>
        </div>
    </div>
    <div class="collapsepanel">
        <div class="title">
            <?php the_field(panel3_name); ?>
            <div class="icon"><i class="fa fa-fw"></i></div>
        </div>
        <div class="content">
            <?php the_field(panel3_text); ?>
        </div>
    </div>
    <div class="collapsepanel">
        <div class="title">
            <?php the_field(panel4_name); ?>
            <div class="icon"><i class="fa fa-fw"></i></div>
        </div>
        <div class="content">
            <?php the_field(panel4_text); ?>
        </div>
    </div>
</div>

            <div class="col-md-12" style="height: 62px;"></div>
<?php

echo '</div>';
echo '</div>';
echo '</div>';

?>

<?php get_footer(); ?>
