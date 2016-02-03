<?php

/**
 * Doodle Plugin 3 Toolbar: adds a toolbar button for easy use of the plugin doodle3
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
                $insertstring = '<doodle\n  title="TITEL AENDERN"\n  auth="'.$this->getConf('doodle3toolbar_default_auth').'"\n  adminUsers="testuser"\n  adminGroups="'.$this->getConf('doodle3toolbar_default_adminGroups').'"\n  voteType="'.$this->getConf('doodle3toolbar_default_voteType').'"\n  closed="false"\n>\n  * Option1\n  * Option2\n</doodle>';
                
                $event->data[] = array (
                'type' => 'insert',
                'title' => 'doodle3',
                'icon' => '../../plugins/doodle3toolbar/icon.png',
                'insert' => $insertstring
                );
        }
}
?>
