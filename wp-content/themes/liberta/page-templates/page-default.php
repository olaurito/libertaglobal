<?php

/**
 * Template Name: Page Home Default
 * Description: Page template full width.
 *
 */
// Exit if accessed directly
defined('ABSPATH') || exit;
get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>

    <?php get_template_part('template-parts/home/section-slider'); ?>
    <?php get_template_part('template-parts/home/section-feature'); ?>
    <?php get_template_part('template-parts/home/section-liberators'); ?>
    <?php get_template_part('template-parts/home/section-focus'); ?>
    <?php get_template_part('template-parts/home/section-teach'); ?>


</div><!-- /#post-<?php the_ID(); ?> -->


<?php
get_footer();