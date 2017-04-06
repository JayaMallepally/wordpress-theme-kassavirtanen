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
?>
<div style="<?php echo $style; ?>" class="header-block">
    <h1>
        <?php the_field('image_text'); ?>
    </h1>
</div>

<?php

//piechartin asettelu alkaa tästä

$img = get_field('piechart');
$img = $img['url'];

?>
<div class="container hinnasto">
    <div class="row">
        <div class="col-md-12"><h1 class="largetitle">HINNASTO</h1></div>
    </div>
    <div class="row">
        <div class= "col-md-4 hinnasto-panel">
            <div class="separated-panel">
                <div class="title">
                    <h2>
                        <?php the_field('column1_name'); ?>
                    </h2>
                </div>
                <div class="content">
                    <p>
                        <?php the_field('column1_text'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class= "col-md-4 hinnasto-panel">
            <div class="separated-panel">
                <div class="title">
                    <h2>
                        <?php the_field('column2_name'); ?>
                    </h2>
                </div>
                <div class="content">
                    <p>
                        <?php the_field('column2_text'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class= "col-md-4 hinnasto-panel">
            <div class="separated-panel">
                <div class="title">
                    <h2>
                        <?php the_field('column3_name'); ?>
                    </h2>
                </div>
                <div class="content">
                    <p>
                        <?php the_field('column3_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class= "col-md-7 hinnasto-panel image-center">
            <div class="image-holder">
                <img src="<?php echo $img; ?>">
            </div>
        </div>
        <div class= "col-md-5 hinnasto-panel">
            <div class="separated-panel">
                <div class="title">
                    <h2>
                        <?php the_field('column4_name'); ?>
                    </h2>
                </div>
                <div class="content">
                    <p>
                        <?php the_field('column4_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class= "col-md-12 hinnasto-lowpanel">
            <div class="lowpanel">
                <h2>
                    <?php the_field('column5_name'); ?>
                </h2>
                <p>
                    <?php the_field('column5_text'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
