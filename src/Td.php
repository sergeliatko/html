<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Td
 *
 * @package SergeLiatko\HTML
 */
class Td extends Tag {

	use HTMLTrait;

	/**
	 * Td constructor.
	 *
	 * @param string[] $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'td' );
	}

}
