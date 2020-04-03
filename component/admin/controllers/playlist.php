<?php
/**
 * @package   Joomla - VHS Player
 * @version    __DEPLOY_VERSION__
 * @author    Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

use Joomla\CMS\MVC\Controller\FormController;

defined('_JEXEC') or die;

class VHSPlayerControllerPlaylist extends FormController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var  string
	 *
	 * @since  1.0.0
	 */
	protected $text_prefix = 'COM_VHS_PLAYER_PLAYLIST';
}