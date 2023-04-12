<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'belov-digital-test' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'belov-digital-test' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'belov-digital-test' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'belov-digital-test' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'belov-digital-test' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'belov-digital-test' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'belov-digital-test' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'belov-digital-test' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
