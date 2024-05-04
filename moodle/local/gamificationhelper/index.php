<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');
require_once($CFG->dirroot . '/local/gamificationhelper/classes/selectCourseForm.php');

require_login();
admin_externalpage_setup('local_gamificationhelper');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/index.php'));
$PAGE->set_title(get_string('pluginname', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('pluginname', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('welcome', 'local_gamificationhelper'));

$form = new selectCourseForm();
if ($form->is_cancelled()) {
} elseif ($fromform = $form->get_data()) {   
    redirect(new moodle_url('/local/gamificationhelper/setObjectives.php', ['courseid' => $fromform->courseid]));
} else {
    $form->display();
}

echo $OUTPUT->footer();
