<?php


namespace SergeLiatko\HTML;

/**
 * Class Header
 *
 * @package SergeLiatko\HTML
 */
class Header extends Tag {

	/**
	 * Header constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'header', false );
	}

}
