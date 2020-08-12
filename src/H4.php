<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class H4
 *
 * @package SergeLiatko\HTML
 */
class H4 extends Tag {
	use HTMLTrait;

	/**
	 * H4 constructor.
	 *
	 * @param array                                   $attributes
	 * @param string|string[]|\SergeLiatko\HTML\Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'h4', false );
	}

}
