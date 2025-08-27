<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Option
 *
 * @package SergeLiatko\HTML
 */
class Option extends Tag {

	use HTMLTrait;

	/**
	 * Option constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'option' );
	}

}
