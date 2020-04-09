<?php


namespace SergeLiatko\HTML;

/**
 * Class Input
 *
 * @package SergeLiatko\HTML
 */
class Input extends Tag {

	/**
	 * Input constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct( $attributes = array() ) {
		parent::__construct( $attributes, '', 'input', true );
	}

}
