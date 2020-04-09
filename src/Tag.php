<?php


namespace SergeLiatko\HTML;

/**
 * Class Tag
 *
 * @package SergeLiatko\HTML
 */
class Tag implements TagInterface {

	/**
	 * @var string $tag HTML tag name
	 */
	protected $tag;

	/**
	 * @var array $attributes Array of HTML attributes where keys are attributes and values are values.
	 */
	protected $attributes;

	/**
	 * @var string[]|\SergeLiatko\HTML\Tag[] $content Inner content of the tag as an array of strings or tags.
	 */
	protected $content;

	/**
	 * @var bool $self_closing Flag to indicate the tag is self closing.
	 */
	protected $self_closing;

	/**
	 * Tag constructor.
	 *
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 */
	public function __construct( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		//set tag
		$this->setTag( $tag );
		//force self closing for void tags
		if ( in_array( $this->getTag(), $this->getVoidTags() ) ) {
			$self_closing = true;
		}
		//set self closing
		$this->setSelfClosing( $self_closing );
		//set attributes
		$this->setAttributes( $attributes );
		//set content
		$this->setContent( $content );
	}

	/**
	 * @return string Formatted HTML.
	 */
	public function __toString() {
		return $this->toHTML();
	}

	/**
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 *
	 * @return \SergeLiatko\HTML\Tag
	 */
	public static function getInstance( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		return new self( $attributes, $content, $tag, $self_closing );
	}

	/**
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		return self::getInstance( $attributes, $content, $tag, $self_closing )->toHTML();
	}

	/**
	 * @param mixed $data
	 *
	 * @return bool
	 */
	protected function isEmpty( $data = null ) {
		return empty( $data );
	}

	/**
	 * @return string The opening tag HTML.
	 */
	protected function open() {
		$tag = $this->getTag();

		return sprintf(
			'<%1$s %2$s%3$s>',
			$tag,
			$this->attributes(),
			( $this->isSelfClosing() ? ( in_array( $tag, $this->getVoidTags() ) ? '' : '/' ) : '' )
		);
	}

	/**
	 * @return string The closing tag HTML.
	 */
	protected function close() {
		return $this->isSelfClosing() ? '' : sprintf( '</%1$s>', $this->getTag() );
	}

	/**
	 * @return string Tag inner content HTML.
	 */
	protected function content() {
		if ( $this->isEmpty( $content = $this->getContent() ) ) {
			return '';
		}
		array_walk( $content, function ( &$item ) {
			/** @var \SergeLiatko\HTML\Tag|string $item */
			$item = ( $item instanceof Tag ) ? $item->toHTML() : $item;
		} );

		return join( '', $content );
	}

	/**
	 * @return string Formatted HTML attributes.
	 */
	protected function attributes() {
		if ( $this->isEmpty( $attributes = $this->getAttributes() ) ) {
			return '';
		}
		array_walk( $attributes, function ( &$value, $key ) {
			$value = sprintf( '%1$s="%2$s"', $key, esc_attr( $value ) );
		} );

		return join( ' ', $attributes );
	}

	/**
	 * @return string The tag HTML.
	 */
	public function toHTML() {
		return join( '', array( $this->open(), $this->content(), $this->close() ) );
	}

	/**
	 * @return string
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * @param string $tag
	 *
	 * @return Tag
	 */
	public function setTag( $tag ) {
		$this->tag = strtolower( $tag );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * @param array $attributes
	 *
	 * @return Tag
	 */
	public function setAttributes( array $attributes ) {
		$this->attributes = $attributes;

		return $this;
	}

	/**
	 * @return \SergeLiatko\HTML\Tag[]|string[]
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 *
	 * @return Tag
	 */
	public function setContent( $content ) {
		if ( ! is_array( $content ) ) {
			$content = array( $content );
		}
		$this->content = array_filter( $content, function ( $item ) {
			return ! ! ( is_string( $item ) || ( $item instanceof Tag ) );
		} );

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSelfClosing() {
		return $this->self_closing;
	}

	/**
	 * @param bool $self_closing
	 *
	 * @return Tag
	 */
	public function setSelfClosing( $self_closing ) {
		$this->self_closing = ! empty( $self_closing );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getVoidTags() {
		return array(
			"area",
			"base",
			"br",
			"col",
			"embed",
			"hr",
			"img",
			"input",
			"link",
			"meta",
			"param",
			"source",
			"track",
			"wbr",
		);
	}
}
