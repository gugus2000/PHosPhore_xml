<?php

namespace content\pageelement\xml;

/**
 * XML orphan node
 */
class OrphanNode extends \content\pageelement\PageElement
{
	/**
	 * constructor
	 *
	 * @param $attributes Attributes of this object
	 */
	public function __construct(array $attributes)
	{
		if (\key_exists('template', $attributes))
		{
			$GLOBALS['Logger']->log(\core\Logger::TYPES['info'], $GLOBALS['lang']['class']['content']['pageelement']['preset']['already_template'], ['template' => $attributes['template']]);
		}

		$attributes['template'] = \join(DIRECTORY_SEPARATOR, [
			$GLOBALS['config']['core']['path']['template'],
			'class',
			'content',
			'pageelement',
			'xml',
			'OrphanNode.html',
		]);

		parent::__construct($attributes);
	}
}

?>
