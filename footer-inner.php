	<!--start footer section-->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 margin copy">
						<p>2013 &copy; Awerest - interactive studio</p>
					</div>
					<div class="col-lg-4 col-sm-6 col-offset-2 margin social">
						<a class="facebook" href="http://www.facebook.com/awerest" target="_blank">Facebook</a> / 
						<a class="twitter" href="http://www.twitter.com/awerest" target="_blank">Twitter</a> / 
						<a class="google" href="https://plus.google.com/u/0/104533843132286032110/posts" target="_blank">Google+</a> / 
						<a class="instagram" href="http://www.instagram.com/awerest" target="_blank">Instagram</a>
					</div>
				</div>
			</div>
		</section>
	<!--end footer section-->
	<!--start back to top button-->
		<a href="#intro" class="hidden-sm go-top" data-0="opacity: 0;" data-1000="opacity: 1;">Go Top</a>
	<!--end back to top button-->
	<!--start scripts - IMPORTANT: all scripts MUST be loaded after jquery-latest.js as now-->
	<!--latest jQuery-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
	<!--main bootstrap js-->
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<!--enable responsive features in IE8-->
	<!--[if lte IE 8]>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--retina support-->
		<script src="<?php bloginfo('template_url'); ?>/js/retina.js" type="text/javascript"></script>
	<!--smooth scroll on page-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js" type="text/javascript"></script>
	<!--responsive embed videos-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.min.js" type="text/javascript"></script>
	<!--custom scrollbar-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<!--carousel swipe-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.touchwipe.min.js"></script>
	<!--animated elements-->
		<script src="<?php bloginfo('template_url'); ?>/js/skrollr.js"></script>
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
		<![endif]-->
	<!--tour-->
		<script src="<?php bloginfo('template_url'); ?>/js/guideline.main.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/guideline.steps.js"></script>
	<!--work / blog-->
		<script src="<?php bloginfo('template_url'); ?>/js/toucheffects.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/modals.js"></script>
	<!--contact form-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.form.js"></script>
	<!--menu close on select-->
		<script>
			if ($('.navbar-toggle:visible').length) {
				$('.navbar a').click(function () { $(".nav-collapse").collapse("hide") });
			}
		</script>
	<!--google analytics-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'Your Google Analytics Code']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<!--custom script-->
		<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
	<!--end scripts-->
	</body>
</html>