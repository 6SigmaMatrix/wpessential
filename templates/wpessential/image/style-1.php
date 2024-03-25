<?php

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$atts = $this->atts;
if ( ! wpe_array_get( $atts, wpe_editor_key( 'image.url' ) ) ) {
	return;
}

$this->add_render_attribute( 'wrapper', 'class', 'wpe-image-wrapper' );
$this->add_render_attribute( 'wrapper_inner', 'class', [ 'wpe-image-wrapper-inner', 'wpe-image' ] );
$this->add_render_attribute( 'span_wrapper', 'class', [ 'wpe-image-span-wrapper' ] );
$has_caption = $this->has_caption();
?>
<div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
	<div <?php echo $this->get_render_attribute_string( 'wrapper_inner' ); ?>>
		<?php
		$img_size = wpe_array_get( $atts, wpe_editor_key( 'image_size' ) );
		switch ( $img_size ) {
			case 'custom':
				$img_size = wpe_array_get( $atts, wpe_editor_key( 'image_custom_dimension' ) );
				break;
			default:
		}

		$_link = wpe_array_get( $atts, wpe_editor_key( 'link_to' ) );

		if ( $_link !== 'none' ) {
			switch ( $_link ) {
				case 'file':
					$link = get_the_permalink( wpe_array_get( $atts, wpe_editor_key( 'image.id' ) ) );
					$this->add_render_attribute( 'link', 'href', $link );
					break;
				case 'custom':
					$this->add_link_attributes( 'link', wpe_array_get( $atts, wpe_editor_key( 'link' ) ) );
					break;
			}

			echo "<a {$this->get_render_attribute_string( 'link' )}>";
		}

		if ( ! $has_caption ) {
			$img_url = wp_get_attachment_image_url( wpe_array_get( $atts, wpe_editor_key( 'image.id' ) ), $img_size );
			$this->add_render_attribute( 'span_wrapper', 'style', 'background-image:url("' . $img_url . '")' );
		}
		?>
		<span <?php echo $this->get_render_attribute_string( 'span_wrapper' ); ?>>
			<?php
			if ( $has_caption ) {
				?>
				<figure class="wp-caption">
					<?php
					echo wp_get_attachment_image( wpe_array_get( $atts, wpe_editor_key( 'image.id' ) ), \is_array( $img_size ) ? array_values( $img_size ) : $img_size );
					if ( $this->get_caption() ) {
						?>
						<figcaption class="widget-image-caption wp-caption-text">
							<?php echo wp_kses_post( $this->get_caption() ) ?>
						</figcaption>
					<?php } ?>
				</figure>
				<?php
			}
			?>
		</span>
		<?php
		if ( $_link ) {
			echo '</a>';
		}
		?>
	</div>
</div>
