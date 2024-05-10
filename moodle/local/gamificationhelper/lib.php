<?php

defined('MOODLE_INTERNAL') || die();

function local_gamificationhelper_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;

    if (!$PAGE->course or $PAGE->course->id == 1) {
        return;
    }

    if (!has_capability('local/gamificationhelper:view', context_course::instance($PAGE->course->id))) {
        return;
    }

    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        $strgamificationhelper = get_string('pluginname', 'local_gamificationhelper');
        $url = new moodle_url('/local/gamificationhelper/index.php', array('id' => $PAGE->course->id));
        $gamificationhelpernode = navigation_node::create(
            $strgamificationhelper,
            $url,
            navigation_node::NODETYPE_LEAF,
            'pluginname',
            'pluginname',
            new pix_icon('i/settings', $strgamificationhelper)
        );
        // Marcar como ativo se estivermos na página correspondente
        if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
            $gamificationhelpernode->make_active();
        }
        $settingnode->add_node($gamificationhelpernode);
    }
}