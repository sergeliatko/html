<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Form
 *
 * @package SergeLiatko\HTML
 */
class Form extends Tag {

	use HTMLTrait;

	/**
	 * Form constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'form' );
	}

}
