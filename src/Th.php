<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Th
 *
 * @package SergeLiatko\HTML
 */
class Th extends Tag {

	use HTMLTrait;

	/**
	 * Th constructor.
	 *
	 * @param string[]                  $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'th', false );
	}

}
