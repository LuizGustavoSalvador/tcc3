<?php

namespace gamificationhelper\classes;

require_once(__DIR__ . '/recommendationPlugin.php');

use gamificationhelper\classes\recommendationPlugin;

class ModalInstallPlugin {

    public static function getModalHTML(string $slug) {
        $pluginData = \reset(recommendationPlugin::getPlugins('', '', $slug));
        $modalTitle = get_string('modalTitle', 'local_gamificationhelper', $pluginData['name']);
        $steps = self::getPluginStepsContent($slug);

        if (!$steps) {
            return '';
        }

        $html = '<div class="modal-backdrop" onclick="closeModal(\'' . $slug . '\')" style="display:none;"></div>
            <div id="installModal' . $slug . '" class="gamification-helper-modal" style="display:none;">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="permissionsModalLabel">' . $modalTitle . '</h3>
                    <button type="button" class="btn-close" onclick="closeModal(\'' . $slug . '\')"><i class="fa fa-times"></i></button>
                </div>
                <div class="content install-plugin-content">' . $steps . '</div>
                <div class="modal-footer">
                    <a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">'. get_string('btnInstall', 'local_gamificationhelper') .'</a>
                    <button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $slug . '\')">Fechar</button>
                </div></div></div>';

        return $html;
    }

    private static function getPluginStepsContent(string $slug): string
    {
        $html = '<h5 class="section-title title-install">'. get_string('defaultInstallInstallIntro', 'local_gamificationhelper') .'</h5>
        <ol>
            <li>' . get_string('defaultInstallInstallStep1', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallInstallStep2', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallValidation', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallMoodleVersionInfo', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallMoodleCheck', 'local_gamificationhelper') . '</li>
            <li>' . get_string('blockGameStatusOK', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallInstallIntro', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallUpdateVersion', 'local_gamificationhelper') . '</li>
        </ol>
        <h5 class="section-title">' . get_string('defaultInstallDefaultConfig', 'local_gamificationhelper') . '</h5>
        <p class="section-desc">' . get_string('defaultInstallConfigNote', 'local_gamificationhelper') . '</p>
        <span class="section-subtitle"><strong>' . get_string('defaultInstallConfigFields', 'local_gamificationhelper') . '</strong></span>';

        if($slug === 'blockGame'){
            $html .= '<ol>
                <li>' . get_string('blockGameUseAvatar', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameReplaceAvatars', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAllowAvatarChange', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameShowPlayerInfo', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePointForActivities', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDailyBonus', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameBonusForBadge', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameShowRanking', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePreserveIdentity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameShowScore', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameShowLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCustomLevelImages', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameNumberOfLevels', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSaveChanges', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallCourseConfig', 'local_gamificationhelper') . '</h5>
            <ol>
                <li>' . get_string('blockGameAccessCourses', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameEditMode', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddBlock', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameConfigureBlock', 'local_gamificationhelper') . '</li>
                <li><span>' . get_string('blockGameBlockSettings', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockGameEditTitle', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowCourseName', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowPlayerInfo', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGamePointActivities', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameDailyBonus', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowGroupRanking', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameGroupPointsCalculation', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowRanking', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameRankingListLimit', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGamePreserveIdentity', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowScore', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameShowLevel', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockGameNumberOfLevels', 'local_gamificationhelper') . '</li>
                    </ol>
                </li>
                <li>' . get_string('blockGameSectionCompletionPoints', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameActivityCompletionPoints', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameBlockDisplaySettings', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePageSettings', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSaveBlockConfig', 'local_gamificationhelper') . '</li>
            </ol>';
        }

        $html .= '';

        return $html;
    }
}