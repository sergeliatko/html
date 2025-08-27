<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Header
 *
 * @package SergeLiatko\HTML
 */
class Header extends Tag {

	use HTMLTrait;

	/**
	 * Header constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'header' );
	}

}
