<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');
require_once(__DIR__ . '/classes/objectivesForm.php');

use gamificationhelper\classes\objectivesForm;

require_login();
admin_externalpage_setup('local_gamificationhelper_setobjectives');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/setObjectives.php'));
$PAGE->set_title(get_string('defineObjectivesTitle', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

echo html_writer::start_tag('div', ['class' => 'gamificationhelper-content']);

echo $OUTPUT->heading(get_string('defineObjectivesTitle', 'local_gamificationhelper'));

echo html_writer::tag('p', get_string('defineObjectivesDescription', 'local_gamificationhelper'));

echo html_writer::tag('p', get_string('txtListObjectives', 'local_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('p', '<b>' . get_string('participation', 'local_gamificationhelper') . '</b>: '. get_string('participationDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('motivation', 'local_gamificationhelper') . '</b>: '. get_string('motivationDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('challenge', 'local_gamificationhelper') . '</b>: '. get_string('challengeDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('collaboration', 'local_gamificationhelper') . '</b>: '. get_string('collaborationDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('exploration', 'local_gamificationhelper') . '</b>: '. get_string('explorationDesc', 'local_gamificationhelper'));

echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('txtListApproach', 'local_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('p', '<b>' . get_string('competitive', 'local_gamificationhelper') . '</b>: '. get_string('competitiveDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('cooperative', 'local_gamificationhelper') . '</b>: '. get_string('cooperativeDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('independent', 'local_gamificationhelper') . '</b>: '. get_string('independentDesc', 'local_gamificationhelper'));
echo html_writer::tag('p', '<b>' . get_string('explorative', 'local_gamificationhelper') . '</b>: '. get_string('explorativeDesc', 'local_gamificationhelper'));

echo html_writer::end_tag('ul');

echo html_writer::tag('h5', get_string('promptSelect', 'local_gamificationhelper'), ['class' => 'txt-promt-select']);

$form = new objectivesForm();

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
echo html_writer::end_tag('div');
echo $OUTPUT->footer();
