<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/formslib.php');

require_login();
admin_externalpage_setup('local_gamificationhelper');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/index.php'));
$PAGE->set_title(get_string('pluginname', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('pluginname', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

echo html_writer::start_tag('div', ['class' => 'gamificationhelper-content']);

echo $OUTPUT->heading(get_string('welcome', 'local_gamificationhelper'));

echo html_writer::tag('p', get_string('introduction', 'local_gamificationhelper'));

echo html_writer::tag('p', get_string('adminRequired', 'local_gamificationhelper'));

echo html_writer::tag('p', get_string('pluginInstallation', 'local_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('li', '<b>' . get_string('btnAbout', 'local_gamificationhelper') . '</b>: '. get_string('btnAboutDesc', 'local_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('btnPermissions', 'local_gamificationhelper') . '</b>: '. get_string('btnPermissionsDesc', 'local_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('btnDownload', 'local_gamificationhelper') . '</b>: '. get_string('btnDownloadDesc', 'local_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('btnInstall', 'local_gamificationhelper') . '</b>: '. get_string('btnInstallDesc', 'local_gamificationhelper'));

echo html_writer::end_tag('ul');

echo html_writer::tag('p', get_string('availablePlugins', 'local_gamificationhelper'));

echo html_writer::start_tag('ul', ['class' => 'gamificationhelper-list']);

echo html_writer::tag('li', '<b>' . get_string('blockGame', 'local_gamificationhelper') . '</b>: '. get_string('blockGameDesc', 'local_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('levelUp', 'local_gamificationhelper') . '</b>: '. get_string('levelUpDesc', 'local_gamificationhelper'));
echo html_writer::tag('li', '<b>' . get_string('formatTrail', 'local_gamificationhelper') . '</b>: '. get_string('formatTrailDesc', 'local_gamificationhelper'));

echo html_writer::end_tag('ul');
echo html_writer::tag('p', get_string('pluginInstalledNote', 'local_gamificationhelper'));

echo html_writer::link(
    new moodle_url('setObjectives.php'), 
    get_string('btnStart', 'local_gamificationhelper'), ['class' => 'btn btn-primary btn-start'
]);

echo html_writer::end_tag('div');
echo $OUTPUT->footer();
