<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Tr
 *
 * @package SergeLiatko\HTML
 */
class Tr extends Tag {

	use HTMLTrait;

	/**
	 * Tr constructor.
	 *
	 * @param string[]                  $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'tr', false );
	}

}
