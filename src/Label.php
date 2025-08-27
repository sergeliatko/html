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
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'label' );
	}

}
