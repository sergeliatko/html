<?php


namespace SergeLiatko\HTML;

/**
 * Class Form
 *
 * @package SergeLiatko\HTML
 */
class Form extends Tag {

	/**
	 * Form constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'form', false );
	}

}
