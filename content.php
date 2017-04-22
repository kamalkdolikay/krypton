<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>
	
	<?php
	if ( is_single() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		if ( is_home() && ! is_front_page() ) :
	?>
	
	<div class="container">
	<div class="row">
	<div class="col-lg-8 col-offset-2">
	<?php
	the_title( sprintf( '<h2 class="text-center"><a href="%s" rel="bookmark"  style="font-size:56px;">', esc_url( get_permalink() ) ), '</a></h2>' );
	?>
	</div>
	</div>
	</div>

	<?php
	else :
	the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	endif;
	endif;
	?>

	<?php
	if ( is_home() && ! is_front_page() ) :
	?>
	<div class="container">
	<div class="row">
	<div class="col-lg-8 col-offset-2 text-center">
	<?php
	the_content( sprintf( __( 'Continue reading %s', 'krypton' ),the_title( '<span class="screen-reader-text">', '</span>', false )) );
	?>
	</div>
	</div>
	</div>
	<?php
	else :
	the_content( sprintf( __( 'Continue reading %s', 'krypton' ),the_title( '<span class="screen-reader-text">', '</span>', false )) );
	endif;
	
	?>

	<footer class="entry-footer">
		<?php //twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'krypton' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>

</article>
<?php echo "content.php"; ?>