<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Textarea
 *
 * @package SergeLiatko\HTML
 */
class Textarea extends Tag {

	use HTMLTrait;

	/**
	 * Textarea constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'textarea', false );
	}

}
