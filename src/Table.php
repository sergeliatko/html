<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Table
 *
 * @package SergeLiatko\HTML
 */
class Table extends Tag {

	use HTMLTrait;

	/**
	 * Table constructor.
	 *
	 * @param string[]                  $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'table', false );
	}

}
