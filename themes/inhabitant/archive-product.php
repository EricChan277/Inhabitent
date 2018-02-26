<?php
/**

 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

            <section class="product-info-container">
                <h1>Shop Stuff</h1>
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
                            <div class="product-page-types">
                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="product-type-links"><?php echo $term->name; ?></a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
						</section>
						


			</header><!-- .page-header -->
			<section class="product-listing">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
						<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>		
				<?php esc_url(get_permalink()) ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php endif; ?>
					<?php $price =  CFS()->get( 'price' );?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), "</a> " . $price . " </h2>"  );  ?>
	

				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">

					</div><!-- .entry-content -->
					</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
