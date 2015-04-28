
</div> <!-- // .container -->

<div class="footer">
    <div class="sh-partners">
        <div class="container">
            <div id="list-logos" class="row">
                <?php query_posts(array('post_type' => 'lshowcase', 'showposts' => -1)) ?>
                <?php if (have_posts()):while (have_posts()): the_post(); ?>
                        <div class="col-sm-2 slides">
                            <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid sh-footer-container">
        <div class="row sh-footer">
            <div class="col-sm-6 col-md-4 sh-footer-content">
                <?php //echo do_shortcode('[contact-form-7 id="376" title="Form nhập email đăng kí tin khuyến mại"]');   ?>

                <?php //echo do_shortcode('[newsletter_form]'); ?>
                <div class="sh-footer-text-first">
                    Đăng ký nhận bản tin
                </div>

                <script type="text/javascript">
//<![CDATA[
                    if (typeof newsletter_check !== "function") {
                        window.newsletter_check = function (f) {
                            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                            if (!re.test(f.elements["ne"].value)) {
                                alert("The email is not correct");
                                return false;
                            }
                            for (var i = 1; i < 20; i++) {
                                if (f.elements["np" + i] && f.elements["np" + i].value === "") {
                                    alert("");
                                    return false;
                                }
                            }
                            if (f.elements["ny"] && !f.elements["ny"].checked) {
                                alert("You must accept the privacy statement");
                                return false;
                            }
                            return true;
                        };
                    }
//]]>
                </script>

                <div class="newsletter newsletter-subscription">
                    <form class="news-form" method="post" action="<?php echo home_url(); ?>/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                        <label>
                            Đăng ký email để nhận tin khuyễn mãi đặc biệt và các chương trình khuyễn mãi
                        </label>
                        <input type="email" class="form-control email" name="ne" required="" placeholder="Địa chỉ Email" aria-describedby="basic-addon2">
                        <button class="news-submit"><span class="glyphicon glyphicon-menu-right"></span></button>
                    </form>
                </div>
                <?php //echo do_shortcode('[newsletter_form]'); ?>
            </div>
            <div class="col-sm-6 col-md-2 sh-footer-content">
                <div class="sh-footer-text-first">
                    Khách hàng
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(34) ?>">Liên hệ</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(280) ?>">Hướng dẫn thanh toán</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(282) ?>">Thông tin chuyển khoản</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(284) ?>">Hướng dẫn đặt vé</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(286) ?>">Câu hỏi thường gặp</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(288) ?>">Trang tư vấn</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 sh-footer-content">
                <div class="sh-footer-text-first">
                    Website
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(32) ?>">Giới thiệu</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(296) ?>">Các đơn vị hợp tác</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(298) ?>">Cơ hội hợp tác</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(302) ?>">Điều khoản sử dụng</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_page_link(304) ?>">Chính sách bảo mật</a>
                </div>
                <div class="sh-footer-text">
                    <a href="<?php echo get_category_link(10); ?>">Tin tức</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 sh-footer-content">
                <div class="sh-footer-text-first">
                    Thông tin liên hệ
                </div>
                <div class="sh-footer-text">
                    Địa chỉ: <?php echo ot_get_option('iz_address'); ?>
                </div>
                <div class="sh-footer-text">
                    Hotline: <?php echo ot_get_option('iz_hotline_hn') ?>
                </div>
                <div class="sh-footer-text">
                    Điện thoại: <?php echo ot_get_option('iz_phone'); ?>
                </div>
                <div class="sh-footer-text">
                    Fax: <?php echo ot_get_option('iz_fax'); ?>
                </div>
                <div class="sh-footer-text">
                    Email: <?php echo ot_get_option('iz_email'); ?>
                </div>
            </div>
        </div>
        <div class="row sh-footer">
            <div class="sh-copyright">
                <p>Copyright &copy;2015 - All right reserved by SongHangTravel</p>
                <p><a href="iziweb.vn" style="color: #fff;">Design by Iziweb.vn</a></p>
            </div>
        </div>
    </div>

    <script>
        (function ($) {
            $(document).ready(function () {
                $('.sh-banner').css('top', 10);
                $(window).scroll(function () {
                    var top = $(this).scrollTop();
                    if (($(document).height() - top - $(this).height()) >= $('.footer').height()) {
                        $('.sh-banner').animate({'top': top + 10}, 50);
                    } else {
                    }
                });

                var slider = $('#list-logos').bxSlider({
                    minSlides: 6,
                    maxSlides: 6,
                    moveSlides: 1,
                    slideWidth: 200,
                    auto: true,
                    pager: false
                });

                $('.bx-controls-direction').click(function () {
                    var i = $(this).attr('data-slide-index');
                    slider.goToSlide(i);
                    slider.stopAuto();
                    slider.startAuto();
                    return false;
                });


                $('#basic-addon2').click(function () {
                    $(this).closest('form').submit();
                });
            });


        })(jQuery);
    </script>
</div>



<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/bxslider/jquery.bxslider.min.js'></script>

<?php wp_footer(); ?>
<script type='text/javascript'>
        window._sbzq || function (e) {
            e._sbzq = [];
            var t = e._sbzq;
            t.push(["_setAccount", 19591]);
            var n = e.location.protocol === "https:" ? "https:" : "http:";
            var r = document.createElement("script");
            r.type = "text/javascript";
            r.async = true;
            r.src = n + "//static.subiz.com/public/js/loader.js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(r, i);
        }(window);
</script>

</body>
</html>
