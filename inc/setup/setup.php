<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @author WebDevStudios
 */
function setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wd_s, refer to the
	 * README.md file in this theme to find and replace all
	 * references of wd_s
	 */
	load_theme_textdomain( 'belov-digital-test', get_template_directory() . '/build/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-width', 1920, 1080, false );

	// Register navigation menus.
	register_nav_menus(
		[
			'primary' => esc_html__( 'Primary Menu', 'belov-digital-test' ),
			'footer'  => esc_html__( 'Footer Menu', 'belov-digital-test' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'belov-digital-test' ),
		]
	);

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'belov_digital_test_custom_background_args',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
			]
		)
	);

	// Custom logo support.
	add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 500,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => [ 'site-title', 'site-description' ],
		]
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Gutenberg support for full-width/wide alignment of supported blocks.
	add_theme_support( 'align-wide' );

	// Gutenberg defaults for font sizes.
	add_theme_support(
		'editor-font-sizes',
		[
			[
				'name' => __( 'Small', 'belov-digital-test' ),
				'size' => 12,
				'slug' => 'small',
			],
			[
				'name' => __( 'Normal', 'belov-digital-test' ),
				'size' => 16,
				'slug' => 'normal',
			],
			[
				'name' => __( 'Large', 'belov-digital-test' ),
				'size' => 36,
				'slug' => 'large',
			],
			[
				'name' => __( 'Huge', 'belov-digital-test' ),
				'size' => 50,
				'slug' => 'huge',
			],
		]
	);

	// Gutenberg editor styles support.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/index.css' );

	// Gutenberg responsive embed support.
	add_theme_support( 'responsive-embeds' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );
