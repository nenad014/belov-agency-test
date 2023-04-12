<?php
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @author WebDevStudios
 */
function content_width() {
	$GLOBALS['content_width'] = apply_filters( 'belov_digital_test_content_width', 640 );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\content_width', 0 );
