<?php

/**
 * Doodle Plugin 4 Toolbar: adds a toolbar button for easy use of the plugin doodle4
 *
 * @license	GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @url         http://www.dokuwiki.org/plugin:doodle3toolbar
 * @author	Matthias Jung <matzekuh@web.de>
 */

if (!defined('DOKU_INC')) die();

class action_plugin_doodle4toolbar extends DokuWiki_Action_Plugin {

        /**
         * Register its handlers with the dokuwiki's event controller
         */
        public function register(Doku_Event_Handler $controller) {
                $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array());
        }
        
        /**
         * Define a toolbar button, that inserts a text defined in the addon conf
         */
        public function insert_button(&$event, $param) {
                $event->data[] = array (
                'type' => 'insert',
                'title' => 'doodle4',
                'icon' => '../../plugins/doodle4toolbar/icon.png',
                'insert' => $this->getConf('inserttext')
                );
        }
}
?>
