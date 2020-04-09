<?php


namespace SergeLiatko\HTML;

/**
 * Class Span
 *
 * @package SergeLiatko\HTML
 */
class Span extends Tag {

	/**
	 * Span constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'span', false );
	}

}
