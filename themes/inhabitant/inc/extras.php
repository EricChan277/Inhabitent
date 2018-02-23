<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */
add_filter( 'login_headertitle', 'inhabitent_login_title');
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
	height:65px;
	width:320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function inhabitent_login_url($url) {
		return get_home_url();
}

add_filter( 'login_headerurl', 'inhabitent_login_url' );


function inhabitent_login_title() {
	return 'Inhabitent';
}


function front_hero_style() {

	if (! is_front_page()) {
		return;
	}
	?>
<?php
	$image =  CFS()->get('hero_image');
	$logo ?>= <?php get_template_directory_uri() .  '/images/logos/inhabitent-logo-full.svg'; ?>
<?php
	$banner_css = ".page-template-default .site-header {
		background:	
		linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), 
		url({$image}); no-repeat center bottom;
		background-size: 200px 200px, cover, cover;
		height: 100vh;
	}";



	wp_add_inline_style ('inhabitent-style', $banner_css);
}


function hero_style() {

	if ( ! is_page_template('page-templates/about.php')) {
		return;
	}
	$image =  CFS()->get( 'hero_image' );

	$banner_css = ".page-template-about .site-header {
		background:	
		linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), 
		url({$image}); no-repeat center bottom;
		background-size:cover, cover;
		height: 100vh;
	}";

	wp_add_inline_style ('inhabitent-style', $banner_css);
}

add_action( 'wp_enqueue_scripts', 'front_hero_style');
add_action( 'wp_enqueue_scripts', 'hero_style');

