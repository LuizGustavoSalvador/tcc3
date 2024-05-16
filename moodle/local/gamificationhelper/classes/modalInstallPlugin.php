<?php

namespace gamificationhelper\classes;

class ModalInstallPlugin {

    public static function getModalHTML($pluginSlug) {
        $steps = self::getPluginSteps($pluginSlug);
        if (!$steps) {
            return '';
        }

        $strModalTitle = get_string('modalTitle', 'local_gamificationhelper', $steps['name']);
        $html = '<div class="modal-backdrop" onclick="closeModal(\'' . $pluginSlug . '\')" style="display:none;"></div>
            <div id="installModal' . $pluginSlug . '" class="gamification-helper-modal" style="display:none;">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionsModalLabel">' . $strModalTitle . '</h5>
                    <button type="button" class="btn-close" onclick="closeModal(\'' . $pluginSlug . '\')"><i class="fa fa-times"></i></button>
                </div>
                <div class="content">
                <ol>';

        foreach ($steps['instructions'] as $step) {
            $html .= '<li>' . get_string($step, 'local_gamificationhelper') . '</li>';
        }

        $html .= '</ol></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $pluginSlug . '\')">Close</button>
                </div></div></div>';

        return $html;
    }

    private static function getPluginSteps($pluginSlug) {
        $steps = [
            'game' => [
                'name' => 'blockGame',
                'instructions' => [
                    'blockGameInstallIntro',
                    'blockGameDownload',
                    'blockGameInstallStep1',
                    'blockGameInstallStep2',
                    'blockGameValidation',
                    'blockGameMoodleVersionInfo',
                    'blockGameMoodleCheck',
                    'blockGameStatusOK',
                    'blockGameStatusVerify',
                    'blockGamePluginVerification',
                    'blockGameUpdateVersion',
                    'blockGameConfigIntro',
                    'blockGameDefaultConfig',
                    'blockGameConfigNote',
                    'blockGameConfigFields',
                    'blockGameUseAvatar',
                    'blockGameReplaceAvatars',
                    'blockGameAllowAvatarChange',
                    'blockGameShowPlayerInfo',
                    'blockGamePointForActivities',
                    'blockGameDailyBonus',
                    'blockGameBonusForBadge',
                    'blockGameShowRanking',
                    'blockGamePreserveIdentity',
                    'blockGameShowScore',
                    'blockGameShowLevel',
                    'blockGameCustomLevelImages',
                    'blockGameNumberOfLevels',
                    'blockGameSaveChanges',
                    'blockGameCourseConfig',
                    'blockGameAccessCourses',
                    'blockGameEditMode',
                    'blockGameAddBlock',
                    'blockGameConfigureBlock',
                    'blockGameBlockSettings',
                    'blockGameEditTitle',
                    'blockGameShowCourseName',
                    'blockGameShowPlayerInfo',
                    'blockGamePointActivities',
                    'blockGameDailyBonus',
                    'blockGameShowGroupRanking',
                    'blockGameGroupPointsCalculation',
                    'blockGameShowRanking',
                    'blockGameRankingListLimit',
                    'blockGamePreserveIdentity',
                    'blockGameShowScore',
                    'blockGameShowLevel',
                    'blockGameNumberOfLevels',
                    'blockGameSectionCompletionPoints',
                    'blockGameActivityCompletionPoints',
                    'blockGameBlockDisplaySettings',
                    'blockGamePageSettings',
                    'blockGameSaveBlockConfig'
                ]
            ],
            'block_xp' => [
                'name' => 'levelUp',
                'instructions' => [
                    'blockXpInstallIntro',
                    'blockXpDownload',
                    'blockXpInstallStep1',
                    'blockXpInstallStep2',
                    'blockXpValidation',
                    'blockXpMoodleVersionInfo',
                    'blockXpMoodleCheck',
                    'blockXpStatusOK',
                    'blockXpStatusVerify',
                    'blockXpPluginVerification',
                    'blockXpUpdateVersion',
                    'blockXpConfigIntro',
                    'blockXpDefaultConfig',
                    'blockXpConfigNote',
                    'blockXpConfigFields',
                    'blockXpUseAvatar',
                    'blockXpReplaceAvatars',
                    'blockXpAllowAvatarChange',
                    'blockXpShowPlayerInfo',
                    'blockXpPointForActivities',
                    'blockXpDailyBonus',
                    'blockXpBonusForBadge',
                    'blockXpShowRanking',
                    'blockXpPreserveIdentity',
                    'blockXpShowScore',
                    'blockXpShowLevel',
                    'blockXpCustomLevelImages',
                    'blockXpNumberOfLevels',
                    'blockXpSaveChanges',
                    'blockXpCourseConfig',
                    'blockXpAccessCourses',
                    'blockXpEditMode',
                    'blockXpAddBlock',
                    'blockXpConfigureBlock',
                    'blockXpBlockSettings',
                    'blockXpEditTitle',
                    'blockXpShowCourseName',
                    'blockXpShowPlayerInfo',
                    'blockXpPointActivities',
                    'blockXpDailyBonus',
                    'blockXpShowGroupRanking',
                    'blockXpGroupPointsCalculation',
                    'blockXpShowRanking',
                    'blockXpRankingListLimit',
                    'blockXpPreserveIdentity',
                    'blockXpShowScore',
                    'blockXpShowLevel',
                    'blockXpNumberOfLevels',
                    'blockXpSectionCompletionPoints',
                    'blockXpActivityCompletionPoints',
                    'blockXpBlockDisplaySettings',
                    'blockXpPageSettings',
                    'blockXpSaveBlockConfig'
                ]
            ],
            'trail' => [
                'name' => 'formatTrail',
                'instructions' => [
                    'trailInstallIntro',
                    'trailDownload',
                    'trailInstallStep1',
                    'trailInstallStep2',
                    'trailValidation',
                    'trailMoodleVersionInfo',
                    'trailMoodleCheck',
                    'trailStatusOK',
                    'trailStatusVerify',
                    'trailPluginVerification',
                    'trailUpdateVersion',
                    'trailConfigIntro',
                    'trailDefaultConfig',
                    'trailConfigNote',
                    'trailConfigFields',
                    'trailUseAvatar',
                    'trailReplaceAvatars',
                    'trailAllowAvatarChange',
                    'trailShowPlayerInfo',
                    'trailPointForActivities',
                    'trailDailyBonus',
                    'trailBonusForBadge',
                    'trailShowRanking',
                    'trailPreserveIdentity',
                    'trailShowScore',
                    'trailShowLevel',
                    'trailCustomLevelImages',
                    'trailNumberOfLevels',
                    'trailSaveChanges',
                    'trailCourseConfig',
                    'trailAccessCourses',
                    'trailEditMode',
                    'trailAddBlock',
                    'trailConfigureBlock',
                    'trailBlockSettings',
                    'trailEditTitle',
                    'trailShowCourseName',
                    'trailShowPlayerInfo',
                    'trailPointActivities',
                    'trailDailyBonus',
                    'trailShowGroupRanking',
                    'trailGroupPointsCalculation',
                    'trailShowRanking',
                    'trailRankingListLimit',
                    'trailPreserveIdentity',
                    'trailShowScore',
                    'trailShowLevel',
                    'trailNumberOfLevels',
                    'trailSectionCompletionPoints',
                    'trailActivityCompletionPoints',
                    'trailBlockDisplaySettings',
                    'trailPageSettings',
                    'trailSaveBlockConfig'
                ]
            ]
        ];

        return $steps[$pluginSlug] ?? null;
    }
}