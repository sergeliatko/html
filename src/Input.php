<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Input
 *
 * @package SergeLiatko\HTML
 */
class Input extends Tag {

	use HTMLTrait;

	/**
	 * Input constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct( array $attributes = array() ) {
		parent::__construct( $attributes, '', 'input', true );
	}

}
