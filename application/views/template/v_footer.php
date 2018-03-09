<footer id="fh5co-footer" role="contentinfo">
	<div class="container">
		<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
			<h3>About Us</h3>
			<p>Advanceplast Company in PVC Heat Stabilizer and Plastic Masterbatch within ASIA with the commitment to increase asset of the company strategically</p>
		</div>

		<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
			<h3>Follow Us</h3>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-google-plus"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>


		<div class="col-md-12 fh5co-copyright text-center">
			<p>&copy; 2018 by PT. Advance Stabilindo Industry All Rights Reserved.</p>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#btncari').hide();
	});
</script>
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

