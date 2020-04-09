<?php


namespace SergeLiatko\HTML;

/**
 * Class Br
 *
 * @package SergeLiatko\HTML
 */
class Br extends Tag {

	/**
	 * Br constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct( $attributes = array() ) {
		parent::__construct( $attributes, '', 'br', true );
	}

}
