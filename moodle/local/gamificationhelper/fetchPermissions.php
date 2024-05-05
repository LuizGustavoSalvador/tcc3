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
                    <button type="button" class="btn-close" onclick="closeModal()"><i class="fa-solid fa-circle-xmark"></i></button>
                </div>
                <div class="modal-body">';

        foreach ($permissionsDetails as $permission => $isGranted) {
            $status = $isGranted ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
            $allowClass = $isGranted ? 'allow' : 'not-allow';
            $html .= "<p class='{$allowClass}''>{$permission} {$status}</p>";
        }

        $html .= '</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Fechar</button>
                </div>';

        return $html;
    }

    private function getPermissionsDetails() {
        $permissionsMap = [
            'block_xp' => ['install' => 'moodle/site:installplugins', 'configure' => 'block/xp:config'],
            'game' => ['install' => 'moodle/site:installplugins', 'configure' => 'block/game:config'],
            'trail' => ['install' => 'moodle/site:installplugins', 'configure' => 'format/trail:config']
        ];

        $permissions = [];
        foreach ($permissionsMap[$this->pluginSlug] as $key => $capability) {
            $permissions[$key] = has_capability($capability, $this->context);
        }

        return $permissions;
    }
}

if (isset($_GET['slug']) && isset($_GET['name'])) {
    $permissionLoader = new fetchPermissions($_GET['slug'], $_GET['name']);
    echo $permissionLoader->getPermissionsHtml();
}