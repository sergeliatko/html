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
	 * @param array $attributes
	 * @param string|string[]|Tag[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'ul' );
	}

}
