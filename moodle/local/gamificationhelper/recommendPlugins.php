<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');

require_login();
admin_externalpage_setup('local_gamificationhelper_recommend');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/recommendPlugins.php'));
$PAGE->set_title(get_string('recommendation', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('pluginrecommendation', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('recommendationresults', 'local_gamificationhelper'));

$objective = required_param('objective', PARAM_ALPHANUMEXT);
$style = required_param('learningstyle', PARAM_ALPHANUMEXT);
$courseid = required_param('courseid', PARAM_INT);

$pluginManager = core_plugin_manager::instance();
$pluginsInstalled = \array_merge($pluginManager->get_installed_plugins('block'), $pluginManager->get_installed_plugins('format'));

$recommendations = [
    'participation' => [
        ['name' => 'Block Game', 'slug' => 'game', 'url' => 'https://moodle.org/plugins/download.php/21879/block_game_moodle39_2020010200.zip'],
        ['name' => 'Level Up', 'slug' => 'block_xp', 'url' => 'https://moodle.org/plugins/download.php/23212/block_xp_moodle39_2020070400.zip']
    ],
    'motivation' => [
        ['name' => 'Level Up', 'slug' => 'block_xp', 'url' => 'https://moodle.org/plugins/download.php/23212/block_xp_moodle39_2020070400.zip']
    ],
    'challenge' => [
        ['name' => 'Block Game', 'slug' => 'block_game', 'url' => 'https://moodle.org/plugins/download.php/21879/block_game_moodle39_2020010200.zip'],
        ['name' => 'Format Trail', 'slug' => 'trail', 'url' => 'https://moodle.org/plugins/download.php/20901/format_trail_moodle39_2020062300.zip']
    ],
    'collaboration' => [
        ['name' => 'Level Up', 'slug' => 'block_xp', 'url' => 'https://moodle.org/plugins/download.php/23212/block_xp_moodle39_2020070400.zip']
    ],
    'exploration' => [
        ['name' => 'Format Trail', 'slug' => 'trail', 'url' => 'https://moodle.org/plugins/download.php/20901/format_trail_moodle39_2020062300.zip']
    ]
];

$recommended_plugins = $recommendations[$objective] ?? [];
if (!empty($recommended_plugins)) {
    echo html_writer::tag('p', get_string('pluginsrecommended', 'local_gamificationhelper'));
    echo html_writer::start_tag('ul');
    foreach ($recommended_plugins as $plugin) {
        echo html_writer::start_tag('li');
        echo html_writer::tag('span', $plugin['name']);
        
        if (!array_key_exists($plugin['slug'], $pluginsInstalled)) {
            echo html_writer::link(new moodle_url($plugin['url']), 'Download', ['class' => 'btn btn-primary']);
            echo html_writer::link(new moodle_url('/admin/tool/installaddon/index.php'), 'Instalar Plugin', ['class' => 'btn btn-success']);
        } else {
            echo html_writer::tag('span', ' (Plugin já instalado)', ['class' => 'label label-success']);
        }
        echo html_writer::link('#', 'Permissões', [
            'class' => 'btn btn-info permissions-btn',
            'data-slug' => $plugin['slug'],
            'onclick' => "openPermissionsModal('{$plugin['slug']}')"
        ]);

        echo html_writer::end_tag('li');
    }
    echo html_writer::end_tag('ul');
} else {
    echo html_writer::tag('p', get_string('norecommendations', 'local_gamificationhelper'));
}

?>
<script>
function openPermissionsModal(slug) {
    fetch('fetchPermissions.php?slug=' + slug)
        .then(response => response.text())
        .then(html => {
            document.getElementById('permissionsModalBody').innerHTML = html;
            document.getElementById('permissionsModal').style.display = 'block';
            document.querySelector('.modal-backdrop').style.display = 'block';
        })
        .catch(error => console.error('Error loading permissions:', error));
}

function closeModal() {
    document.getElementById('permissionsModal').style.display = 'none';
    document.querySelector('.modal-backdrop').style.display = 'none';
}
</script>

<div id="permissionsModal" style="display:none;">
    <div class="modal-content">
        <div id="permissionsModalBody"></div>
    </div>
</div>
<div class="modal-backdrop" onclick="closeModal()" style="display:none;"></div>

<?php
echo $OUTPUT->footer();

echo $OUTPUT->footer();
