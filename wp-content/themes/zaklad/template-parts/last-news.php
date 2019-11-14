<?php
/**
 * Template part for displaying last newses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zaklad
 */

?>

<?php
    if (is_page_template('page-index.php')) {
        $bg_color_class = 'section__bg_snow';
    } else {
        $bg_color_class = 'white-bg';
    }
?>

<section class="last-news <?= $bg_color_class ?>">
    <div class="container">
        <h2>Останні новини</h2>
        <div class="last-news__row">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'orderby' => 'modified',
                'order' => 'DESC',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $thumb_url_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                $thumb_url = $thumb_url_arr[0];
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                ?>
                <article class="top-deal news last-news__item">
                    <a class="top-deal__link-wr" href="<?= get_permalink() ?>">
                        <div class="top-deal__img-wr"><img src="<?= $thumb_url ?>" alt="<?= get_the_post_thumbnail_caption( $post->ID ) ?>"></div>
                        <div class="top-deal__content">
                            <div class="top-deal__heading"><span><?= $cat_name ?></span>
                                <time><?php echo get_the_date('d.m.y', $post->ID); ?></time>
                            </div>
                            <h4 class="top-deal__title"><?= the_title() ?></h4>
                            <p class="top-deal__desc"><?= the_field('publications_shord_desc'); ?></p><span class="top-deal__more-link">Дізнатися більше →</span>
                        </div>
                    </a>
                </article>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div class="last-news__button"><a class="btn btn__color_blue" href="/">Перейти до усіх новин</a></div>
    </div>
</section>