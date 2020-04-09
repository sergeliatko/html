<?php


namespace SergeLiatko\HTML;

/**
 * Class Textarea
 *
 * @package SergeLiatko\HTML
 */
class Textarea extends Tag {

	/**
	 * Textarea constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'textarea', 'false' );
	}

}
