<?php

defined('MOODLE_INTERNAL') || die();

function local_gamificationhelper_extend_settings_navigation(settings_navigation $settingsnav, $context) {
    global $CFG, $PAGE;

    // Verifica se estamos dentro de um curso que não seja a página principal do site
    if ($PAGE->course->id == 1) {
        return;  // Não adiciona o link no contexto do site principal
    }

    // Verifica se o usuário tem a capacidade de visualizar o plugin no contexto atual do curso
    if (!has_capability('local/gamificationhelper:view', $context)) {
        return;  // O usuário não tem permissão para ver o plugin, retorna sem adicionar ao menu
    }

    // Localiza o nó de administração do curso no menu de configurações
    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        $strgamificationhelper = get_string('pluginname', 'local_gamificationhelper');
        $url = new moodle_url('/local/gamificationhelper/index.php', ['id' => $PAGE->course->id]);

        // Cria um nó de navegação para o plugin
        $gamificationhelpernode = navigation_node::create(
            $strgamificationhelper,
            $url,
            navigation_node::NODETYPE_LEAF,
            'gamificationhelper',
            'gamificationhelper',
            new pix_icon('i/settings', $strgamificationhelper)
        );

        // Adiciona o nó ao menu de administração do curso
        $settingnode->add_node($gamificationhelpernode);
    }
}