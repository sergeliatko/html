<?php


namespace SergeLiatko\HTML;

/**
 * Class Legend
 *
 * @package SergeLiatko\HTML
 */
class Legend extends Tag {

	/**
	 * Legend constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'legend', false );
	}

}
