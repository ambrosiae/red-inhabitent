<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="site-area">
	<div class="blog-content">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<a class="entry-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->


	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- entry-content -->
	</div><!-- blog-content -->
</section><!--site-area-->
</article> <!--post-##-->
