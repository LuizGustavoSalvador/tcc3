<?php

defined('MOODLE_INTERNAL') || die();

function block_gamificationhelper_extend_settings_navigation(settings_navigation $settingsnav, $context) {
    global $PAGE;

    if ($PAGE->course->id == 1) {
        return;
    }

    if (!has_capability('block/gamificationhelper:view', $context)) {
        return;
    }

    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        $strgamificationhelper = get_string('pluginname', 'block_gamificationhelper');
        $url = new moodle_url('/blocks/gamificationhelper/index.php', ['id' => $PAGE->course->id]);

        $gamificationhelpernode = navigation_node::create(
            $strgamificationhelper,
            $url,
            navigation_node::NODETYPE_LEAF,
            'gamificationhelper',
            'gamificationhelper',
            new pix_icon('i/settings', $strgamificationhelper)
        );

        $settingnode->add_node($gamificationhelpernode);
    }
}