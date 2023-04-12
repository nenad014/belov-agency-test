<?php
/**
 * Inline Critical CSS.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Inline Critical CSS.
 *
 * @author Corey Collins
 */
function critical_css() {
	?>
	<style>
		<?php include get_stylesheet_directory() . '/build/critical.css'; ?>
	</style>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\critical_css', 1 );
