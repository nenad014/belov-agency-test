<?php
/**
 * Register widget area.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @author WebDevStudios
 */
function widgets_init() {

	// Define sidebars.
	$sidebars = [
		'sidebar-1' => esc_html__( 'Sidebar 1', 'belov-digital-test' ),
	];

	// Loop through each sidebar and register.
	foreach ( $sidebars as $sidebar_id => $sidebar_name ) {
		register_sidebar(
			[
				'name'          => $sidebar_name,
				'id'            => $sidebar_id,
				'description'   => /* translators: the sidebar name */ sprintf( esc_html__( 'Widget area for %s', 'belov-digital-test' ), $sidebar_name ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			]
		);
	}

}

add_action( 'widgets_init', __NAMESPACE__ . '\widgets_init' );
