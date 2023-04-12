<?php

// Register ACF block.
add_action('acf/init', 'my_register_acf_block_types');
function my_register_acf_block_types() {
    // Check if function exists.
    if( !function_exists('acf_register_block_type') ) {
        return;
    }

    // Register block.
    acf_register_block_type(array(
        'name'              => 'belov-test-block',
        'title'             => __('Belov Test Block'),
        'description'       => __('A custom Belov Test block.'),
        'render_template'   => get_template_directory() . '/template-parts/blocks/belov-test-block/belov-test-block.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'belov-test-block', 'custom' ),
        'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/belov-test-block/belov-test-block.css',
        'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/belov-test-block/belov-test-block.js',
    ));
}

?>
