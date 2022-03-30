<?php

namespace content\pageelement\preset\default\xml;

/**
 * XML notification element
 */
class NotificationElement extends \content\pageelement\PageElement
{
	/**
	 * constructor
	 *
	 * @param array $attributes Attributes of this object
	 */
	public function __construct(array $attributes)
	{
		$GLOBALS['Logger']->log(\core\Logger::TYPES['error'], $GLOBALS['lang']['class']['content']['pageelement']['preset']['default']['xml']['NotificationElement']['no_notification']);
		throw \Exception($GLOBALS['locale']['class']['content']['pageelement']['preset']['default']['xml']['NotificationElement']['no_notification']);
	}
}

?>
