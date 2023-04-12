<?php
/**
 * Hook the theme's scaffolding template parts into the scaffolding template.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Hook the theme's scaffolding template parts into the scaffolding template.
 *
 * @author Carrie Forde
 */
function hook_theme_scaffolding() {
	$template_dir = 'template-parts/scaffolding/scaffolding';

	print_theme_scaffolding_nav();

	get_template_part( $template_dir, 'globals' );
	get_template_part( $template_dir, 'typography' );
	get_template_part( $template_dir, 'media' );
	get_template_part( $template_dir, 'icons' );
	get_template_part( $template_dir, 'buttons' );
	get_template_part( $template_dir, 'forms' );
	get_template_part( $template_dir, 'elements' );
}

add_action( 'belov_digital_test_scaffolding_content', __NAMESPACE__ . '\hook_theme_scaffolding' );
