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

echo html_writer::tag('li', '<b>' . get_string('developmentAndAchievement', 'local_gamificationhelper') . '</b>: '
    . get_string('developmentAndAchievementDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('ownershipAndPossession', 'local_gamificationhelper') . '</b>: '
    . get_string('ownershipAndPossessionDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('empowermentAndCreativity', 'local_gamificationhelper') . '</b>: '
    . get_string('empowermentAndCreativityDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('unpredictabilityAndCuriosity', 'local_gamificationhelper') . '</b>: '
    . get_string('unpredictabilityAndCuriosityDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('socialInfluenceAndRelatedness', 'local_gamificationhelper') . '</b>: '
    . get_string('socialInfluenceAndRelatednessDesc', 'local_gamificationhelper')
);

echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('txtListApproach', 'local_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('li', '<b>' . get_string('competitive', 'local_gamificationhelper') . '</b>: '
    . get_string('competitiveDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('cooperative', 'local_gamificationhelper') . '</b>: '
    . get_string('cooperativeDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('independent', 'local_gamificationhelper') . '</b>: '
    . get_string('independentDesc', 'local_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('epicNarrative', 'local_gamificationhelper') . '</b>: '
    . get_string('epicNarrativeDesc', 'local_gamificationhelper')
);

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

echo html_writer::end_tag('div') . $OUTPUT->footer();
