<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">

<div class="blog-image">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ); ?>
	<?php endif; ?>
</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
