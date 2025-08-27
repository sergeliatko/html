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
	 * @param string[] $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'th' );
	}

}
