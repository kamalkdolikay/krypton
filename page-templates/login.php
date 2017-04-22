<?php
/**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage Krypton
 * 
 */
 ?>
<?php get_header(); ?>

<section id="first" class="content">
<div class="container">
<div class="row">

<div class="col-lg-8 col-offset-2">
<h1 class="text-center">Try Syndicate for free!</h1>
<p class="text-center"><small>These are flat, all-inclusive fees for system access, regular upgrades and support.</small></p>
</div>

<?php echo do_shortcode("[ihc-login-form]"); ?>

</div>
</div>
</section>

<?php get_footer(); ?>

<style>
.ihc-login-form-wrap{ margin-left: 36.333333%; }
</style>