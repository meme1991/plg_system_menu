<?php
# @Author: SPEDI srl
# @Date:   24-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 24-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (c) SPEDI srl

defined('_JEXEC') or die;

class plgSystemMegaMenu extends JPlugin
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
