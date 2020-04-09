<?php


namespace SergeLiatko\HTML;

/**
 * Class Label
 *
 * @package SergeLiatko\HTML
 */
class Label extends Tag {

	/**
	 * Label constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'label', false );
	}

}
