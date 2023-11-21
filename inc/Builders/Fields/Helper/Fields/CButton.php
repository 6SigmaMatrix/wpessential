<?php

namespace WPEssential\Plugins\Builders\Fields\Helper\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\Fields\Choose;
use WPEssential\Plugins\Builders\Fields\Icons;
use WPEssential\Plugins\Builders\Fields\Select;
use WPEssential\Plugins\Builders\Fields\Text;

trait CButton
{
	public function button ()
	{
		$opt = Select::make( __( 'Button Type' ), "common_{$this->common_key}_botto_type" )
		             ->options( wpe_info_type() )
		             ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Select::make( __( 'Button Size' ), "common_{$this->common_key}_botto_size" )
		             ->options( wpe_element_size() )
		             ->default( 'xs' )
		             ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = TEXT::make( __( 'Button Label' ), "common_{$this->common_key}_botto_text" )
		           ->default( __( 'Read More', 'wpessential' ) )
		           ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Icons::make( __( 'Button Icon' ), "common_{$this->common_key}_botto_icon" )
		            ->label_block( true )
		            ->default( __( 'Read More', 'wpessential' ) )
		            ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Choose::make( __( 'Icon Position' ), "common_{$this->common_key}_botto_icon" )
		             ->label_block( true )
		             ->default( __( 'Read More', 'wpessential' ) )
		             ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );
	}
}
