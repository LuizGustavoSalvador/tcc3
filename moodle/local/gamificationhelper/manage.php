<?php 

require_once("$CFG->libdir/formslib.php");

class manage_plugin_form extends moodleform {
    protected function definition() {
        $mform = $this->_form;
        $mform->addElement('text', 'pluginurl', get_string('pluginurl', 'local_gamificationhelper'));
        $mform->setType('pluginurl', PARAM_URL);
        $mform->addElement('submit', 'submitbutton', get_string('installplugin', 'local_gamificationhelper'));
    }
}