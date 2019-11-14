<?php
/**
Template Name: Home Page
 */

get_header();
?>

<div class="home-slider">
    <div class="container">
        <div class="swiper-container home-slider-container home-slider__slider">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'home_slider',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'modified',
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="swiper-slide home-slider__slide" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>')">
                    <div class="home-slider__content">
                        <h3><?= the_title() ?></h3>
                        <div class="home-slider__button"><a class="btn btn__color_blue" href="<?= the_field('home_slider_link', $post->ID) ?>">Дізнатися більше</a></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<section class="about-us">
    <div class="container">
        <?php the_content(); ?>
        <div class="about-us__advantages advantages">
            <?php
                $args = array(
                    'post_type' => 'advantages',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'orderby' => 'modified',
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                $thumb_url = $thumb_url_arr[0];
            ?>
            <article class="advantages__item"><img class="advantages__img" src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>">
                <h4 class="advantages__title"><?= the_title() ?></h4>
                <p class="advantages__desc"><?= get_the_content() ?></p>
            </article>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<section class="top-deals section__bg_snow">
    <div class="container">
        <h2>Топ пропозиції</h2>
        <div class="top-deals__row">
            <?php
                $args = array(
                    'post_type' => 'profession',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'orderby' => 'modified',
                    'order' => 'DESC',
                    'meta_key'		=> 'profession_top',
                    'meta_value'	=> true,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                    $thumb_url = $thumb_url_arr[0];
            ?>
            <article class="top-deals__item top-deal">
                <a class="top-deal__link-wr" href="<?= get_permalink() ?>">
                    <div class="top-deal__img-wr"><img src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>"></div>
                    <div class="top-deal__content">
                        <h4 class="top-deal__title"><?= the_title() ?></h4>
                        <p class="top-deal__desc"><?= the_field('proffesion_short_home_desc', $post->ID) ?></p><span class="top-deal__more-link">Дізнатися більше →</span>
                    </div>
                </a>
            </article>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
        <div class="top-deals__all-deals-btn"><a class="btn btn__color_blue" href="/">Перейти до усіх вакансій</a></div>
    </div>
</section>
<?php
    $images = get_field('gallery');
    $full_size = 'full'; // (thumbnail, medium, large, full or custom size)
    $short_size = 'medium_large-width';
    if( $images ):
?>
<section class="gallery">
    <div class="container">
        <div class="gallery__wr" id="gallery">
            <?php foreach( $images as $image_id ): ?>
                <a class="gallery__link" href="<?= esc_url($image_id['url']) ?>">
                    <img src="<?= esc_url($image_id['sizes']['medium_large']) ?>" alt="<?= $image_id['alt'] ?>">
                    <div class="darken-bg"></div>
                    <span></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_template_part('template-parts/last', 'news'); ?>
<?php get_template_part('template-parts/request', 'form'); ?>
<?php get_footer(); ?>