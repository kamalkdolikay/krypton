<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Krypton
 * 
 */
 ?>
<?php get_header(); ?>

<section id="fourth" class="content no-header">
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<h1 class="text-center">My Posts</h1>
<p class="text-center">Did we mention to you that we like onepage websites? Sure we did! But now we are extending modals with more options, check it out by clicking on one of the blog items:</p>
</div>

<div class="col-lg-12">
<div class="row">
<?php
$i = 1;
$args = array(
	'post_type' => 'post'
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
	<div class="col-lg-4 col-sm-4">
	<div class="thumbnail">
	<ul>
	<li class="readtime"><i class="icon-time"></i>
	<p>3 min read</p>
	</li>
	<li class="love"><i class="icon-picture"></i>
	<p>Gallery</p>
	</li>
	<li class="date"><i class="icon-calendar-empty"></i>
	<p><?php the_date(); ?></p>
	</li>
	</ul>
	<a href="<?php the_permalink(); ?>" role="button" data-toggle="modal">
	<img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($query->ID) ); ?>" alt="">
	<div class="info">
	<h4><?php the_title(); ?></h4>
	<p><span><?php the_author(); ?></span></p>
	<p><small><?php the_content(); ?></small></p>
	</div>
	</a>
	</div>
	</div>
		<?php
		if($i % 3 == 0) {echo '</div><div class="row">';}
		$i++;
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	
}
?>
</div>

<?php get_footer(); ?>
