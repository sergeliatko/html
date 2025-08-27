<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Button
 *
 * @package SergeLiatko\HTML
 */
class Button extends Tag {

	use HTMLTrait;

	/**
	 * Button constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'button' );
	}
}
