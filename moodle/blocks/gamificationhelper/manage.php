<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/formslib.php');

$courseid = required_param('courseid', PARAM_INT);

require_login($courseid);
$context = context_course::instance($courseid);

require_capability('block/gamificationhelper:manage', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/blocks/gamificationhelper/manage.php', ['courseid' => $courseid]));
$PAGE->set_title(get_string('pluginname', 'block_gamificationhelper'));
$PAGE->set_heading(get_string('pluginname', 'block_gamificationhelper'));
$PAGE->navbar->add(get_string('pluginname', 'block_gamificationhelper'), new moodle_url('/blocks/gamificationhelper/manage.php', ['courseid' => $courseid]));

class manage_plugin_form extends moodleform {
    protected function definition() {
        $mform = $this->_form;
        $mform->addElement('text', 'pluginurl', get_string('pluginurl', 'block_gamificationhelper'));
        $mform->setType('pluginurl', PARAM_URL);
        $mform->addElement('submit', 'submitbutton', get_string('installplugin', 'block_gamificationhelper'));
    }
}

$mform = new manage_plugin_form();

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/course/view.php', ['id' => $courseid]));
} else if ($data = $mform->get_data()) {
    // Processar os dados do formulário, se necessário.
}

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('manage', 'block_gamificationhelper'));
$mform->display();
echo $OUTPUT->footer();
