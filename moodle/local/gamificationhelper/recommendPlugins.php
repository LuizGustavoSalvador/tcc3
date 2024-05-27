<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once(__DIR__ . '/classes/modalInstallPlugin.php');
require_once(__DIR__ . '/classes/recommendationPlugin.php');

use gamificationhelper\classes\modalInstallPlugin;
use gamificationhelper\classes\recommendationPlugin;

require_login();
admin_externalpage_setup('local_gamificationhelper_recommend');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/recommendPlugins.php'));
$PAGE->set_title(get_string('recommendationPluginTitlePage', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('recommendationPluginTitlePage', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));


$objective = required_param('objective', PARAM_ALPHANUMEXT);
$approach = required_param('learningstyle', PARAM_ALPHANUMEXT);

$pluginManager = core_plugin_manager::instance();
$pluginsInstalled = \array_merge($pluginManager->get_installed_plugins('block'), $pluginManager->get_installed_plugins('format'));

$recommendedPlugins = recommendationPlugin::getPlugins($objective, $approach);

echo $OUTPUT->header();

echo html_writer::start_tag('div', ['class' => 'gamificationhelper-content']);

if (!empty($recommendedPlugins)) {
    echo html_writer::tag('p', get_string('recommendationPluginDesc', 'local_gamificationhelper'));
    echo html_writer::start_tag('ul', ['class' => 'recommendations-list']);
    foreach ($recommendedPlugins as $plugin) {
        echo html_writer::start_tag('li');
            echo html_writer::start_tag('p');
                echo html_writer::tag('span', $plugin['name']);

                if (\array_key_exists($plugin['key'], $pluginsInstalled)) {
                    echo html_writer::tag('span', ' (' . get_string('alreadyInstalled', 'local_gamificationhelper') . ')');
                }

            echo html_writer::end_tag('p');
            echo html_writer::start_tag('div', ['class' => 'actions']);

            echo html_writer::link(
                $plugin['url'],
                '<i class="fa fa-question-circle" aria-hidden="true""></i>', 
                [
                    'class' => 'btn btn-about',
                    'title' => get_string('btnAbout', 'local_gamificationhelper'),
                    'target' => '_blank'
                ]
            );

            echo html_writer::link(
                '#', 
                '<i class="fa fa-list-alt" aria-hidden="true""></i>', 
                [
                    'class' => 'btn btn-permissions',
                    'title' => get_string('btnPermissions', 'local_gamificationhelper'),
                    'data-slug' => $plugin['slug'],
                    'onclick' => "openPermissionsModal('{$plugin['slug']}', '{$plugin['name']}')"
                ]
            );
        
            if (!\array_key_exists($plugin['key'], $pluginsInstalled)) {
                echo html_writer::tag(
                    'a', 
                    '<i class="fa fa-download" aria-hidden="true""></i>', 
                    [
                        'href' => $plugin['download'],
                        'class' => 'btn btn-primary', 
                        'title' => get_string('btnDownload', 'local_gamificationhelper'),
                        'download' => ''
                    ]
                );
            }

            echo html_writer::link('#', 
            '<i class="fa fa-cog" aria-hidden="true"></i>', 
            [
                'class' => 'btn btn-primary', 
                'title' => get_string('btnConfig', 'local_gamificationhelper'),
                'onclick' => "openInstallModal('{$plugin['slug']}')",
            ]);

            echo html_writer::end_tag('div');
            echo modalInstallPlugin::getModalHTML($plugin['slug'], \array_key_exists($plugin['key'], $pluginsInstalled));
        echo html_writer::end_tag('li');
    }
    echo html_writer::end_tag('ul');
} else {
    $objectiveString = get_string('selectObjective', 'local_gamificationhelper');
    $approachString = get_string('selectStyle', 'local_gamificationhelper');

    echo html_writer::tag('h4', get_string('noRecommendationsTitle', 'local_gamificationhelper'));
    
    echo html_writer::tag('p', get_string('noRecommendations', 'local_gamificationhelper', ['objective' => $objectiveString, 'approach' => $approachString]));
    
    echo html_writer::start_tag('ul', ['class' => 'no-recommendations-list']);

    echo html_writer::tag('li', get_string('noRecommendationsReason1', 'local_gamificationhelper'));
    echo html_writer::tag('li', get_string('noRecommendationsReason2', 'local_gamificationhelper'));

    echo html_writer::end_tag('ul');
    
    echo html_writer::tag('p', get_string('noRecommendationsConclusion', 'local_gamificationhelper'));
}

echo html_writer::link(
    new moodle_url('/local/gamificationhelper/setObjectives.php'),
    'Voltar',
    [
        'class' => 'btn btn-primary', 
        'title' => get_string('btnBack', 'local_gamificationhelper'),
    ]
);

echo html_writer::end_tag('div');

?>
<script>
function openPermissionsModal(slug, name) {
    fetch('fetchPermissions.php?slug=' + slug + '&name=' + name)
        .then(response => response.text())
        .then(html => {
            document.getElementById('permissionsModalBody').innerHTML = html;
            document.getElementById('permissionsModal').style.display = 'block';
            document.querySelector('.modal-backdrop').style.display = 'block';
        })
        .catch(error => console.error('Ocorreu um erro ao listar a permissões:', error));
}

function closeModalPermisson() {
    document.getElementById('permissionsModal').style.display = 'none';
    document.querySelector('.modal-backdrop').style.display = 'none';
}

function openInstallModal(pluginSlug) {
    document.getElementById('installModal' + pluginSlug).style.display = 'block';
    document.querySelector('.modal-backdrop').style.display = 'block';
}

function closeModal(pluginSlug) {
    document.getElementById('installModal' + pluginSlug).style.display = 'none';
    document.querySelector('.modal-backdrop').style.display = 'none';
}
</script>

<div id="permissionsModal" class="gamification-helper-modal" style="display:none;">
        <div id="permissionsModalBody" class="modal-content"></div>
</div>
<div class="modal-backdrop" onclick="closeModalPermisson()" style="display:none;"></div>

<?php
echo $OUTPUT->footer();
