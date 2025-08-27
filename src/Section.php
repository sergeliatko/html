<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Section
 *
 * @package SergeLiatko\HTML
 */
class Section extends Tag {

	use HTMLTrait;

	/**
	 * Section constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'section' );
	}

}
