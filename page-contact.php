<?php

/**
 * Template Name: contact
 */

?>
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />


    <?php
    echo apply_filters('the_content', '[contact-form-7 id="61" title="コンタクトフォーム 1"]');
    ?>

</body>