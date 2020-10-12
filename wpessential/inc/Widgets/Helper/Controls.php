<?php

namespace WPEssential\Plugins\Widgets\Helper;

use WPEssential\Plugins\Helper\Help as Traits;

trait Controls
{
	use Traits;

	/**
	 * Global arguments of the controls.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected|static|satatic
	 */
	protected static function global ( array $new_args )
	{
		$args     = [
			'class'       => 'wpe-widgets widefat',
			'title'       => '',
			'description' => '',
			'placeholder' => '',
			'value'       => '',
			'rows'        => 10,
			'cols'        => 50,
			'max'         => 5,
			'maxlength'   => 100,
			'min'         => 1,
			'pattern'     => '[0-9]{3}-[0-9]{2}-[0-9]{3}',
			'readonly'    => '',
			'required'    => true,
			'size'        => '',
			'step'        => 1,
			'options'     => []
		];
		$new_args = wp_parse_args( $new_args, $args );

		return $new_args;
	}

	/**
	 * Register the block.
	 *
	 * @param string $html
	 * @return string
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function block ( $html = '' )
	{
		if ( !$html ) {
			return;
		}
		return "<p>{$html}</p>";
	}

	/**
	 * Register the label.
	 *
	 * @param string $title
	 * @return string
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function label ( $title = '', $id = '' )
	{
		if ( !$title ) {
			return;
		}
		return "<label for='{$id}'>{$title}:</label>";
	}

	/**
	 * Register the description.
	 *
	 * @param string $desc
	 * @return string
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function desc ( $desc = '' )
	{
		if ( !$desc ) {
			return;
		}
		return "<span class='widefat'>{$desc}</span>";
	}

	/**
	 * Register the text control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function text ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='text' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the textarea control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function textarea ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<textarea 
				class='{$new_args->get( 'class' )}'
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}'
				rows='{$this->get_field_name( 'rows' )}'
				cols='{$this->get_field_name( 'cols' )}'
				>
				{$new_args->get( 'value' )}
				</textarea>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the color control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function color ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='color' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the date control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function date ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='date' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the datetime_local control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function datetime_local ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='datetime-local' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the email control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function email ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='email' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the hidden control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function hidden ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = "<input 
				class='{$new_args->get( 'class' )}' 
				type='hidden' 
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the month_year control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function month_year ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='month' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the number control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function number ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='number' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				min='{$new_args->get( 'min' )}'
				max='{$new_args->get( 'max' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the qty control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function qty ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='number' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				min='{$new_args->get( 'min' )}'
				max='{$new_args->get( 'max' )}'
				step='{$new_args->get( 'step' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the range control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function range ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='range' 
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				min='{$new_args->get( 'min' )}'
				max='{$new_args->get( 'max' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the tel control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function tel ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='tel' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				pattern='{$new_args->get( 'pattern' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the time control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function time ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='time' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the url control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function url ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='url' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the week control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function week ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='week' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the reset control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function reset ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<input 
				class='{$new_args->get( 'class' )}' 
				type='reset' 
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				>";
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the select control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<select 
				class='{$new_args->get( 'class' )}'
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				>";
		$html .= $this->option_block( $new_args->get( 'options' ), $new_args->get( 'value' ) );
		$html .= '</select>';
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the multi_select control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function multi_select ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id   = $new_args->get( 'id' );
		$html = $this->label( $new_args->get( "heading" ), $id );
		$html .= "<select 
				class='{$new_args->get( 'class' )}'
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				multiple='true'
				>";
		$html .= $this->option_block( $new_args->get( 'options' ), $new_args->get( 'value' ) );
		$html .= '</select>';
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the option_block
	 *
	 * @param array $options
	 * @param string $value
	 * @return string
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function option_block ( $options = [], $value = '' )
	{
		if ( empty( $options->get( 'options' ) ) ) {
			return;
		}
		$html = '';
		foreach ( $options->get( 'options' ) as $key => $value ) {
			$select = ( $value == $key ) ? 'selected' : '';
			$html   .= "<option value='{$key}' {$select}>{$value}</option>";
		}
		return $html;
	}

	/**
	 * Register the checkbox control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function checkbox ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$id       = $new_args->get( 'id' );
		$selected = '';
		$html     = "<input 
				class='{$new_args->get( 'class' )}' 
				type='checkbox' 
				name='{$new_args->get( 'name' )}' 
				placeholder='{$new_args->get( 'placeholder' )}' 
				id='{$id}' 
				value='{$new_args->get( 'value' )}'
				$selected
				>";
		$html     .= $this->label( $new_args->get( "heading" ) );
		$html     .= $this->desc( $new_args->get( 'description' ) );
		$html     = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the multi_checkbox control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function multi_checkbox ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$html = '';
		$id   = $new_args->get( 'id' );
		if ( !empty( $new_args->get( 'options' ) ) ) {
			foreach ( $new_args->get( 'options' ) as $key => $value ) {
				$selected = selected( $new_args->get( 'value' ), $key );
				$html     .= "<input 
					class='{$new_args->get( 'class' )}' 
					type='checkbox' 
					name='{$new_args->get( 'name' )}[{$key}]' 
					placeholder='{$new_args->get( 'placeholder' )}' 
					id='{$id}' 
					value='{$key}'
					{$selected}
					>";
				$html     .= $this->label( $value );
			}
		}
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the radio control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function radio ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$html = '';
		$id   = $new_args->get( 'id' );
		if ( !empty( $new_args->get( 'options' ) ) ) {
			foreach ( $new_args->get( 'options' ) as $key => $value ) {
				$selected = selected( $new_args->get( 'value' ), $key );
				$html     .= "<input 
					class='{$new_args->get( 'class' )}' 
					type='radio' 
					name='{$new_args->get( 'name' )}' 
					placeholder='{$new_args->get( 'placeholder' )}' 
					id='{$id}' 
					value='{$key}'
					{$selected}
					>";
				$html     .= $this->label( $value );
			}
		}
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the nav_menu control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function nav_menu ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$menus = wp_get_nav_menus();
		$id    = $new_args->get( 'id' );
		$html  = $this->label( $new_args->get( "heading" ), $id );
		$html  .= "<select 
				class='{$new_args->get( 'class' )}'
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				>";
		$html  .= '<option value="0">' . _e( '&mdash; Select &mdash;' ) . '</option>';
		foreach ( $menus as $menu ) {
			$selected = selected( $new_args->get( 'value' ), $menu->term_id );
			$html     .= "<option value='{$menu->term_id}' {$selected}>" . esc_html( $menu->name ) . "</option>";
		}
		$html .= '</select>';
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}

	/**
	 * Register the post_types control.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function post_types ( $new_args = [] )
	{
		$new_args = self::global( $new_args );
		$new_args = wpe_collect( $new_args );

		$menus     = wp_get_nav_menus();
		$id        = $new_args->get( 'id' );
		$html      = $this->label( $new_args->get( "heading" ), $id );
		$html      .= "<select 
				class='{$new_args->get( 'class' )}'
				name='{$new_args->get( 'name' )}' 
				id='{$id}' 
				>";
		$post_type = $this->get_post_types();
		foreach ( $post_type as $post ) {
			$selected = selected( $new_args->get( 'value' ), $post->id );
			$html     .= "<option value='{$post->id}' {$selected}>" . esc_html( $post->name ) . "</option>";
		}
		$html .= '</select>';
		$html .= $this->desc( $new_args->get( 'description' ) );
		$html = $this->block( $html );
		echo $html;
	}
}
