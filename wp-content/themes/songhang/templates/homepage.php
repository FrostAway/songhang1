<?php
/*
	Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="row sh-row">
			<div class="col-md-4 sh-book">
				<div class="sh-book-form">
					FORM TÌM KIẾM
				</div>
			</div>
			<div class="col-md-8 sh-slide sh-col">
				<?php masterslider(3); ?>
			</div>
		</div>

<div class="row sh-row">
	<div class="col-md-6 sh-col">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 sh-title-content">
					CÁC HÌNH THỨC MUA VÉ
				</div>
			</div>
		</div>
		<div class="sh-forms-book-ticket-encircled">
			<div class="row sh-forms-book-ticket">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="number-format">
						1
					</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 sh-content-format">
                                    <b>Trực tiếp lên website, nhanh nhất - tiện nhất</b>
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="number-format">
						2
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 sh-content-format">
                                    <b>Qua chat</b>
				</div>
				
				<div class="col-xs-3 col-sm-3 col-md-3 sh-content-format">
					<div>
                                            <a href="skype:<?php echo ot_get_option('iz_skype1') ?>?call"><img src="http://mystatus.skype.com/bigclassic/<?php echo ot_get_option('iz_skype1') ?>" style="border: none;" width="100%"/></a>
					</div>
					<div>
						<a href="skype:<?php echo ot_get_option('iz_skype2') ?>?call"><img src="http://mystatus.skype.com/bigclassic/<?php echo ot_get_option('iz_skype2') ?>" style="border: none;" width="100%"/></a>
					</div>
					<div>
						<a href="skype:<?php echo ot_get_option('iz_skype3') ?>?call"><img src="http://mystatus.skype.com/bigclassic/<?php echo ot_get_option('iz_skype3') ?>" style="border: none;" width="100%"/></a>
					</div>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 sh-content-format">
					<div>
						<a href='ymsgr:sendim?<?php echo ot_get_option('iz_yahoo1') ?>'> <img alt='NỘI DUNG' src='http://opi.yahoo.com/online?u=<?php echo ot_get_option('iz_yahoo1') ?>&amp;m=g&amp;t=2' width="100%"/> </a>
					</div>
					<div>
						<a href='ymsgr:sendim?<?php echo ot_get_option('iz_yahoo2') ?>'> <img alt='NỘI DUNG' src='http://opi.yahoo.com/online?u=<?php echo ot_get_option('iz_yahoo2') ?>&amp;m=g&amp;t=2' width="100%"/> </a>
					</div>
					<div>
						<a href='ymsgr:sendim?<?php echo ot_get_option('iz_yahoo3') ?>'> <img alt='NỘI DUNG' src='http://opi.yahoo.com/online?u=<?php echo ot_get_option('iz_yahoo3') ?>&amp;m=g&amp;t=2' width="100%"/> </a>
					</div>
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="number-format">
						3
					</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 sh-content-format">
                                    <b>Gọi điện thoại cho Song Hằng</b>
					<br>
					<div class="row">
						<div class="col-sm-6 col-md-6 sh-hotline">
							<div>HOTLINE HÀ NỘI</div>
							<div class="row">
								<div class="col-md-12">
                                                                    <a href="tel:<?= ot_get_option('iz_hotline_hn'); ?>"><?= ot_get_option('iz_hotline_hn'); ?></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 sh-hotline">
							<div>HOTLINE SÀI GÒN</div>
							<div class="row">
								<div class="col-md-12">
									<a href="tel:<?= ot_get_option('iz_hotline_sg'); ?>"><?= ot_get_option('iz_hotline_sg'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="number-format">
						4
					</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 sh-content-format">
                                    <b>Đến trực tiếp phòng vé ABC tại</b>
				</div>
				<div class="sh-forms-book-ticket-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7447.49439181642!2d105.78491539999999!3d21.042799000000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1429675291757" width="100%" height="200" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 sh-col">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 sh-title-content">
					CÁC HÌNH THỨC THANH TOÁN
				</div>
			</div>
		</div>
		<div class="sh-forms-book-ticket-encircled">
			<div class="row sh-forms-book-ticket">
				<div class="col-sm-2 col-md-2">
					<div class="image-format">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/body/icon-11.png">
					</div>
				</div>
				<div class="col-sm-10 col-md-10 sh-content-format">
                                    <h4>THANH TOÁN BẰNG TIỀN MẶT TẠI VĂN PHÒNG</h4>
					Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng Vinair để thanh toán và nhận vé.
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-sm-2 col-md-2">
					<div class="image-format">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/body/icon-12.png">
					</div>
				</div>
				<div class="col-sm-10 col-md-10 sh-content-format">
                                    <h4>THANH TOÁN TẠI NHÀ</h4>
					Nhân viên sẽ giao vé & thu tiền tại nhà theo địa chỉ Quý khách cung cấp.
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-sm-2 col-md-2">
					<div class="image-format">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/body/icon-13.png">
					</div>
				</div>
				<div class="col-sm-10 col-md-10 sh-content-format">
                                    <h4>THANH TOÁN QUA CỔNG THANH TOÁN ĐIỆN TỬ</h4>
					Quý khách có thể thanh toán ngay (trực tuyến) thông qua cổng 123Pay, Senpay, Ngân Lượng.
				</div>
			</div>
			<div class="row sh-forms-book-ticket">
				<div class="col-sm-2 col-md-2">
					<div class="image-format">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/body/icon-14.png">
					</div>
				</div>
				<div class="col-sm-10 col-md-10 sh-content-format">
                                    <h4>THANH TOÁN QUA CHUYỂN KHOẢN</h4>
					Quý khách có thể thanh toán cho chúng tôi bằng cách chuyển khoản tại ngân hàng, chuyển qua thẻ ATM, hoặc qua Internet banking.
				</div>
				<div class="sh-forms-book-ticket-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/body/anh-ngan-hang-15.jpg">
				</div>
			</div>
		</div>
	</div>
</div>

<?php if (function_exists(clean_custom_menus_ticket())) clean_custom_menus_ticket(); ?>

<?php get_footer(); ?>
