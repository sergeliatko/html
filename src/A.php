<?php


namespace SergeLiatko\HTML;

/**
 * Class A
 *
 * @package SergeLiatko\HTML
 */
class A extends Tag {

	/**
	 * A constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'a', false );
	}

}
