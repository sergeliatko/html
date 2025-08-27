<?php


namespace SergeLiatko\HTML;


use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Li
 *
 * @package SergeLiatko\HTML
 */
class Li extends Tag {
	use HTMLTrait;

	/**
	 * Li constructor.
	 *
	 * @param array $attributes
	 * @param string|string[]|Tag[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'li' );
	}

}
