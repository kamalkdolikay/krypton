<?php get_header(); ?>

<section id="second" class="content no-header">
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">

<h1 class="text-center"><?php the_title(); ?></h1>
<p class="text-center"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

<div class="row text-center">
<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} ?>
</div>

<div class="text-center">
<?php the_content(); ?>
</div>

<?php get_template_part('comments', get_post_format()); ?>

</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>