<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="single-photo"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="single-info">
		<header>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class="price"><?php echo CFS()->get('price')?></p>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );

				?>
			<div>
				<button type="submit" class="single-product-buttons"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
				<button type="submit" class="single-product-buttons"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</button>
				<button type="submit" class="single-product-buttons"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
			</div>
			</div><!-- .entry-content -->
		</div>
		
	</article><!-- #post-## -->
					<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
					?>
			<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>