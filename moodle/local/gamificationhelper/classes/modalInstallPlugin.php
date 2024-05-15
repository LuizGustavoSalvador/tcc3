<?php

namespace gamificationhelper\classes;

class ModalInstallPlugin {

    public static function getModalHTML($pluginSlug) {
        $steps = self::getPluginSteps($pluginSlug);
        if (!$steps) {
            return '';
        }

        $strModalTitle = get_string('modalTitle', 'local_gamificationhelper', $steps['name']);
        $html = '<div id="installModal' . $pluginSlug . '" class="gamification-helper-modal" style="display:none;">' .
                '<div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionsModalLabel">' . $strModalTitle . '</h5>
                    <button type="button" class="btn-close" onclick="closeModal(\'' . $pluginSlug . '\')"><i class="fa fa-times"></i></button>
                </div>
                <div class="content">
                <ol>';

        foreach ($steps['instructions'] as $step) {
            $html .= '<li>' . get_string($step, 'local_gamificationhelper') . '</li>';
        }

        $html .= '</ol></div></div></div>';

        return $html;
    }

    private static function getPluginSteps($pluginSlug) {
        $steps = [
            'game' => [
                'name' => get_string('blockGame', 'local_gamificationhelper'),
                'instructions' => [
                    'blockGameInstallIntro', 
                    'blockGameInstallStep1', 'blockGameInstallStep2', 'blockGameInstallStep3', 'blockGameInstallStep4', 'blockGameInstallStep5', 'blockGameInstallStep6',
                    'blockGameConfigIntro', 'blockGameGeneralSettings', 'blockGameUseAvatar', 'blockGameReplaceAvatars', 'blockGameAllowAvatarChange',
                    'blockGameShowPlayerInfo', 'blockGamePointForActivities', 'blockGameDailyBonus', 'blockGameLevelDisplay', 'blockGameCustomLevelImages',
                    'blockGameConfigSaveChanges'
                ]
            ],
            'block_xp' => [
                'name' => get_string('levelUp', 'local_gamificationhelper'),
                'instructions' => [
                    'blockXpInstallIntro', 
                    'blockXpInstallStep1', 'blockXpInstallStep2', 'blockXpInstallStep3', 'blockXpInstallStep4', 'blockXpInstallStep5', 'blockXpInstallStep6',
                    'blockXpConfigIntro', 'blockXpGeneralSettings', 'blockXpUseAvatar', 'blockXpReplaceAvatars', 'blockXpAllowAvatarChange',
                    'blockXpShowPlayerInfo', 'blockXpPointForActivities', 'blockXpDailyBonus', 'blockXpLevelDisplay', 'blockXpCustomLevelImages',
                    'blockXpConfigSaveChanges', 'blockXpSupportInfo'
                ]
            ],
            'trail' => [
                'name' => get_string('formatTrail', 'local_gamificationhelper'),
                'instructions' => [
                    'trailInstallIntro', 
                    'trailInstallStep1', 'trailInstallStep2', 'trailInstallStep3', 'trailInstallStep4', 'trailInstallStep5', 'trailInstallStep6',
                    'trailConfigIntro', 'trailGeneralSettings', 'trailUseAvatar', 'trailReplaceAvatars', 'trailAllowAvatarChange',
                    'trailShowPlayerInfo', 'trailPointForActivities', 'trailDailyBonus', 'trailLevelDisplay', 'trailCustomLevelImages',
                    'trailConfigSaveChanges', 'trailSupportInfo'
                ]
            ]
        ];

        return $steps[$pluginSlug] ?? null;
    }
}