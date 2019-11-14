<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zaklad
 */

?>

</main>
<footer class="footer">
    <div class="container">
        <div class="footer__heading"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="ALT"><span>Одеський державний центр професійного навчання працівників переробної промисловості</span></div>
        <div class="footer__row">
            <div class="footer__contacts-and-fb-subsribe">
                <div class="footer__mail-and-social mail-and-social">
                    <div class="mail-and-social__row mail-and-social__mail-row"><a class="mail-and-social__mail-link" href="mailto://ioannos74@gmail.com"><img src="<?php bloginfo('template_url'); ?>/images/icons/mail.png" alt="Лист до одеський державний центр професійного навчання працівників переробної промисловості"><span>ioannos74@gmail.com</span></a></div>
                    <div class="mail-and-social__row mail-and-social__social-row"><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/instagram.png" alt="Instagram"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/facebook.png" alt="Facebook"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/youtube.png" alt="Youtube"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/viber.png" alt="Viber"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/telegram.png" alt="Telegram"></a><a class="mail-and-social__social-link" href="/"><img src="<?php bloginfo('template_url'); ?>/images/icons/whatsapp.png" alt="Whatsapp"></a></div>
                </div>
                <div class="footer__fb-subscribe">FB</div>
            </div>
            <div class="footer__subscribe">
                <form class="footer__subscribe-form" action="/">
                    <div class="input__wr">
                        <input id="requestMail" type="text" placeholder="Введіть ваш E-mail" inputmode="email">
                        <div class="footer__subscribe-btn">
                            <button class="btn btn__color_blue" type="submit">Підписатися на розсилку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2538.409646725545!2d30.464267151521256!3d50.48933317938005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cd932e859203%3A0xd993d2f12f35c060!2z0YPQuy4g0JrQuNGA0YDQuNC70L7QstGB0LrQsNGPLCAxMTcsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1573424993637!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="footer__copyright-and-creator">
            <div class="footer__copyright"><span>Сopyright © 2019</span></div>
            <div class="footer__creator"><a class="footer__creator-link" href="http://master-landing.in.ua/" target="_blank">Master Landing</a></div>
        </div>
    </div>
</footer>
<div class="popup" id="requestPopup">
    <div class="popup__modal">
        <div class="popup__close"><img src="<?php bloginfo('template_url'); ?>/images/icons/close.png" alt="close popup"></div>
        <h2 class="mb0">Залишити заявку на запис</h2>
        <p class="section__desc">Залиште заявку і ми зв’яжемося з Вами найближчим часом</p>
        <form class="popup__form" action="/">
            <div class="input__wr">
                <input id="modalRequestName" type="text" placeholder="Ваше ім’я">
                <div class="input__icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-2x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg></div>
            </div>
            <div class="input__wr">
                <input id="modalRequestPhone" type="text" placeholder="Ваш номер телефону" inputmode="tel">
                <div class="input__icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path></svg></div>
            </div>
            <div class="input__wr">
                <input id="modalRequestMail" type="text" placeholder="Ваша пошта" inputmode="email">
                <div class="input__icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-2x"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg></div>
            </div>
            <div class="textarea__wr request__textarea-wr">
                <textarea id="modalRequestText" placeholder="Ваш коментар"></textarea>
                <div class="textarea__icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open-text" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope-open-text fa-w-16 fa-2x"><path fill="currentColor" d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z" class=""></path></svg></div>
            </div>
            <div class="request__submit-btn">
                <button class="btn btn__color_blue" type="submit">Залишити заявку</button>
            </div>
        </form>
    </div>
</div>
<div class="popup" id="callbackPopup">
    <div class="popup__modal">
        <div class="popup__close"><img src="<?php bloginfo('template_url'); ?>/images/icons/close.png" alt="close popup"></div>
        <h2 class="mb0">Замовити дзвінок</h2>
        <p class="section__desc">Залиште номер телефону і ми зв’яжемося з Вами найближчим часом</p>
        <form class="popup__form" action="/">
            <div class="input__wr">
                <input id="modalCallbackPhone" type="text" placeholder="Ваш номер телефону" inputmode="tel">
                <div class="input__icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path></svg></div>
            </div>
            <div class="request__submit-btn">
                <button class="btn btn__color_blue" type="submit">Замовити дзвінок</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>