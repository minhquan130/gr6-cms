<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin liên hệ</h3>
					<div class="content-contact">
						<p>Website chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
						<p>
							<strong>Địa chỉ:</strong> TDC, Thủ Đức, Hồ Chí Minh
						</p>
						<p>
							<strong>Email: </strong> group6.cms.tdc@gmail.com
						</p>
						<p>
							<strong>Điện thoại: </strong> 0123456789
						</p>
						<p>
							<strong>Website: </strong> https://group6cms.net
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin khác</h3>
					<div class="content-list">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container' => 'false',
								'menu_id' => 'footer-menu',
								'menu_class' => 'footer-menu'
							)
						); ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Form liên hệ</h3>
					<div class="content-contact">
						<form action="/" method="GET" role="form">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="text" name="" id="" class="form-control" placeholder="Họ và Tên">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
									<input type="email" name="" id="" class="form-control" placeholder="Địa chỉ mail">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
									<input type="text" name="" id="" class="form-control" placeholder="Số điện thoại">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="text" name="" id="" class="form-control" placeholder="Tiêu đề">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<button type="submit" class="btn-contact">Liên hệ ngay</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2020 HKSHOP All Rights Reserved - Design by Group 6 CMS</p>
	</div>
</footer>
</div>
<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0"
	nonce="8KnxZWth"></script>
<?php wp_footer(); ?>
</body>

</html>