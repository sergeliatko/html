<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Tfoot
 *
 * @package SergeLiatko\HTML
 */
class Tfoot extends Tag {

	use HTMLTrait;

	/**
	 * Tfoot constructor.
	 *
	 * @param string[]                  $attributes
	 * @param string|string[]|Tag|Tag[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'tfoot', false );
	}

}
