<?php
/**
Template Name: Profession Page
 */

get_header();
?>
<section class="content-tabs">
    <div class="container">
        <ul class="content-tabs__list">
            <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 107 ? 'active' : '' ?>" href="<?= get_page_link( 107 ); ?>">
                    <h3>Дяльність</h3></a></li>
            <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 112 ? 'active' : '' ?>" href="<?= get_page_link( 112 ); ?>">
                    <h3>Професії</h3></a></li>
            <li class="content-tabs__item"><a class="content-tabs__link <?= $post->ID == 142 ? 'active' : '' ?>" href="<?= get_page_link( 142 ); ?>">
                    <h3>Навчання посадових осіб та спеціалістів за правилами охорони праці</h3></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="content-tabs__content">
            <div class="content-tabs__content-row">
                <?= the_content() ?>
                <?php
                    if ( $post->ID == 112 ) :
                ?>
                        <section class="proffesion">
                            <h3 class="profession__title">Підготовка, перепідготовка, підвищення кваліфікації за наступними професіями</h3>
                            <div class="proffesion__row">
                                <?php
                                    $args = array(
                                        'post_type' => 'current_profession',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'orderby' => 'modified',
                                        'order' => 'DESC',
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                        $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                        $thumb_url = $thumb_url_arr[0];
                                ?>
                                <article class="proffesion-item">
                                    <a class="proffesion-item__link" href="<?= get_permalink() ?>">
                                        <div class="proffesion-item__img-wr"><img src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>"></div>
                                        <div class="proffesion-item__content">
                                            <h4 class="proffesion-item__title"><?= the_title() ?></h4>
                                            <p class="proffesion-item__desc"><?= the_field('current_profession_short_desc', $post->ID) ?></p>
                                        </div>
                                    </a>
                                </article>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </section>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/last', 'news'); ?>
<?php get_footer(); ?>