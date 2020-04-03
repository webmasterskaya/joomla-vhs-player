<?php
/**
 * @package    Joomla - VHS Player
 * @version    __DEPLOY_VERSION__
 * @author     Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

use Joomla\CMS\Table\Table;

defined('_JEXEC') or die;

class VHSPlayerTableVideos extends Table
{
	/**
	 * Constructor.
	 *
	 * @param   JDatabaseDriver &$db  Database connector object
	 *
	 * @since  1.0.0
	 */
	function __construct(&$db)
	{
		parent::__construct('#__vhs_videos', 'id', $db);

		// Set the alias since the column is called state
		$this->setColumnAlias('published', 'state');
	}
}