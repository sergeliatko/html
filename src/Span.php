<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Span
 *
 * @package SergeLiatko\HTML
 */
class Span extends Tag {

	use HTMLTrait;

	/**
	 * Span constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'span' );
	}

}
