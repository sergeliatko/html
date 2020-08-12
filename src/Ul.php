<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Ul
 *
 * @package SergeLiatko\HTML
 */
class Ul extends Tag {
	use HTMLTrait;

	/**
	 * Ul constructor.
	 *
	 * @param array                                   $attributes
	 * @param string|string[]|\SergeLiatko\HTML\Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'ul', false );
	}

}
