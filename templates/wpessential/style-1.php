<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( '' === wpe_sh_get_attr( $atts, 'title' ) ) {
	return;
}

$this->add_render_attribute( 'title', 'class', 'wpe-heading-title' );

if ( ! empty( wpe_sh_get_attr( $atts, 'size' ) ) ) {
	$this->add_render_attribute( 'title', 'class', 'wpe-size-' . wpe_sh_get_attr( $atts, 'size' ) );
}

$title = wpe_sh_get_attr( $atts, 'title' );

if ( ! empty( wpe_sh_get_attr( $atts, 'link.url' ) ) ) {
	$this->add_link_attributes( 'url', wpe_sh_get_attr( $atts, 'link' ) );

	$title = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $title );
}

printf( '<%1$s %2$s>%3$s</%1$s>', $this->validate_html_tag( wpe_sh_get_attr( $atts, 'html_tag' ) ), $this->get_render_attribute_string( 'title' ), $title );
