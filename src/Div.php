<?php


namespace SergeLiatko\HTML;

/**
 * Class Div
 *
 * @package SergeLiatko\HTML
 */
class Div extends Tag {

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
