<?php

namespace SergeLiatko\HTML;


/**
 * Class Tag
 *
 * @package SergeLiatko\HTML
 */
interface TagInterface {
	/**
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false );

	/**
	 * @return string The tag HTML.
	 */
	public function toHTML();
}
