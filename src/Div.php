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
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'div', false );
	}

}
