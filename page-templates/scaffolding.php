<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, belov_digital_test_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package belov-digital-test
 */

use function ACME\wd_s\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'belov_digital_test_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
