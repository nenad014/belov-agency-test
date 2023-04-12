<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package belov-digital-test
 */

use function ACME\wd_s\print_copyright_text;
use function ACME\wd_s\print_social_network_links;
use function ACME\wd_s\print_mobile_menu;

?>

	<footer class="site-footer">

		<nav id="site-footer-navigation" class="footer-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Footer Navigation', 'belov-digital-test' ); ?>">
			<?php
			wp_nav_menu(
				[
					'fallback_cb'    => false,
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'menu',
					'container'      => false,
					'depth'          => 1,
				]
			);
			?>
		</nav><!-- #site-navigation-->

		<div class="site-info">
			<?php print_copyright_text(); ?>
			<?php print_social_network_links(); ?>
		</div><!-- .site-info -->

	</footer><!-- .site-footer-->

	<?php print_mobile_menu(); ?>
	<?php wp_footer(); ?>

</body>

</html>
