<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zaklad
 */

global $post;
$post_slug=$post->post_name;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE = edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container header__container">
            <div class="header__row">
                <div class="header__contacts">
                    <div class="header__mail-and-social mail-and-social">
                        <div class="mail-and-social__row mail-and-social__mail-row"><a class="mail-and-social__mail-link" href="mailto://ioannos74@gmail.com"><img src="<?php bloginfo('template_url'); ?>/images/icons/mail.png" alt="Лист до одеський державний центр професійного навчання працівників переробної промисловості"><span>ioannos74@gmail.com</span></a></div>
                        <div class="mail-and-social__row mail-and-social__social-row"><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/instagram.png" alt="Instagram"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/facebook.png" alt="Facebook"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/youtube.png" alt="Youtube"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/viber.png" alt="Viber"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/telegram.png" alt="Telegram"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/whatsapp.png" alt="Whatsapp"></a></div>
                    </div>
                    <div class="header__phones phones">
                        <div class="phones__icon-wr"><img src="<?php bloginfo('template_url'); ?>/images/icons/phone.png" alt="Зателефонувати до одеський державний центр професійного навчання працівників переробної промисловості"></div>
                        <div class="phones__phones-list">
                            <ul>
                                <?php
                                    $args = array(
                                        'post_type' => 'phone_numbers',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'orderby' => 'modified',
                                        'order' => 'ASC',
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                ?>
                                    <li><a class="phones__phone-link" href="tel://<?= the_field('phone_number_for_link', $post->ID) ?>"><?= the_field('phone_number_for_display', $post->ID) ?></a></li>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__logo"><a class="header__logo-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="державний центр професійного навчання працівників переробної промисловості"></a></div>
                <div class="header__buttons">
                    <div class="header__buttons-item">
                        <button class="btn btn__color_blue" type="button" data-type="modal" data-modal="request">Онлайн запис</button>
                    </div>
                    <div class="header__buttons-item">
                        <button class="btn btn__color_yellow" type="button" data-type="modal" data-modal="callback">Замовити дзвінок</button>
                    </div>
                </div>
            </div>
            <div class="header__row header__title-row">
                <h1>Одеський державний центр професійного навчання працівників переробної промисловості</h1>
            </div>
            <div class="header__hamburger hamburger" id="hamburger"><span></span></div>
        </div>
        <nav class="nav header__nav <?= is_page_template('page-index.php') ? 'no-bottom-border' : '' ?>">
            <div class="container nav__container">
                <?php wp_nav_menu('head-menu') ?>
            </div>
        </nav>
        <?php if (!is_page_template('page-index.php')): ?>
            <div class="header__breadcrumbs breadcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="/">Головна</a></li>
                        <?php if ( is_page_template('page-about.php') ): ?>
                        <li>
                            <span>Про нас</span>
                        </li>
                        <?php endif; ?>
                        <?php if ( is_page_template('page-profession.php') ): ?>
                            <li>
                                <span>Діяльність</span>
                            </li>
                        <?php endif; ?>
                        <?php if ( $post->post_type == 'profession' ) : ?>
                        <li>
                            <a href="<?= get_page_link( 103 ); ?>">Про нас</a>
                        </li>
                        <li>
                            <span><?= the_title() ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if ( $post->post_type == 'current_profession' ) : ?>
                            <li>
                                <a href="<?= get_page_link( 112 ); ?>">Діяльність</a>
                            </li>
                            <li>
                                <span><?= the_title() ?></span>
                            </li>
                        <?php endif; ?>
                        <?php if ( $post->post_type == 'partners' ) : ?>
                            <li>
                                <a href="<?= get_page_link( 85 ); ?>">Про нас</a>
                            </li>
                            <li>
                                <span><?= the_title() ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <div class="mobile-nav header__mobile-nav">
            <div class="mobile-nav__close"><img src="<?php bloginfo('template_url'); ?>/images/icons/close.png" alt="close popup"></div>
            <div class="container mobile-nav__container">
                <div class="mobile-nav__buttons">
                    <div class="mobile-nav__buttons-item">
                        <button class="btn btn__color_blue" type="button" data-type="modal" data-modal="request">Онлайн запис</button>
                    </div>
                    <div class="mobile-nav__buttons-item">
                        <button class="btn btn__color_yellow" type="button" data-type="modal" data-modal="callback">Замовити дзвінок</button>
                    </div>
                </div>
                <nav class="mobile-nav__nav">
                    <?php wp_nav_menu('head-menu') ?>
                </nav>
            </div>
        </div>
    </header>
    <main class="content">