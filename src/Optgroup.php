<?php


namespace SergeLiatko\HTML;

/**
 * Class Optgroup
 *
 * @package SergeLiatko\HTML
 */
class Optgroup extends Tag {

	/**
	 * @param array  $attributes
	 * @param array  $content
	 * @param string $tag
	 * @param bool   $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		$instance = new self( $attributes, $content );

		return $instance->toHTML();
	}


	/**
	 * Optgroup constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $options
	 */
	public function __construct( $attributes = array(), $options = array() ) {
		parent::__construct( $attributes, $options, 'optgroup', false );
	}

}
