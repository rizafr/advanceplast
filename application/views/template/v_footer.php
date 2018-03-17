<footer id="fh5co-footer" role="contentinfo">
	<div class="container">
		<div class="col-md-4 col-xs-12">
			<h3>PT. Advance Stabilindo Industry</h3>
			<ul class="contact-info">
				<li><i class="icon-map"></i>
					Head Office &amp; Factory
					MM2100 Industrial Town, Blok M-29
					Jl. Sulawesi III, Cikarang Barat, Kabupaten Bekasi 17520
				Jawa Barat, Indonesia</li>
			</ul>
		</div>

		<div class="col-md-4 col-xs-12 ">
			<h3>Contact Us</h3>
			<ul class="contact-info">
				<li
				<li><i class="icon-phone"></i>Tel. : +62 21 898 0935 (Hunting)</li>
				<li><i class="icon-phone"></i>Fax. : +62 21 898 0405</li>
				<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
				<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-xs-12">
			<h3>Follow Us</h3>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-google-plus"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>

		<div class="col-md-12 fh5co-copyright text-center">
			<p>&copy; <?= date('Y')?> by PT. Advance Stabilindo Industry All Rights Reserved.</p>
		</div>

	</div>
</footer>
</div>


<!-- jQuery -->
<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
<!-- Waypoints -->
<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
<!-- Flexslider -->
<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
<script src="<?php echo base_url().'theme/dist/js/lightbox.min.js'?>"></script>

<!-- MAIN JS -->
<script src="<?php echo base_url().'theme/js/main.js'?>"></script>
<script>
	jQuery(document).ready(function($) {
		$('.popup2').click(function(event) {
			var width  = 575,
			height = 400,
			left   = ($(window).width()  - width)  / 2,
			top    = ($(window).height() - height) / 2,
			url    = this.href,
			opts   = 'status=1' +
			',width='  + width  +
			',height=' + height +
			',top='    + top    +
			',left='   + left;
			window.open(url, 'facebook', opts);
			return false;
		});
	});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="<?php echo base_url().'theme/js/google_map.js'?>"></script>

</body>
</html>

