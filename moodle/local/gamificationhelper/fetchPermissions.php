<?php
require_once(__DIR__ . '/../../config.php');
require_login();

class fetchPermissions {
    private $pluginSlug;
    private $pluginName;
    private $context;

    public function __construct($slug, $name) {
        global $USER;
        $this->pluginSlug = $slug;
        $this->pluginName = $name;
        $this->context = context_system::instance();
    }

    public function getPermissionsHtml() {
        $permissionsDetails = $this->getPermissionsDetails();
        $html = '<div class="modal-header">
                    <h5 class="modal-title" id="permissionsModalLabel">Permissões Necessárias do plugin ' . $this->pluginName . '</h5>
                    <button type="button" class="btn-close" onclick="closeModalPermisson()"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <p>' . get_string('permissionsDescription', 'local_gamificationhelper') . '</p>
                    <ul>
                        <li class="allow-li"><i class="fa fa-check"></i> ' . get_string('permissionGranted', 'local_gamificationhelper') . '</li>
                        <li class="not-allow-li"><i class="fa fa-times"></i> ' . get_string('permissionDenied', 'local_gamificationhelper') . '</li>
                        <li class="not-allow-warning-li"><i class="fa fa-exclamation-triangle"></i> ' . get_string('permissionDeniedNotInstalled', 'local_gamificationhelper') . '</li>
                    </ul>
                    <h5 class="list-permissions">' . get_string('permissionsListTitle', 'local_gamificationhelper') . '</h5>';
    
        foreach ($permissionsDetails as $permission => $details) {
            $component = $this->getComponentFromCapability($permission);
            $pluginInstalled = isPluginInstalled($component);
            if ($details['granted']) {
                $statusIcon = '<i class="fa fa-check"></i>';
                $html .= "<p class='allow'>{$statusIcon} {$details['description']}</p>";
            } else {
                if ($pluginInstalled) {
                    $statusIcon = '<i class="fa fa-times"></i>';
                    $html .= "<p class='not-allow'>{$statusIcon} {$details['description']}</p>";
                } else {
                    $statusIcon = '<i class="fa fa-exclamation-triangle"></i>';
                    $html .= "<p class='not-allow-warning'>{$statusIcon} {$details['description']}</p>";
                }
            }
        }
    
        $html .= '</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Fechar</button>
                </div>';
    
        return $html;
    }

    private function getPermissionsDetails() {
        $allPermissions = $this->getPermissionsMap();
        $pluginPermissions = $allPermissions[$this->pluginSlug] ?? [];
    
        $permissions = [];
        foreach ($pluginPermissions as $capability => $defaultDescription) {
            $description = $this->getCapabilityDescription($capability, $defaultDescription);
            $permissions[$capability] = [
                'granted' => has_capability($capability, $this->context),
                'description' => $description
            ];
        }
    
        return $permissions;
    }
    
    private function getCapabilityDescription($capability, $defaultDescription) {
        $component = $this->getComponentFromCapability($capability);
        if (isPluginInstalled($component)) {
            return get_string('capability:' . $capability, $component);
        }
        return $defaultDescription;
    }

    private function getComponentFromCapability($capability) {
        if (strpos($capability, 'block/') === 0) {
            return explode('/', $capability)[0];
        } elseif (strpos($capability, 'format/') === 0) {
            return explode('/', $capability)[0];
        }
        return 'moodle';
    }

    private function getPermissionsMap() {
        return [
            'blockGame' => [
                'moodle/site:manageblocks' => get_string('moodleSite:manageblocks', 'local_gamificationhelper') . ': moodle/site:manageblocks',
                'block/game:addinstance' => get_string('blockGame:addinstance', 'local_gamificationhelper') . ': block/game:addinstance'
            ],
            'blockXp' => [
                'moodle/site:manageblocks' => get_string('moodleSite:manageblocks', 'local_gamificationhelper') . ': moodle/site:manageblocks',
                'block/xp:addinstance' => get_string('blockXp:addinstance', 'local_gamificationhelper') . ': block/xp:addinstance',
                'block/xp:manage' => get_string('blockXp:manage', 'local_gamificationhelper') . ': block/xp:manage',
                'block/xp:viewlogs' => get_string('blockXp:viewlogs', 'local_gamificationhelper') . ': block/xp:viewlogs',
                'block/xp:viewreport' => get_string('blockXp:viewreport', 'local_gamificationhelper') . ': block/xp:viewreport'
            ],
            'trail' => [
                'format/trail:changeimagecontaineralignment' => get_string('formatTrail:changeimagecontaineralignment', 'local_gamificationhelper') . ': format/trail:changeimagecontaineralignment',
                'format/trail:changeimagecontainernavigation' => get_string('formatTrail:changeimagecontainernavigation', 'local_gamificationhelper') . ': format/trail:changeimagecontainernavigation',
                'format/trail:changeimagecontainersize' => get_string('formatTrail:changeimagecontainersize', 'local_gamificationhelper') . ': format/trail:changeimagecontainersize',
                'format/trail:changeimageresizemethod' => get_string('formatTrail:changeimageresizemethod', 'local_gamificationhelper') . ': format/trail:changeimageresizemethod',
                'format/trail:changeimagecontainerstyle' => get_string('formatTrail:changeimagecontainerstyle', 'local_gamificationhelper') . ': format/trail:changeimagecontainerstyle',
                'format/trail:changesectiontitleoptions' => get_string('formatTrail:changesectiontitleoptions', 'local_gamificationhelper') . ': format/trail:changesectiontitleoptions'
            ]
        ];
    }
           
}

function isPluginInstalled($component) {
    $pluginManager = core_plugin_manager::instance();
    return $pluginManager->get_plugin_info($component) !== null;
}

if (isset($_GET['slug']) && isset($_GET['name'])) {
    $permissionLoader = new fetchPermissions($_GET['slug'], $_GET['name']);
    echo $permissionLoader->getPermissionsHtml();
}