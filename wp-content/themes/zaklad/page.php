<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zaklad
 */

get_header();
?>
    <section class="content-tabs">
        <div class="container">
            <ul class="content-tabs__list">
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 69 ? 'active' : '' ?>" href="<?= get_page_link( 69 ); ?>">
                        <h3>Про навчальний заклад</h3></a></li>
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 78 ? 'active' : '' ?>" href="<?= get_page_link( 78 ); ?>">
                        <h3>Історія, наші досягнення</h3></a></li>
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 83 ? 'active' : '' ?>" href="<?= get_page_link( 83 ); ?>">
                        <h3>Правила вступу</h3></a></li>
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 85 ? 'active' : '' ?>" href="<?= get_page_link( 85 ); ?>">
                        <h3>Наші партнери</h3></a></li>
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 103 ? 'active' : '' ?>" href="<?= get_page_link( 103 ); ?>">
                        <h3>Кар’єра</h3></a></li>
                <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 105 ? 'active' : '' ?>" href="<?= get_page_link( 105 ); ?>">
                        <h3>Співробітництво</h3></a></li>
            </ul>
        </div>
        <div class="container">
            <div class="content-tabs__content">
                <div class="content-tabs__content-row">
                    <?= the_content() ?>
                    <?php
                    if ( $post->ID == 85 ):
                        ?>
                        <section class="partners">
                            <?php
                            $args = array(
                                'post_type' => 'partners',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'modified',
                                'order' => 'DESC',
                            );
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                $thumb_url = $thumb_url_arr[0];
                                ?>
                                <article class="partner partners__item"><a class="partner__link" href="<?= get_permalink() ?>"></a>
                                    <div class="partner__img-wr"><img src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>"></div>
                                    <h4 class="partner__name"><?= the_title() ?></h4><span class="partner__speciality"><?= the_field('partners_profession', $post->ID) ?></span>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </section>
                    <?php endif; ?>
                    <?php
                    if ( $post->ID == 103 ):
                        ?>
                        <section class="career">
                            <?php
                            $args = array(
                                'post_type' => 'profession',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'modified',
                                'order' => 'DESC'
                            );
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                $thumb_url = $thumb_url_arr[0];
                                ?>
                                <article class="career__item"><a class="career__link" href="<?= get_permalink() ?>"></a>
                                    <div class="career__img-wr"><img src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>"></div>
                                    <div class="career__content">
                                        <h4 class="career__name"><?= the_title() ?></h4>
                                        <p><?= the_field('proffesion_short_proffesion_desc', $post->ID) ?></p>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            if ( $post->ID == 69 ):
                ?>
                <div class="content-tabs__advantages advantages">
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
            <?php endif; ?>
        </div>
    </section>
<?php
$images = get_field('gallery');
$full_size = 'full'; // (thumbnail, medium, large, full or custom size)
$short_size = 'medium_large-width';
if( $images && ( $post->ID == 69 ) ):
    ?>
    <section class="gallery section__bg_snow">
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
<?php get_footer(); ?>