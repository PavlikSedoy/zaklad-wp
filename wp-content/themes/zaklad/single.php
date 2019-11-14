<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zaklad
 */

get_header();
?>
<div class="current-proffesion">
    <div class="container">
        <?= the_content() ?>
    </div>
</div>
<?php get_template_part('template-parts/last', 'news'); ?>
