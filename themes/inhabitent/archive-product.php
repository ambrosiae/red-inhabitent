<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->


		<?php
					$terms = get_terms( array(
							'taxonomy' => 'product-type',
							'hide_empty' => 0,
					) );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>
					<div class="product-type-container">
						<?php foreach ( $terms as $term ) : ?>

								<div class="product-type">
					
									<p><?php echo $term->description; ?></p>
									<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
								</div>

						<?php endforeach; ?>
					</div>
					
			<?php endif; ?>
						
			<section class="all-items">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
<div class="item-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="product-image">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
</div>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

</div><!-- #post-## -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
