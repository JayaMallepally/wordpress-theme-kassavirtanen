<?php
/**
 * Author: PHZ
 * version:     1.0.0
 * created:     04.04.2017
 *
 * Template Name: custom-infocompaniesclients
 *
 */

get_header(); ?>


<?php
// Get the top image's url and add it to the header-block div's styling
$img = get_field('top_image');
$img = $img['url'];

$style = 'background-image: url(' . $img . ')';
?>
<div style="<?php echo $style; ?>" class="header-block">
    <h1>
        <?php the_field('image_text'); ?>
    </h1>
</div>

<div class="container hinnasto">
    <div class="row">
        <div class="col-md-12"><h1 class="largetitle">SOPII YRITYKSILLE JA YKSITYISHENKILÖILLE</h1></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class= "col-md-6 hinnasto-panel" >
            <div class="separated-panel is-taller">
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

            <?php
            $img1 = get_field('image1');
            ?>
            <img src="<?php echo $img1['url']; ?>" style="width: 100%">
        </div>

        <div class= "col-md-6" >
            <div class="separated-panel is-taller">
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

            <?php
            $img2 = get_field('image2');
            ?>
            <img src="<?php echo $img2['url']; ?>" style="width: 100%">
        </div>
    </div>
</div>


<?php get_footer(); ?>
