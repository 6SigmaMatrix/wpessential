<?php

use Elementor\Group_Control_Image_Size;
use Elementor\Plugin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( empty( $atts[ 'image' ][ 'url' ] ) ) {
	return;
}

$this->add_render_attribute( 'title', 'class', 'wpe-image' );

$has_caption = ( ! empty( $atts[ 'caption_source' ] ) && $atts[ 'caption_source' ] !== 'none' );

$link = $this->get_link_url( $atts );

if ( $link ) {
	$this->add_link_attributes( 'link', $link );

	if ( Plugin::$instance->editor->is_edit_mode() ) {
		$this->add_render_attribute( 'link', [
			'class' => 'elementor-clickable',
		] );
	}

	if ( 'custom' !== $atts[ 'link_to' ] ) {
		$this->add_lightbox_data_attributes( 'link', $atts[ 'image' ][ 'id' ], $atts[ 'open_lightbox' ] );
	}
}
if ( ! Plugin::$instance->experiments->is_feature_active( 'e_dom_optimization' ) ) {
	?>
	<div <?php $this->print_render_attribute_string( 'wrapper' ); ?>>
	<?php
}
if ( $has_caption ) :
	?>
	<figure class="wp-caption">
<?php
endif;
if ( $link ) :
	?>
	<a <?php $this->print_render_attribute_string( 'link' ); ?>>
<?php
endif;
Group_Control_Image_Size::print_attachment_image_html( $atts );
if ( $link ) :
	?>
	</a>
<?php
endif;
if ( $has_caption ) :
	?>
	<figcaption class="widget-image-caption wp-caption-text">
		<?php
		echo wp_kses_post( $this->get_caption( $atts ) );
		?>
	</figcaption>
<?php
endif;
if ( $has_caption ) :
	?>
	</figure>
<?php
endif;
if ( ! Plugin::$instance->experiments->is_feature_active( 'e_dom_optimization' ) ) {
	?>
	</div>
	<?php
}
