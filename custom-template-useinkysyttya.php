<?php
/**
 * Author: PHZ
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
?>
<div style="<?php echo $style; ?>" class="header-block">
    <h1>
    <?php the_field('image_text'); ?>
    </h1>
</div>

<div class="container ukk">
    <div class="row">
        <div class="col-md-12"><h1 class="largetitle">USEIN KYSYTYT KYSYMYKSET</h1></div>
    </div>

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
</div>

<?php get_footer(); ?>
