<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class A
 *
 * @package SergeLiatko\HTML
 */
class A extends Tag {

	use HTMLTrait;

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
