<?php

/**
 * Doodle Plugin 3: helps to schedule meetings
 *
 * @license	GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @url         http://www.dokuwiki.org/plugin:doodle3toolbar
 * @author	Matthias Jung <matzekuh@web.de>
 */

if (!defined('DOKU_INC')) die();

class action_plugin_doodle3toolbar extends DokuWiki_Action_Plugin {

        /**
         * Register its handlers with the dokuwiki's event controller
         */
        public function register(&$controller) {
                $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array());
        }
        
        /**
         * Define a toolbar button, that inserts a text defined in the addon conf
         */
        public function insert_button(&$event, $param) {
                $event->data[] = array (
                'type' => 'insert',
                'title' => 'doodle3',
                'icon' => '../../plugins/doodle3toolbar/icon.png',
                'insert' => $this->getConf('inserttext')
                );
        }
}
?>
