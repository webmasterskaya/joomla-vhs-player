<?php
/**
 * @package   Joomla - VHS Player
 * @version    __DEPLOY_VERSION__
 * @author    Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

use Joomla\CMS\MVC\Model\BaseDatabaseModel;

defined('_JEXEC') or die;

class VHSPlayerControllerVideos extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var  string
	 *
	 * @since  1.0.0
	 */
	protected $text_prefix = 'COM_VHS_PLAYER_VIDEOS';

	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name.
	 * @param   string  $prefix  The class prefix.
	 * @param   array   $config  The array of possible config values.
	 *
	 * @return  BaseDatabaseModel|VHSPlayerModelVideo  A model object.
	 *
	 * @since  1.0.0
	 */
	public function getModel($name = 'Video', $prefix = 'VHSPlayerModel', $config = array('ignore_request' => true))
	{
		return parent::getModel($name, $prefix, $config);
	}
}