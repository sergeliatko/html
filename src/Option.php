<?php


namespace SergeLiatko\HTML;

/**
 * Class Option
 *
 * @package SergeLiatko\HTML
 */
class Option extends Tag {

	/**
	 * Option constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'option', false );
	}

}
