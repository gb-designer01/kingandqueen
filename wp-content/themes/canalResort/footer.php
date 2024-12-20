<footer class="footer">

    <div class="footer__logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="ロゴ"></div>
    <div class="footer__inner">
        <a href="<?php echo home_url(); ?>/concept" class="footer__item">コンセプト</a>
        <a href="<?php echo home_url(); ?>/bath" class="footer__item">サウナ・お風呂</a>
        <a href="<?php echo home_url(); ?>/waterbath" class="footer__item">水風呂</a>
        <a href="<?php echo home_url(); ?>/relaxation" class="footer__item">リラクゼーション</a>
        <a href="<?php echo home_url(); ?>/stonesauna" class="footer__item">岩盤浴</a>
        <!-- <a href="<?php echo home_url(); ?>/coming-soon" class="footer__item">屋外温浴バルコニー</a> -->
        <a href="<?php echo home_url(); ?>/food" class="footer__item">フードコート</a>
        <a href="<?php echo home_url(); ?>/guide" class="footer__item">利用案内</a>
        <a href="<?php echo home_url(); ?>/recruit" class="footer__item">採用情報</a>
        <a href="<?php echo home_url(); ?>/company" class="footer__item">会社概要</a>
        <a href="<?php echo home_url(); ?>/access" class="footer__item">アクセス</a>
    </div>
    <div class="footer__bottom">
        <p class="footer__copyright">Copyright ©キングアンドクイーン. All rights reserved.</p>
        <p class="footer__toTop" id="page-top"></p>
    </div>
</footer>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/swiper.js"></script>
<!-- spa -->
<script src="<?php echo get_template_directory_uri() ?>/js/spa.js"></script>
<!-- humburger -->
<script src="<?php echo get_template_directory_uri() ?>/js/humburger.js"></script>
<!-- map -->
<script src="<?php echo get_template_directory_uri() ?>/js/map.js"></script>
<!-- appURL -->
<script src="<?php echo get_template_directory_uri() ?>/js/appURL.js"></script>
<!-- smoothScroll -->
<script src="<?php echo get_template_directory_uri() ?>/js/smoothScroll.js"></script>
<!-- scrollToTop -->
<script src="<?php echo get_template_directory_uri() ?>/js/scrollToTop.js"></script>
<!-- translate -->
<script src="<?php echo get_template_directory_uri() ?>/js/translate.js"></script>

<?php wp_footer(); ?>
</body>

</html>