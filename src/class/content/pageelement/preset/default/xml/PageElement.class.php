<?php

namespace content\pageelement\preset\default\xml;

/**
 * XML PageElement
 */
class PageElement extends \content\pageelement\PageElement
{
	/**
	 * constructor
	 *
	 * @param array $attributes Attributes of this object
	 */
	public function __construct(array $attributes)
	{
		if (\key_exists('template', $attributes))
		{
			$GLOBALS['Logger']->log(\core\Logger::TYPES['info'], $GLOBALS['lang']['class']['content']['pageelement']['preset']['already_template'], ['template' => $attributes['template']]);
		}

		$attributes['template'] = $GLOBALS['config']['class']['content']['pageelement']['preset']['template_folder'] . DIRECTORY_SEPARATOR . 'default' . DIRECTORY_SEPARATOR . 'xml' . DIRECTORY_SEPARATOR . 'PageElement.html';

		if (!\key_exists('version', $attributes))
		{
			$attributes['version'] = $GLOBALS['config']['class']['content']['pageelement']['preset']['default']['xml']['PageElement']['version'];
		}
		if (!\key_exists('encoding', $attribues))
		{
			$attributes['encoding'] = $GLOBALS['config']['class']['content']['pageelement']['preset']['default']['xml']['PageElement']['encoding'];
		}
		if (!\key_exists('standalone', $attributes))
		{
			$attributes['standalone'] = $GLOBALS['config']['class']['content']['pageelement']['preset']['default']['xml']['PageElement']['standalone'];
		}

		header('Content-Type: application/xml');

		parent::__construct($attributes);
	}
}

?>
