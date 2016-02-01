<?php
if (!defined('DOKU_INC')) die();

<<<<<<< HEAD
class action_plugin_doodle3toolbar extends DokuWiki_Action_Plugin {
=======
class doodle3toolbar extends DokuWiki_Action_Plugin {
	
	/**
	 * Register its handlers with the dokuwiki's event controller
	 */
	function register(Doku_Event_Handler $controller) {
		$controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array());
	}
	
	function insert_button(& $event, $param) {
		$template = file_get_contents('template.txt');
		
		$event->data[] = array (
		'type' => 'insert',
		'title' => 'doodle3',
		'icon' => '../../plugins/doodle3toolbar/icon.png',
		'insert' => $this->getConf('toolbar_inserted_markup')
		);
	}
}
>>>>>>> origin/master

        /**
         * Register its handlers with the dokuwiki's event controller
         */
        public function register(Doku_Event_Handler $controller) {
                $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array());
        }

<<<<<<< HEAD
        public function insert_button(Doku_Event $event, $param) {
                $event->data[] = array (
                'type' => 'insert',
                'title' => 'doodle3',
                'icon' => '../../plugins/doodle3toolbar/icon.png',
                'insert' => $this->getConf('inserttext')
                );
        }
}
=======
>>>>>>> origin/master
?>
