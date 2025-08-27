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
	 * @param string[] $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'tr' );
	}

}
