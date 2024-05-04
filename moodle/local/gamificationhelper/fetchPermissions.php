<?php
require_once(__DIR__ . '/../../config.php');
require_login();

class fetchPermissions {
    private $pluginSlug;
    private $context;

    public function __construct($slug) {
        global $USER;
        $this->pluginSlug = $slug;
        $this->context = context_system::instance();
    }

    public function getPermissionsHtml() {
        $permissionsDetails = $this->getPermissionsDetails();

        $html = '<div class="modal-header">
                    <h5 class="modal-title" id="permissionsModalLabel">Permissões Necessárias</h5>
                    <button type="button" class="btn-close" onclick="closeModal()"></button>
                </div>
                <div class="modal-body">';

        foreach ($permissionsDetails as $permission => $isGranted) {
            $status = $isGranted ? 'Permitido' : 'Não Permitido';
            $html .= "<p>{$permission}: {$status}</p>";
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
            'block_game' => ['install' => 'moodle/site:installplugins', 'configure' => 'block/game:config'],
            'trail' => ['install' => 'moodle/site:installplugins', 'configure' => 'format/trail:config']
        ];

        $permissions = [];
        foreach ($permissionsMap[$this->pluginSlug] as $key => $capability) {
            $permissions[$key] = has_capability($capability, $this->context);
        }

        return $permissions;
    }
}

// Uso da classe
if (isset($_GET['slug'])) {
    $permissionLoader = new fetchPermissions($_GET['slug']);
    echo $permissionLoader->getPermissionsHtml();
}