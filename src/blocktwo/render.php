<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div class="primary-block">
	<h3>This is Block Two</h3>
	<p <?php echo get_block_wrapper_attributes(); ?>>
		<?php esc_html_e('Blocktwo – hello from a dynamic block!', 'blockone'); ?>
	</p>
</div>