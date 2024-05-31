<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');

$courseid = required_param('id', PARAM_INT);
require_login($courseid);
$context = context_course::instance($courseid);

if (!has_capability('block/gamificationhelper:view', $context)) {
    throw new moodle_exception('accessdenied', 'admin');
}

$PAGE->set_url(new moodle_url('/blocks/gamificationhelper/index.php', ['id' => $courseid]));
$PAGE->set_context($context);
$PAGE->set_title(get_string('pluginname', 'block_gamificationhelper'));
$PAGE->set_heading(get_string('pluginname', 'block_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/blocks/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

echo html_writer::start_tag('div', ['class' => 'gamificationhelper-content']);

echo $OUTPUT->heading(get_string('welcome', 'block_gamificationhelper'));

echo html_writer::tag('p', get_string('introduction', 'block_gamificationhelper'));

echo html_writer::tag('p', get_string('adminRequired', 'block_gamificationhelper'));

echo html_writer::tag('p', get_string('pluginInstallation', 'block_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('li', '<i class="fa fa-question-circle" aria-hidden="true"></i> <b>' 
    . get_string('btnAbout', 'block_gamificationhelper') . '</b>: '
    . get_string('btnAboutDesc', 'block_gamificationhelper')
);

echo html_writer::tag('li', '<i class="fa fa-list-alt" aria-hidden="true"></i> <b>' 
    . get_string('btnPermissions', 'block_gamificationhelper') . '</b>: '
    . get_string('btnPermissionsDesc', 'block_gamificationhelper')
);

echo html_writer::tag('li', '<i class="fa fa-download" aria-hidden="true"></i> <b>' 
    . get_string('btnDownload', 'block_gamificationhelper') . '</b>: '
    . get_string('btnDownloadDesc', 'block_gamificationhelper')
);

echo html_writer::tag('li', '<i class="fas fa-book" aria-hidden="true"></i> <b>' 
    . get_string('btnConfig', 'block_gamificationhelper') . '</b>: '
    . get_string('btnConfigDesc', 'block_gamificationhelper')
);

echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('availablePlugins', 'block_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('li', '<b>' . get_string('blockGame', 'block_gamificationhelper') . '</b>: '
    . get_string('blockGameDesc', 'block_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('levelUp', 'block_gamificationhelper') . '</b>: '
    . get_string('levelUpDesc', 'block_gamificationhelper')
);

echo html_writer::tag('li', '<b>' . get_string('formatTrail', 'block_gamificationhelper') . '</b>: '
    . get_string('formatTrailDesc', 'block_gamificationhelper')
);

echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('pluginInstalledNote', 'block_gamificationhelper'));

echo html_writer::link(
    new moodle_url('/blocks/gamificationhelper/setObjectives.php', ['id' => $courseid]), 
    get_string('btnStart', 'block_gamificationhelper'), ['class' => 'btn btn-primary btn-start']
);

echo html_writer::end_tag('div');

echo $OUTPUT->footer();
