<?php
if (!defined('DOKU_INC')) die();

class action_plugin_doodle3toolbar extends DokuWiki_Action_Plugin {

        /**
         * Register its handlers with the dokuwiki's event controller
         */
        public function register(&$controller) {
                $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array());
        }

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
