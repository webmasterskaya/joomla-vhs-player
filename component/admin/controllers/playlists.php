<?php
/**
 * @package    Joomla - VHS Player
 * @version    __DEPLOY_VERSION__
 * @author     Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Session\Session;

defined('_JEXEC') or die;

class VHSPlayerControllerPlaylists extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var  string
	 *
	 * @since  1.0.0
	 */
	protected $text_prefix = 'COM_VHS_PLAYER_PLAYLISTS';

	/**
	 * Rebuild the nested set tree.
	 *
	 * @return  boolean  False on failure or error, true on success.
	 *
	 * @since  1.0.0
	 */
	public function rebuild()
	{
		Session::checkToken() or jexit(Text::_('JINVALID_TOKEN'));

		$this->setRedirect(Route::_('index.php?option=com_vhs_player&view=categories', false));

		if ($this->getModel()->rebuild())
		{
			// Rebuild succeeded
			$this->setMessage(Text::_('COM_VHS_PLAYER_PLAYLISTS_REBUILD_SUCCESS'));

			return true;
		}

		// Rebuild failed
		$this->setMessage(Text::_('COM_VHS_PLAYER_PLAYLISTS_REBUILD_FAILURE'));

		return false;
	}

	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name.
	 * @param   string  $prefix  The class prefix.
	 * @param   array   $config  The array of possible config values.
	 *
	 * @return  BaseDatabaseModel|VHSPlayerModelPlaylist  A model object.
	 *
	 * @since  1.0.0
	 */
	public function getModel($name = 'Playlist', $prefix = 'VHSPlayerModel', $config = array('ignore_request' => true))
	{
		return parent::getModel($name, $prefix, $config);
	}
}