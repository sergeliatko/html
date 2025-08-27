<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Ol
 *
 * @package SergeLiatko\HTML
 */
class Ol extends Tag {
	use HTMLTrait;

	/**
	 * Ol constructor.
	 *
	 * @param array $attributes
	 * @param string|string[]|Tag[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'ol' );
	}


}
