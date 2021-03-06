<?php
/**
 * author:      Skylar Kong
 * version:     1.0.0
 * created:     30.12.2016
 *
 * Template Name: custom-signup
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php /* wp_head(); */  ?>
</head>

<body>

<div id="app"></div>

<?php /* wp_footer(); */ ?>
<!-- Change the url to match with the environment -->
<script type='text/javascript' src='http://kassavirtanen.local/wp-content/themes/wordpress-theme-kassavirtanen/scripts/app.js'></script>
</body>
</html>
