<?php 

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');
require_once($CFG->dirroot . '/local/gamificationhelper/classes/objectivesForm.php');

require_login();
admin_externalpage_setup('local_gamificationhelper_setobjectives');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/setObjectives.php'));
$PAGE->set_title(get_string('setobjectives', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('setobjectives', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

$form = new objectivesForm();
$form->set_data(['courseid' => required_param('courseid', PARAM_INT)]);

if ($form->is_cancelled()) {
    redirect(new moodle_url('/local/gamificationhelper/index.php'));
} elseif ($fromform = $form->get_data()) {
    redirect(new moodle_url('/local/gamificationhelper/recommendPlugins.php', [
        'objective' => $fromform->objective,
        'learningstyle' => $fromform->learningstyle,
        'courseid' => $fromform->courseid,
    ]));
} else {
    $form->display();
}

echo $OUTPUT->footer();
