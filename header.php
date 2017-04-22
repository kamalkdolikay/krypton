<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php wp_title('|',true,'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="Syndicate - One Page Bootstrap Multipurpose Template">
		<meta name="author" content="Awerest - interactive agency">
		<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js" type="text/javascript"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:200,400'>
		<link rel="image_src" href="thumbnail.png">
		<link rel="icon" type="image/ico" href="favicon.ico">
		<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.5.3' type='text/css' media='all' />

		<?php wp_head(); ?>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset='61'>
		<!--<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>-->
	<!--start navigation-->
		<div class="navbar navbar-fixed-top" role="navigation">
			<div class="container" data-start="padding: 15px 0px;" data-200="padding: 0px 0px;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#intro" class="navbar-brand"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav pull-right">
						<!--<li><a href="<?php //echo home_url(); ?>">Home</a></li>
						<li><a href="<?php //echo home_url(); ?>/#services">Services</a></li>
						<li><a href="<?php //echo site_url('/features/'); ?>">Features</a></li>
						<li><a href="<?php //echo site_url('/work/'); ?>">Work</a></li>
						<li><a href="<?php //echo site_url('/team/'); ?>">Team</a></li>
						<li><a href="<?php //echo site_url('/blog/'); ?>">Blog</a></li>
						<li><a href="<?php //echo site_url('/contact/'); ?>">Contact</a></li>-->
						<li><?php wp_nav_menu( array('menu' => 'main', 'menu_class' => 'nav navbar-nav pull-right') ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	<!--end navigation-->