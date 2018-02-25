<?php

/* Template Name: About */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
		<div class= "banner">
	<h1> About </h1>
</div>

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->



	<div class="entry-content">
		<?php the_content(); ?>

		<h2>Our Story</h2>
<?php echo CFS()->get( 'our_story' ); ?>

		<h2>Our Team</h2>
<?php echo CFS()->get( 'our_team' ); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


  <div class="sidebar-container" >
    <?php get_sidebar(); ?> 
  </div>

<?php get_footer(); ?>