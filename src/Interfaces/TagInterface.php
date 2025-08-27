<?php /** @noinspection PhpUnused */

namespace SergeLiatko\HTML\Interfaces;


use SergeLiatko\HTML\Tag;

/**
 * Interface TagInterface
 *
 * @package SergeLiatko\HTML\Interfaces
 */
interface TagInterface {

	/**
	 * @param array $attributes
	 * @param Tag[]|string[] $content
	 * @param string $tag
	 * @param bool $self_closing
	 *
	 * @return string
	 */
	public static function HTML( array $attributes = array(), array $content = array(), string $tag = '', bool $self_closing = false ): string;

	/**
	 * @return string The tag HTML.
	 */
	public function toHTML(): string;
}
