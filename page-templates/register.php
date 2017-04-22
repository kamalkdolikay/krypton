<?php
/**
 * Template Name: Register
 *
 * @package WordPress
 * @subpackage Krypton
 * 
 */
 ?>
<?php wp_head(); ?>
<head>
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.5.3' type='text/css' media='all' />
</head>
<section id="first" class="content">
<div class="container">
<div class="row">

<div class="col-lg-8 col-offset-2">
<h1 class="text-center">Try Syndicate for free!</h1>
<p class="text-center"><small>These are flat, all-inclusive fees for system access, regular upgrades and support.</small></p>
</div>
<div class="col-lg-4">
<?php echo do_shortcode("[ihc-register]"); ?>
</div>
<div class="col-lg-8">
<div class="pricing-table gray">
<img class="img-responsive" src="http://localhost/wptest/wp-content/uploads/2016/07/xlanding_slider_03.jpg" alt="">
</div>
</div>

</div>
</div>
</section>

<?php wp_footer(); ?>
