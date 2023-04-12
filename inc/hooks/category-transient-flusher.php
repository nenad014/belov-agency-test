<?php
/**
 * Flush out the transients used in belov_digital_test_categorized_blog.
 *
 * @package belov-digital-test
 */

namespace ACME\wd_s;

/**
 * Flush out the transients used in belov_digital_test_categorized_blog.
 *
 * @author WebDevStudios
 *
 * @return bool Whether or not transients were deleted.
 */
function category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return false;
	}

	// Like, beat it. Dig?
	return delete_transient( 'belov_digital_test_categories' );
}

add_action( 'delete_category', __NAMESPACE__ . '\category_transient_flusher' );
add_action( 'save_post', __NAMESPACE__ . '\category_transient_flusher' );
