<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! wpe_sh_get_attr( $atts, 'editor' ) ) {
	return;
}

$this->add_render_attribute( 'editor', 'class', [ 'wpe-text-editor' ] );
?>
<div <?php $this->print_render_attribute_string( 'editor' ); ?>><?php echo wpe_sh_get_attr( $atts, 'editor' ); ?></div>
