<?php
/**
 * @Author: SPEDI srl
 * @Date:   24-01-2018
 * @Last modified by:   SPEDI srl
 * @Last modified time: 24-01-2018
 * @License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Form\Form;

class PlgSystemMegaMenu extends CMSPlugin
{
    /**
     * Evento usato per aggiungere campi al form delle voci di menu
     */
    public function onContentPrepareForm(Form $form, $data)
    {
        // Verifico che sia il form delle voci di menu
        if ($form->getName() !== 'com_menus.item') {
            return;
        }

        // Carico la lingua del plugin
        $this->loadLanguage();

        // Aggiungo il percorso dei form XML
        Form::addFormPath(__DIR__ . '/params');

        // Carico il file spitem.xml
        $form->loadFile('spitem', true);

        return true;
    }
}
