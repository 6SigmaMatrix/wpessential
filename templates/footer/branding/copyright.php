<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="wpe-footer-bottom">
	<p>
		<?php
		echo sprintf(
			esc_html__( '© %s WPEssential - All Rights Reserved - Made By %s', 'wpessential' ),
			date( 'Y' ),
			'<a href="' . esc_url( 'wpessential.org' ) . '">' . esc_html__( 'WPEssenital', 'wpessential' ) . '</a>'
		);
		?>
	</p>
</div>
