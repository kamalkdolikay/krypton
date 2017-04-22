<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
					<?php //single_post_title(); ?>
			<?php endif; ?>
			<section id="second" class="content no-header">
			<h1 class="text-center">Posts</h2>
			</section>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'krypton' ),
				'next_text'          => __( 'Next page', 'krypton' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'krypton' ) . ' </span>',
			) );

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		
<?php echo "index.php"; ?>
<?php get_footer(); ?>
