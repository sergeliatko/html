<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Thead
 *
 * @package SergeLiatko\HTML
 */
class Thead extends Tag {

	use HTMLTrait;

	/**
	 * Thead constructor.
	 *
	 * @param string[]                  $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'thead', false );
	}

}
