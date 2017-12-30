<?php
/**
 * @version $Id: djmegamenu.php 49 2016-01-14 03:18:06Z szymon $
 * @package DJ-MegaMenu
 * @copyright Copyright (C) 2012 DJ-Extensions.com LTD, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: http://dj-extensions.com
 * @author email contact@dj-extensions.com
 *
 */

// no direct access
defined('_JEXEC') or die;

class plgSystemSPMegaMenu extends JPlugin
{

	function onContentPrepareForm($form, $data)
	{
		// extra option for menu item
		if ($form->getName() == 'com_menus.item') {
			$this->loadLanguage();
			JForm::addFormPath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params');
			$form->loadFile('spitem', true);
		}
	}
}
