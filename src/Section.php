<?php


namespace SergeLiatko\HTML;

/**
 * Class Section
 *
 * @package SergeLiatko\HTML
 */
class Section extends Tag {

	/**
	 * Section constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'section', false );
	}

}
