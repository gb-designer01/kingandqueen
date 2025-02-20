<footer class="footer">
    <div class="footer__image"><img src="<?php echo get_template_directory_uri(); ?>/images/nav/conceptImage.webp" alt=""></div>
    <div class="footer__inner">
        <a class="footer__logo"><img src="<?php echo get_template_directory_uri() ?>/images/nav/footerLogo.svg" alt="ロゴ"></a>
        <ul class="footer__menues">
            <li>
                <a href="<?php echo home_url(); ?>/concept" class="footer__item">コンセプト</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/bath" class="footer__item">サウナ・お風呂</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/waterbath" class="footer__item">水風呂</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/stonesauna" class="footer__item">岩盤浴</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/food" class="footer__item">フードコート</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/relaxation" class="footer__item">リラクゼーション</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/guide" class="footer__item">利用案内</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/access" class="footer__item">アクセス・シャトルバス</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/contact" class="footer__item">お問い合わせ</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/company" class="footer__item">会社概要</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/recruit" class="footer__item">採用情報</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav/arrow03.svg" alt="">
            </li>
        </ul>
        <p class="footer__copyright">Copyright ©キングアンドクイーン. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

<!-- アプリダウンロードリンクのURL変更 -->
<script src="<?php echo get_template_directory_uri() ?>/js/appDownload.js"></script>
<!-- スムーススクロール -->
<script src="<?php echo get_template_directory_uri() ?>/js/smoothscroll.js"></script>
<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- トップのスライダー -->
<script src="<?php echo get_template_directory_uri() ?>/js/swiper.js"></script>

</html>