<?php

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once (__DIR__ . '/enums/RecommendationCategory.php');

use gamificationhelper\enums\RecommendationCategory;

require_login();
admin_externalpage_setup('local_gamificationhelper_recommend');

$PAGE->set_url(new moodle_url('/local/gamificationhelper/recommendPlugins.php'));
$PAGE->set_title(get_string('pluginsrecommended', 'local_gamificationhelper'));
$PAGE->set_heading(get_string('pluginrecommendation', 'local_gamificationhelper'));
$PAGE->requires->css(new moodle_url('/local/gamificationhelper/styles/styles.css'));

echo $OUTPUT->header();

$objective = required_param('objective', PARAM_ALPHANUMEXT);
$style = required_param('learningstyle', PARAM_ALPHANUMEXT);
$courseid = required_param('courseid', PARAM_INT);

$pluginManager = core_plugin_manager::instance();
$pluginsInstalled = \array_merge($pluginManager->get_installed_plugins('block'), $pluginManager->get_installed_plugins('format'));

$recommendedCategory = RecommendationCategory::safeFrom($objective) ?: null;
if (!empty($recommendedCategory)) {
    $recommendedPlugins = $recommendedCategory->getPlugins();
    echo html_writer::tag('h4', get_string('pluginsrecommendedtxt', 'local_gamificationhelper'));
    echo html_writer::start_tag('ul', ['class' => 'recommendations-list']);
    foreach ($recommendedPlugins as $pluginEnum) {
        $plugin = $pluginEnum->value;

        echo html_writer::start_tag('li');
            echo html_writer::start_tag('p');
                echo html_writer::tag('span', $plugin['name']);

                if (\array_key_exists($plugin['slug'], $pluginsInstalled)) {
                    echo html_writer::tag('span', ' (Plugin já instalado)');
                }

            echo html_writer::end_tag('p');
            echo html_writer::start_tag('div', ['class' => 'actions']);

            echo html_writer::link('#', '<i class="fa fa-question-circle" aria-hidden="true""></i>', [
                'class' => 'btn btn-about',
                'title' => 'Sobre o plugin',
                'data-slug' => $plugin['slug'],
                'onclick' => "openPermissionsModal('{$plugin['slug']}, {$plugin['name']}')"
            ]);

            echo html_writer::link('#', '<i class="fa fa-list-alt" aria-hidden="true""></i>', [
                'class' => 'btn btn-permissions',
                'title' => 'Permissões de instalação e configuração',
                'data-slug' => $plugin['slug'],
                'onclick' => "openPermissionsModal('{$plugin['slug']}', '{$plugin['name']}')"
            ]);
        
            if (!\array_key_exists($plugin['slug'], $pluginsInstalled)) {
                echo html_writer::tag('a', '<i class="fa fa-download" aria-hidden="true""></i>', 
                    [
                        'href' => $plugin['url'],
                        'class' => 'btn btn-primary', 
                        'title' => 'Download',
                        'download' => ''
                    ]);
                    
                echo html_writer::link(new moodle_url('/admin/tool/installaddon/index.php'), '<i class="fa fa-cog" aria-hidden="true""></i>', [
                    'class' => 'btn btn-primary', 
                    'title' => 'Instalar', 
                    'target' => '_blank'
                ]);
            }

            echo html_writer::end_tag('div');
        echo html_writer::end_tag('li');
    }
    echo html_writer::end_tag('ul');
} else {
    echo html_writer::tag('p', get_string('norecommendations', 'local_gamificationhelper'));
}

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

function closeModal() {
    document.getElementById('permissionsModal').style.display = 'none';
    document.querySelector('.modal-backdrop').style.display = 'none';
}
</script>

<div id="permissionsModal" class="permissions-modal" style="display:none;">
        <div id="permissionsModalBody" class="modal-content"></div>
</div>
<div class="modal-backdrop" onclick="closeModal()" style="display:none;"></div>

<?php
echo $OUTPUT->footer();
