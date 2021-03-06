<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">	<div id="footer-sidebar" class="secondary">
				<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
				</div>
				<div id="footer-sidebar2">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
				</div>
				<div id="footer-sidebar3">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
				</div>
				<a class= "footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" class="footer__logo-img"/></a>
				</div>

				<span class="copyright-footer">copyright &copy; 2018 inhabitent</span>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->


		<?php wp_footer(); ?>

	</body>


</html>
