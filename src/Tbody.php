<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Tbody
 *
 * @package SergeLiatko\HTML
 */
class Tbody extends Tag {

	use HTMLTrait;

	/**
	 * Tbody constructor.
	 *
	 * @param string[] $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'tbody' );
	}

}
