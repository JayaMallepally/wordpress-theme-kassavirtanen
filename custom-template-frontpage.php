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
// Large top image
$img = get_field('top_image');
$img = $img['url'];

$style = 'background-image: url(' . $img . ')';
?>
<div style="<?php echo $style; ?>" class="header-block">
    <h1>
        <?php the_field('image_text'); ?>
    </h1>
</div>

<div class="contentblock">
    <div class="title">
        <?php the_field('column1_name'); ?>
    </div>
    <div class="content">
        <?php the_field('column1_text'); ?>
    </div>
</div>

<div class="contentblock is-colored is-paddingless">
    <div class="title is-marginless">
        <?php the_field('column2_name'); ?>
    </div>
    <div class="content">
        <?php the_field('column2_text'); ?>
        <form class="form-inline">
            <div class="form-group">
                <input class="register-input form-control" type="text" placeholder="ETUNIMI"/>
            </div>
            <div class="form-group">
                <input class="register-input form-control" type="text" placeholder="SUKUNIMI"/>
            </div>
            <div class="form-group">
                <input class="register-input form-control" type="text" placeholder="SÄHKÖPOSTI"/>
            </div>
            <div class="form-group">
                <button type="submit" class="button">LIITY NYT</button>
            </div>
        </form>
    </div>
</div>

<div class="contentblock">
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <?php
                $block1_image = get_field('column3_block1_image');
                $block1_name = get_field('column3_block1_name');
                $block1_text = get_field('column3_block1_text');
                echo '<p><img src="'.$block1_image["url"].'" alt="'.$block1_image["alt"].'" class="alignnone size-medium"></p>';
                echo '<p><b>'.$block1_name.'</b></p>';
                echo '<p>'.$block1_text.'</p>';
                ?>
            </div>
            <div class="col-md-6">
                <?php
                $block2_image = get_field('column3_block2_image');
                $block2_name = get_field('column3_block2_name');
                $block2_text = get_field('column3_block2_text');
                echo '<p><img src="'.$block2_image["url"].'" alt="'.$block2_image["alt"].'" class="alignnone size-medium"></p>';
                echo '<p><b>'.$block2_name.'</b></p>';
                echo '<p>'.$block2_text.'</p>';
                ?>
            </div>
        </div>
    </div>
</div>

<div class="contentblock is-colored">
    <div class="title">
        <?php the_field('column4_name'); ?>
    </div>
    <div class="content">
        <?php the_field('column4_text'); ?>
    </div>
</div>

<div class="contentblock">
    <div class="title">
        <?php the_field('column5_name'); ?>
    </div>
    <div class="content">
        <?php the_field('column5_text'); ?>
    </div>
</div>

<?php get_footer(); ?>
