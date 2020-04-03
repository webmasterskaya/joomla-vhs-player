<?php
/**
 * @package   Joomla - VHS Player
 * @version    __DEPLOY_VERSION__
 * @author    Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

use Joomla\CMS\Access\Exception\NotAllowed;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\BaseController;

defined('_JEXEC') or die;

if (!Factory::getUser()->authorise('core.manage', 'com_vhs_player'))
{
	throw new NotAllowed(Text::_('JERROR_ALERTNOAUTHOR'), 403);
}

$controller = BaseController::getInstance('VHSPlayer');
$controller->execute(Factory::getApplication()->input->get('task'));
$controller->redirect();