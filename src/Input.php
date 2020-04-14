<?php


namespace SergeLiatko\HTML;

/**
 * Class Input
 *
 * @package SergeLiatko\HTML
 */
class Input extends Tag {

	/**
	 * @param array  $attributes
	 * @param array  $content
	 * @param string $tag
	 * @param bool   $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		$instance = new self( $attributes );

		return $instance->toHTML();
	}


	/**
	 * Input constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct( $attributes = array() ) {
		parent::__construct( $attributes, '', 'input', true );
	}

}
