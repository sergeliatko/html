<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Br
 *
 * @package SergeLiatko\HTML
 */
class Br extends Tag {

	use HTMLTrait;


	/**
	 * Br constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct( array $attributes = array() ) {
		parent::__construct( $attributes, '', 'br', true );
	}

}
