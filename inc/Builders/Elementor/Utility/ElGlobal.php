<?php

namespace WPEssential\Plugins\Builders\Elementor\Utility;

final class ElGlobal
{

	public static function constructor ()
	{
		//add_action( 'elementor/element//after_section_end', [ __CLASS__, 'run' ], 10, 2 );
	}

	public static function run ( $object, $args )
	{
		wpe_error( $object);
	}

}
