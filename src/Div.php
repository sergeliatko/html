<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Div
 *
 * @package SergeLiatko\HTML
 */
class Div extends Tag {

	use HTMLTrait;

	/**
	 * Div constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'div' );
	}

}
