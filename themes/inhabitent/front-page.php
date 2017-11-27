<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="site">
  <!-- div id="primary" -->
  <main id="main" class="site-main" role="main">

  <div class="home-image">
  <img src="<?php echo get_template_directory_uri() . '/content-folder/images/logos/inhabitent-logo-full.svg'?>" class="home-logo" alt="inhabitent camping logo">
</div>

  <?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <!-- <h1 class="page-title screen-reader-text"><?php
        // single_post_title();
        ?></h1> -->
      </header>
    <?php endif; ?>
    
    <!-- <?php /* Start the Loop */ ?>
    <?php 
    // while (
      // have_posts()
      // ):
      // the_post();
      ?>
      <?php
      // get_template_part( 'template-parts/content' );
      ?>
      <i class="fa fa-user" aria-hidden="true"></i>
    <?php
  // endwhile;
  ?> -->

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

      </div><!--blog-image-->
</main><!-- #main -->
</div><!-- #primary -->


<section class="shop-section">
    <h2>Shop Stuff</h2>
        <section class="shop-front">
          <?php
              $terms = get_terms( array(
                  'taxonomy' => 'product-type',
                  'hide_empty' => 0,
              ) );
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
          ?>
                <?php foreach ( $terms as $term ) : ?>

                    <div class="product-type">
                        <img src="<?php echo get_template_directory_uri() . '/content-folder/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                      <p><?php echo $term->description; ?> Description description description description description description description</p>
                      <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                    </div>

                <?php endforeach; ?>
              
          <?php endif; ?>
        </section>
      </section>

<section class="all-items">

<?php
  $args = array('numberposts' => '3', 'order' => 'DES');
  $product_posts = get_posts($args);?>
          <?php foreach ($product_posts as $post) : setup_postdata($post); ?>
          <div class="item-container">

          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium' ); ?>
      <?php endif; ?>
      <div class="entry-meta">
          <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
      </div><!-- .entry-meta -->
      <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                      
    </div>
          <?php endforeach; wp_reset_postdata(); ?>
          </section>

        <?php get_footer(); ?>
