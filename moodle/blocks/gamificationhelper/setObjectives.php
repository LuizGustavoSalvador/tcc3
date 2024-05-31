<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');
require_once(__DIR__ . '/classes/objectivesForm.php');

use gamificationhelper\classes\objectivesForm;

$courseid = required_param('id', PARAM_INT);
require_login($courseid);
$context = context_course::instance($courseid);

if (!has_capability('block/gamificationhelper:view', $context)) {
    throw new moodle_exception('accessdenied', 'admin');
}

$PAGE->set_url(new moodle_url('/blocks/gamificationhelper/setObjectives.php', ['id' => $courseid]));
$PAGE->set_context($context);
$PAGE->set_title(get_string('defineObjectivesTitle', 'block_gamificationhelper'));
$PAGE->set_heading(get_string('defineObjectivesTitle', 'block_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/blocks/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

echo html_writer::start_tag('div', ['class' => 'gamificationhelper-content']);
echo $OUTPUT->heading(get_string('defineObjectivesTitle', 'block_gamificationhelper'));

echo html_writer::tag('p', get_string('defineObjectivesDescription', 'block_gamificationhelper'));
echo html_writer::tag('p', get_string('txtListObjectives', 'block_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);
echo html_writer::tag('li', '<b>' . get_string('developmentAndAchievement', 'block_gamificationhelper') . '</b>: '
    . get_string('developmentAndAchievementDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('ownershipAndPossession', 'block_gamificationhelper') . '</b>: '
    . get_string('ownershipAndPossessionDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('empowermentAndCreativity', 'block_gamificationhelper') . '</b>: '
    . get_string('empowermentAndCreativityDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('unpredictabilityAndCuriosity', 'block_gamificationhelper') . '</b>: '
    . get_string('unpredictabilityAndCuriosityDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('socialInfluenceAndRelatedness', 'block_gamificationhelper') . '</b>: '
    . get_string('socialInfluenceAndRelatednessDesc', 'block_gamificationhelper'));
echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('txtListApproach', 'block_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);
echo html_writer::tag('li', '<b>' . get_string('competitive', 'block_gamificationhelper') . '</b>: '
    . get_string('competitiveDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('cooperative', 'block_gamificationhelper') . '</b>: '
    . get_string('cooperativeDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('independent', 'block_gamificationhelper') . '</b>: '
    . get_string('independentDesc', 'block_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('epicNarrative', 'block_gamificationhelper') . '</b>: '
    . get_string('epicNarrativeDesc', 'block_gamificationhelper'));
echo html_writer::end_tag('ul');

echo html_writer::tag('h5', get_string('promptSelect', 'block_gamificationhelper'), ['class' => 'txt-promt-select']);

$form = new objectivesForm();

if ($form->is_cancelled()) {
    redirect(new moodle_url('/blocks/gamificationhelper/index.php', ['id' => $courseid]));
} elseif ($fromform = $form->get_data()) {
    redirect(new moodle_url('/blocks/gamificationhelper/recommendPlugins.php', [
        'id' => $courseid,
        'objective' => $fromform->objective,
        'learningstyle' => $fromform->learningstyle,
    ]));
} else {
    $form->display();
}

echo html_writer::end_tag('div');
echo $OUTPUT->footer();