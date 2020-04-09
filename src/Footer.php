<?php


namespace SergeLiatko\HTML;

/**
 * Class Footer
 *
 * @package SergeLiatko\HTML
 */
class Footer extends Tag {

	/**
	 * Footer constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'footer', false );
	}

}
