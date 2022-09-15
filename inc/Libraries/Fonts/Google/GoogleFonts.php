<?php

namespace WPEssential\Plugins\Libraries\Fonts\Google;

final class GoogleFonts
{
	public static    $font_url;
	protected static $fonts_loc_url = WPE_URL . 'assets/json/google-font-list.json';
	protected static $fonts_names;
	protected static $fonts         = [];

	/**
	 * Create a new element.
	 *
	 * @return static
	 */
	public static function make ()
	{
		return new GoogleFonts();
	}

	public function __construct ()
	{
		self::url();
		self::get_list();

		return $this;
	}

	private static function url ()
	{
		$protocol       = is_ssl() ? 'https' : 'http';
		self::$font_url = "{$protocol}://fonts.googleapis.com/css";
	}

	private static function get_list ()
	{
		$url   = self::$fonts_loc_url;
		$fonts = wpe_get_data_by_url( $url );
		if ( is_wp_error( $fonts ) ) {
			wp_die( $fonts->get_error_message(), $fonts->get_error_code(), [ 'url' => $url ] );
		}
		self::$fonts = wpe_josn_decode( $fonts, true );
		self::get_names();
	}

	public function get_font_style_links ( $name = '' )
	{
		if ( empty( self::$fonts_names ) ) {
			return [];
		}

		if ( ! empty( $name ) ) {
			return self::get_font_link( ucwords( $name ) . ':' . implode( ',', $this->variants() ) );
		}

		$links = [];
		foreach ( self::$fonts_names as $item ) {
			$links[ str_replace( ' ', '-', $item ) ] = self::get_font_link( $item . ':' . implode( ',', $this->variants() ) );
		}
		
		return $links;
	}

	public static function get_names ()
	{
		if ( self::$fonts ) {
			self::$fonts = array_keys( (array) self::$fonts );
		}
		self::$fonts_names = apply_filters( 'wpe/register/fonts/google', self::$fonts );
	}

	public static function get_font_link ( $font_family )
	{
		$query_args = [
			'family'  => urlencode( $font_family ),
			'subset'  => urlencode( 'latin,latin-ext' ),
			'display' => urlencode( 'swap' ),
		];

		return self::generate_link( $query_args );
	}

	private static function generate_link ( $args )
	{
		$fonts_url = add_query_arg( $args, self::$font_url );
		return esc_url_raw( $fonts_url );
	}

	private function variants ()
	{
		return apply_filters( 'wpe/register/fonts/variants', [
			'0,100;',
			'0,200;',
			'0,300;',
			'0,400;',
			'0,500;',
			'0,600;',
			'0,700;',
			'0,800;',
			'0,900;',
			'1,100;',
			'1,200;',
			'1,300;',
			'1,400;',
			'1,500;',
			'1,600;',
			'1,700;',
			'1,800;',
			'1,900;',
		] );
	}

	public function get_fonts_links ( $font_families )
	{
		$query_args = [
			'family'  => urlencode( implode( '|', $font_families ) ),
			'subset'  => urlencode( 'latin,latin-ext' ),
			'display' => urlencode( 'swap' ),
		];
		return self::generate_link( $query_args );
	}
}
