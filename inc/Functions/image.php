<?php
if ( ! function_exists( 'wpe_get_image_from_url' ) ) {
	/**
	 * Returns an array of the attachment's properties.
	 *
	 * @param string $url URL to the image.
	 * @return array
	 */
	function wpe_get_image_from_url ( string $url )
	{
		$image_id = wpe_get_image_id_by_url( $url );
		$image    = wp_get_attachment_image_src( $image_id, 'full' );

		return [
			'url'       => $image[ 0 ],
			'width'     => $image[ 1 ],
			'height'    => $image[ 2 ],
			'thumbnail' => $image[ 3 ],
		];
	}
}

if ( ! function_exists( 'wpe_get_image_id_by_url' ) ) {
	/**
	 * Returns the attachment object.
	 *
	 * @static
	 * @access public
	 * @see https://pippinsplugins.com/retrieve-attachment-id-from-image-url/
	 * @param string $url URL to the image.
	 * @return int|string Numeric ID of the attachement.
	 */
	function wpe_get_image_id_by_url ( string $url )
	{
		global $wpdb;

		if ( empty( $url ) ) {
			return 0;
		}

		$attachment = wp_cache_get( 'wpe_image_id_' . md5( $url ), null );
		if ( ! $attachment ) {
			$attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE guid = %s;", $url ) );
			wp_cache_add( 'wpe_image_id_' . md5( $url ), $attachment, null );
		}

		if ( ! empty( $attachment ) ) {
			return $attachment[ 0 ];
		}
		return 0;
	}
}