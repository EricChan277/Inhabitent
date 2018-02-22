<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<!-- Product terms -->
            <section class="product-info container">
                <h2>Shop Stuff</h2>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product_type',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $terms ) ) :
                    ?>
                    <div class="product-type-blocks">
                        <?php foreach ( $terms as $term ) :
                            ?>
                            <div class="product-type-block-wrapper">
                                <img class="prod-type-img" src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg"
                                     alt="<?php echo $term->name; ?>"/>
                                <p><?php echo $term->description; ?></p>
                                <p>
                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="btn"><?php echo $term->name; ?> Stuff</a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>



<h2> Inhabitent Journal </h2>

<?php $args = array(
  	'order' => 'ASC',
  	'posts_per_page' => 3,
  	'post_type' => 'post',
); ?>

<?php $journal = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $journal->have_posts() ) : ?>

    <section class="journal-list">
        <?php while ( $journal->have_posts() ) : $journal->the_post(); ?>

        
            <article class="journ-art">  
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
                <h2>
                     <?php the_title();?>
                </h2> 
                <?php endif; ?>
               
                <div class="entry-meta">
    
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                <a href="<?php the_permalink(); ?>">Read Entry</a>
                </div><!-- .entry-meta -->
            </article>

        <?php endwhile; ?>
    </section>

  <?php the_posts_navigation(); ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

                
<?php get_sidebar(); ?>
<?php get_footer(); ?>




