<?php

if ($hassiteconfig) {
    $ADMIN->add('root', new admin_category('local_gamificationhelper_category', new lang_string('pluginname', 'local_gamificationhelper')));
    $ADMIN->add('local_gamificationhelper_category', new admin_externalpage('local_gamificationhelper', get_string('pluginname', 'local_gamificationhelper'), "$CFG->wwwroot/local/gamificationhelper/index.php"));
    $ADMIN->add('local_gamificationhelper_category', new admin_externalpage('local_gamificationhelper_setobjectives', get_string('setobjectives', 'local_gamificationhelper'), "$CFG->wwwroot/local/gamificationhelper/setObjectives.php"));
    $ADMIN->add('local_gamificationhelper_category', new admin_externalpage('local_gamificationhelper_recommend', get_string('recommendationPluginTitlePage', 'local_gamificationhelper'), "$CFG->wwwroot/local/gamificationhelper/recommendPlugins.php"));
}
