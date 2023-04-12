<?php
/**
 * Belov Test Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

//Create ID attribute allowing for custom "anchor" value.
$id = 'belov-test-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

//Create class attribute allowing for custom "className" and "align" values.
$className = 'belov-test-block block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <h2 class="title"><?php echo $title; ?></h2>
    <div class="list-wrapper">
        <?php if(have_rows('list')) :
            while(have_rows('list')) : the_row(); ?>
            <div class="single-list-item">
                <img src="<?php echo get_sub_field('list_icon'); ?>">
                <h3 class="list-title"><?php echo get_sub_field('list_title'); ?></h3>
                <p><?php echo get_sub_field('list_description'); ?></p>
                <a href="<?php echo get_sub_field('list_url'); ?>" class="list-btn">Visit</a>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>