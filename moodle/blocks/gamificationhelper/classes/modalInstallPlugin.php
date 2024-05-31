<?php

namespace gamificationhelper\classes;

require_once __DIR__ . '/recommendationPlugin.php';


class ModalInstallPlugin
{
    public static function getModalHTML(string $slug, bool $hasInstalled)
    {
        $pluginData = \reset(recommendationPlugin::getPlugins('', '', $slug));
        $modalTitle = get_string('modalTitle', 'block_gamificationhelper', $pluginData['name']);
        $steps = self::getPluginStepsContent($slug, $hasInstalled, $pluginData['name']);

        if (!$steps) {
            return '';
        }

        $html = '<div class="modal-backdrop" onclick="closeModal(\'' . $slug . '\')" style="display:none;"></div>
            <div id="installModal' . $slug . '" class="gamification-helper-modal" style="display:none;">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="permissionsModalLabel">' . $modalTitle . '</h3>
                    <button type="button" class="btn-close" onclick="closeModal(\'' . $slug . '\')">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="content install-plugin-content">' . $steps . '</div>
                <div class="modal-footer">';

        $html .= (is_siteadmin() && !$hasInstalled) ? 
            '<a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">' 
                . get_string('btnInstall', 'block_gamificationhelper') . 
            '</a>' : '';

        $html .= '<button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $slug . '\')">Fechar</button>
                </div></div></div>';

        return $html;
    }

    private static function getImageHTML(string $path, string $imageName, string $altText): string
    {
        $imageurl = new \moodle_url('/blocks/gamificationhelper/images/' . $path . '/' . $imageName);

        return '<img src="' . $imageurl . '" alt="' . $altText . '" />';
    }

    private static function getPluginStepsContent(string $slug, bool $hasInstalled, string $pluginName): string
    {
        $installPath = 'install';
        $blockGamePath = 'blockgame';
        $blockXpPath = 'blockxp';
        $trailFormatPath = 'trailformat';

        $admin = !is_siteadmin() ? 'admin' : '';

        if(!$hasInstalled){
            if (is_siteadmin()) {
                $html = '<h5 class="section-title title-install">' 
                    . get_string('defaultInstallInstallIntro', 'block_gamificationhelper') . 
                '</h5>
                <ol>
                    <li>' . get_string('defaultInstallInstallStep1', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallInstallStep2', 'block_gamificationhelper') . '</li>
                    ' . self::getImageHTML(
                            $installPath, 
                            'area-upload-plugin.jpeg', 
                            get_string('defaultInstallInstallIntro', 'block_gamificationhelper')
                        ) . '
                    <li>' . get_string('defaultInstallInstallStep3', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallValidation', 'block_gamificationhelper') . '</li>
                    ' . self::getImageHTML(
                            $installPath, 
                            'validacao-plugin.jpeg', 
                            get_string('defaultInstallInstallIntro', 'block_gamificationhelper')
                        ) . '
                    <li>' . get_string('defaultInstallMoodleVersionInfo', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallMoodleCheck', 'block_gamificationhelper') . '</li>
                    ' . self::getImageHTML(
                            $installPath, 
                            'informacao-versao-moodle.png', 
                            get_string('defaultInstallInstallIntro', 'block_gamificationhelper')
                        ) . '
                    <li>' . get_string('defaultInstallStatusOK', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallUpdateVersion', 'block_gamificationhelper') . '</li>
                    ' . self::getImageHTML(
                            $installPath, 
                            'atualizando-plugin.png', 
                            get_string('defaultInstallInstallIntro', 'block_gamificationhelper')
                        ) . '
                </ol>';
            } else {
                $html = '<h5 class="section-title title-install">' 
                    . get_string('defaultInstallPluginRequestTutorial', 'block_gamificationhelper') . 
                '</h5>
                <p class="section-desc">' . get_string('defaultInstallPluginRequestDescription', 'block_gamificationhelper') . '</p>
                <ol>
                    <li>' . get_string('defaultInstallSendEmail', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallAttachZipDescription', 'block_gamificationhelper') . '</li>
                    <li>' . get_string('defaultInstallPluginNameDescription', 'block_gamificationhelper', $pluginName) . '</li>
                </ol>';
            }
        }

        if ($slug === 'blockGame') {
            $html .= (is_siteadmin() && !$hasInstalled) ?
            '<h5 class="section-title">' . get_string('blockGameDefaultConfig', 'block_gamificationhelper') . '</h5>
            <p class="section-desc">' . get_string('blockGameDefaultConfigNote', 'block_gamificationhelper') . '</p>' .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-1.png', 
                get_string('blockGameDefaultConfig', 'block_gamificationhelper')
            ) .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-2.png', 
                get_string('blockGameDefaultConfig', 'block_gamificationhelper')
            ) .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-3.png', 
                get_string('blockGameDefaultConfig', 'block_gamificationhelper')
            ) . '
            <h5 class="section-title">' . get_string('defaultInstallConfigFields', 'block_gamificationhelper') . '</h5>
            <ol>
                <li>' . get_string('blockGameDefaultUseAvatar', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultReplaceAvatars', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultAllowAvatarChange', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowPlayerInfo', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultPointForActivities', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultDailyBonus', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultBonusForBadge', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowRanking', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultPreserveIdentity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowScore', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowLevel', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultCustomLevelImages', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultNumberOfLevels', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultSaveChanges', 'block_gamificationhelper') . '</li>
            </ol>' : '';

            $html .= '<h5 class="section-title">' 
                . get_string('blockGameAddToCourseTutorial', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockGameAddToCourseDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'adicionar-block-game-curso.png', 
                    get_string('blockGameAddToCourseTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameAddStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep4', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' 
                . get_string('blockGameSettingsTutorial', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockGameSettingsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-1.png', 
                    get_string('blockGameSettingsTutorial', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-2.png', 
                    get_string('blockGameSettingsTutorial', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-3.png', 
                    get_string('blockGameSettingsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsEditTitle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowCourseName', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowPlayerInfo', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsScoreActivityGrades', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDailyBonus', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowGroupRanking', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsGroupPointsCalculation', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowRanking', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsRankingLimit', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsPreserveIdentity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowScore', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowLevel', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsNumberOfLevels', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsPointsForLevel', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' 
                . get_string('blockGameSettingsCompletionPoints', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsCompletionPointsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-pontuacao-secao.png', 
                    get_string('blockGameSettingsCompletionPoints', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForCompletion', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsCompletionConditions', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' 
                . get_string('blockGameSettingsActivityCompletionPoints', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsActivityCompletionPointsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-pontuacao-atividade.png', 
                    get_string('blockGameSettingsActivityCompletionPoints', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForActivityCompletion', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsActivityCompletionConditions', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsGamePointsTab', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockGameSettingsWhereToShow', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsWhereToShowDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-onde-exibir.png', 
                    get_string('blockGameSettingsWhereToShow', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsBlockLocation', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowOnPageType', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultRegion', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultWeight', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockGameSettingsOnThisPage', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsOnThisPageDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-nesta-pagina.png', 
                    get_string('blockGameSettingsOnThisPage', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsVisible', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsRegion', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsWeight', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameResetPointsTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameResetPointsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'redefinir-pontos-curso.png', 
                    get_string('blockGameResetPointsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameResetPointsStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep3', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameRemoveTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameRemoveDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'como-remover-block-game.png', 
                    get_string('blockGameRemoveTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameRemoveStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep3', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGamePermissionsTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockGamePermissionsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configurar-permissoes-block-game.png', 
                    get_string('blockGamePermissionsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGamePermissionsStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep3', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameCheckPermissionsTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameCheckPermissionsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'verificar-permissoes-block-game.png', 
                    get_string('blockGameCheckPermissionsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameCheckPermissionsStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep4', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'block_gamificationhelper') . '</h5>
            <ul class="support-link-list">
                <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
                    ' . get_string('defaultSupportLink1', 'block_gamificationhelper') . '
                </a></li>
                <li><a href="https://www.youtube.com/watch?v=YPSUYfORn0g&ab_channel=prof_jota" target="_blank">
                    ' . get_string('blockGameSupportLink2', 'block_gamificationhelper') . '
                </a></li>
                <li><a href="https://www.youtube.com/watch?v=shge05pvyxc&t=981s&ab_channel=DesignInstrucional" target="_blank">
                    ' . get_string('blockGameSupportLink3', 'block_gamificationhelper') . '
                </a></li>
            </ul>
            ';
        } elseif ($slug === 'blockXp') {
            $html .= (is_siteadmin() && !$hasInstalled) ? '<h5 class="section-title">' 
                . get_string('blockXpDefaultSettings', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpDefaultSettingsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-1.png', 
                    get_string('blockXpDefaultSettings', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-2.png', 
                    get_string('blockXpDefaultSettings', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-3.png', 
                    get_string('blockXpDefaultSettings', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpDefaultSettingsPointsContext', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsNavBarDisplay', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsAdminsCanEarnXp', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsKeepLogs', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsUsageReport', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableInfos', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableLevelUpNotif', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableLeader', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsIdentityMode', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsNeighbours', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsRankMode', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsLadderCols', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableCheatGuard', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsMaxActionsPerTime', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsTimeForMaxActions', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsTimeBetweenSameActions', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockTitle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsRankingSnapshot', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockRecentActivity', 'block_gamificationhelper') . '</li>
            </ol>' : '';
            $html .= '<h5 class="section-title ' . $admin . '">' 
                . get_string('blockXpAddToCourseTutorial', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpAddToCourseDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'adicionar-level-up-curso.png', 
                    get_string('blockXpAddToCourseTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpAddStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep4', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' 
                . get_string('blockXpAccessSettingsTutorial', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpAccessSettingsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'bloco-level-up.png', 
                    get_string('blockXpAccessSettingsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep4', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpInformationTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpInformationTabDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-informacoes.png', 
                    get_string('blockXpInformationTab', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpInformationLevel', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationUsageExample', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationAdd', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationCustomizeLevelsInstructions', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpRankingTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpRankingDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-ranking.png', 
                    get_string('blockXpRankingTab', 'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpReportTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpReportDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-relatorio-editar-pontos.png', 
                    get_string('blockXpReportTab', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpReportResetCourseData', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportEditPoints', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportViewLogs', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportDeleteUser', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLogsTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLogsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-relatorio-logs.png', 
                    get_string('blockXpLogsTab', 'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLevelConfigTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLevelConfigDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-geral-1.png', 
                    get_string('blockXpLevelConfigTab', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-geral-2.png', 
                    get_string('blockXpLevelConfigTab', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpLevelNumberOfLevels', 'block_gamificationhelper') . '</li>
                <li><span>' . get_string('blockXpLevelQuickEditPoints', 'block_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpLevelQuickEditEqual', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditIncreasing', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditSnowball', 'block_gamificationhelper') . '</li>
                    </ol>
                    ' . self::getImageHTML(
                            $blockXpPath, 
                            'aba-niveis-edicao-rapida-pontos.png', 
                            get_string('blockXpLevelQuickEditPoints', 'block_gamificationhelper')
                        ) . '
                </li>
                <li>' . get_string('blockXpLevelStart', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelLength', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelName', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelDescriptionField', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPopupMessage', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelBadgeAward', 'block_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-configuracao.png', 
                    get_string('blockXpLevelQuickEditPoints', 'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLevelAppearanceTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLevelAppearanceDescription', 'block_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpLevelBadge', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPointsSymbol', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPreview', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelResetAppearance', 'block_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-aparencia.png', 
                    get_string('blockXpLevelAppearanceTab', 'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpPointsTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpPointsDescription', 'block_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpPointsEventRulesDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsCompletionRulesDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsGradeRulesDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsDropsDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsImportDescription', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsResetRulesDescription', 'block_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-pontos-1.png', 
                    get_string('blockXpPointsTab', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-pontos-2.png', 
                    get_string('blockXpPointsTab', 'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpSettingsTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpSettingsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-configuracoes-1.png', 
                    get_string('blockXpSettingsTab', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-configuracoes-2.png', 
                    get_string('blockXpSettingsTab', 'block_gamificationhelper')
                ) . '
            <ol>
                <li><span>' . get_string('blockXpGeneralSettings', 'block_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpEnableXpGain', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpEnableInfoPage', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpEnableLevelUpNotifications', 'block_gamificationhelper') . '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpRankingSettings', 'block_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpRankingSettingsEnable', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsAnonymity', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsParticipantLimit', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsDisplay', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsAdditionalColumns', 'block_gamificationhelper') . '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpFraudProtectionSettings', 'block_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpFraudProtectionSettingsEnable', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpFraudProtectionSettingsMaxActionsInterval', 'block_gamificationhelper') . '</li>
                        <li>' . get_string(
                                    'blockXpFraudProtectionSettingsTimeRequiredBetweenIdenticalActions', 
                                    'block_gamificationhelper'
                                ) . 
                        '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpBlockAppearanceSettings', 'block_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpBlockAppearanceSettingsTitle', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsIntroduction', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsShowRankingSample', 'block_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsShowRecentRewards', 'block_gamificationhelper') . '</li>
                    </ol>
                </li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpPlusTab', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpPlusDescription', 'block_gamificationhelper') . '</p>
            <h5 class="section-title">' . get_string('blockXpRemoveTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpRemoveDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'como-remover-level-up.png', 
                    get_string('blockXpRemoveTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpRemoveStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep3', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockXpPermissionsTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpPermissionsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'configurar-permissoes-level-up.png', 
                    get_string('blockXpPermissionsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpPermissionsStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep3', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockXpCheckPermissionsTutorial', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpCheckPermissionsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'check-permissoes-level-up.png', 
                    get_string('blockXpCheckPermissionsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpCheckPermissionsStep0', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep4', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'block_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
            ' . get_string('defaultSupportLink1', 'block_gamificationhelper') . '
            </a></li>
            <li><a href="https://docs.levelup.plus/xp/docs" target="_blank">
                ' . get_string('blockXpSupportLink1', 'block_gamificationhelper') . '
            </a></li>
            <li><a href="https://www.youtube.com/watch?v=dPbIbCDwg3k&ab_channel=LINCDigital" target="_blank">
                ' . get_string('blockXpSupportLink2', 'block_gamificationhelper') . '
            </a></li>
            </ul>
            ';
        } else {
            $html .= (is_siteadmin() && !$hasInstalled) ? '<h5 class="section-title">' 
                . get_string('trailFormatDefaultSettings', 'block_gamificationhelper') . 
            '</h5>
            <p class="section-desc">' . get_string('trailFormatDefaultSettingsDescription', 'block_gamificationhelper') . '</p>' .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-1.png', 
                get_string('trailFormatDefaultSettings', 'block_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-2.png', 
                get_string('trailFormatDefaultSettings', 'block_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-3.png', 
                get_string('trailFormatDefaultSettings', 'block_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-4.png', 
                get_string('trailFormatDefaultSettings', 'block_gamificationhelper')
            ) : '';

            $html .= '<h5 class="section-title">' 
                . get_string('trailFormatAccessSettingsTutorial', 'block_gamificationhelper') . 
            '</h5>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'como-configurar-trail-format.png', 
                    get_string('trailFormatAccessSettingsTutorial', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('trailFormatAccessStep1', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep2', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep3', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep4', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep5', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title ' . $admin . '">' 
                . get_string('trailFormatSettingsTitle', 'block_gamificationhelper') . 
            '</h5>
            <p>' . get_string('trailFormatSettingsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-1.png', 
                    get_string('trailFormatSettingsTitle', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-2.png', 
                    get_string('trailFormatSettingsTitle', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-3.png', 
                    get_string('trailFormatSettingsTitle', 'block_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-4.png', 
                    get_string('trailFormatSettingsTitle', 'block_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('trailFormatSettingsNumberOfSections', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionHidden', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCourseLayout', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsHideSideNav', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsShowLockIcon', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsTrailStyle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCheckStyle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageAlignment', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageWidth', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageProportion', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsImageMethodResize', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBorderColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBorderWidth', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsEnableBorderRadius', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBackgroundColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCurrentSectionColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageTextColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSelectedContainerColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleHide', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleLength', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitlePosition', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitlePositionInside', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleHeight', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleOpacity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleFontSize', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleAlignment', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleTextColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleBgColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsShowSummary', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryPosition', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryMaxLength', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryTextColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryBackgroundColor', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryOpacity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsNewActivityNotification', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsAdjustPopupToWindow', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsUnavailableGrayOutside', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSection0OnOwnPage', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('trailResetOptions', 'block_gamificationhelper') . '</h5>
            <p>' . get_string('trailResetOptionsDescription', 'block_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'opcoes-redefinicao-trilha.png', 
                    get_string('trailResetOptions', 
                    'block_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('trailResetTitle', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('trailResetDescription', 'block_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('trailResetAlignImageContainer', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageContainerSize', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetResizeImageMethod', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageContainerStyle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetSectionTitle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetNewActivity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetPopupSectionWindow', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageNavigation', 'block_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('trailResetAllTitle', 'block_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('trailResetAllDescription', 'block_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('trailResetAllAlignImageContainer', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageContainerSize', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllResizeImageMethod', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageContainerStyle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllSectionTitle', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllNewActivity', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllPopupSectionWindow', 'block_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageNavigation', 'block_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'block_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
            ' . get_string('defaultSupportLink1', 'block_gamificationhelper') . '
            </a></li>
            <li><a href="https://www.youtube.com/watch?v=shge05pvyxc&t=981s&ab_channel=DesignInstrucional" target="_blank">
                ' . get_string('blockGameSupportLink3', 'block_gamificationhelper') . '
            </a></li>
            </ul>';
        }

        $html .= '';

        return $html;
    }
}
