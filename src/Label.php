<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Label
 *
 * @package SergeLiatko\HTML
 */
class Label extends Tag {

	use HTMLTrait;

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
