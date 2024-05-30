<?php

namespace gamificationhelper\classes;

require_once __DIR__ . '/recommendationPlugin.php';


class ModalInstallPlugin
{
    public static function getModalHTML(string $slug, bool $hasInstalled)
    {
        $pluginData = \reset(recommendationPlugin::getPlugins('', '', $slug));
        $modalTitle = get_string('modalTitle', 'local_gamificationhelper', $pluginData['name']);
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

        $html .= !is_siteadmin() ? 
            '<a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">' 
                . get_string('btnInstall', 'local_gamificationhelper') . 
            '</a>' : '';

        $html .= '<button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $slug . '\')">Fechar</button>
                </div></div></div>';

        return $html;
    }

    private static function getImageHTML(string $path, string $imageName, string $altText): string
    {
        $imageurl = new \moodle_url('/local/gamificationhelper/images/' . $path . '/' . $imageName);

        return '<img src="' . $imageurl . '" alt="' . $altText . '" />';
    }

    private static function getPluginStepsContent(string $slug, bool $hasInstalled, string $pluginName): string
    {
        $installPath = 'install';
        $blockGamePath = 'blockgame';
        $blockXpPath = 'blockxp';
        $trailFormatPath = 'trailformat';

        $admin = !is_siteadmin() ? 'admin' : '';

        if (is_siteadmin()) {
            $html = '<h5 class="section-title title-install">' 
                . get_string('defaultInstallInstallIntro', 'local_gamificationhelper') . 
            '</h5>
            <ol>
                <li>' . get_string('defaultInstallInstallStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallInstallStep2', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML(
                        $installPath, 
                        'area-upload-plugin.jpeg', 
                        get_string('defaultInstallInstallIntro', 'local_gamificationhelper')
                    ) . '
                <li>' . get_string('defaultInstallInstallStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallValidation', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML(
                        $installPath, 
                        'validacao-plugin.jpeg', 
                        get_string('defaultInstallInstallIntro', 'local_gamificationhelper')
                    ) . '
                <li>' . get_string('defaultInstallMoodleVersionInfo', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallMoodleCheck', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML(
                        $installPath, 
                        'informacao-versao-moodle.png', 
                        get_string('defaultInstallInstallIntro', 'local_gamificationhelper')
                    ) . '
                <li>' . get_string('defaultInstallStatusOK', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallUpdateVersion', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML(
                        $installPath, 
                        'atualizando-plugin.png', 
                        get_string('defaultInstallInstallIntro', 'local_gamificationhelper')
                    ) . '
            </ol>';
        } else {
            $html = '<h5 class="section-title title-install">' 
                . get_string('defaultInstallPluginRequestTutorial', 'local_gamificationhelper') . 
            '</h5>
            <p class="section-desc">' . get_string('defaultInstallPluginRequestDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('defaultInstallSendEmail', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallAttachZipDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallPluginNameDescription', 'local_gamificationhelper', $pluginName) . '</li>
            </ol>';
        }

        if ($slug === 'blockGame') {
            $html .= is_siteadmin() ?
            '<h5 class="section-title">' . get_string('blockGameDefaultConfig', 'local_gamificationhelper') . '</h5>
            <p class="section-desc">' . get_string('blockGameDefaultConfigNote', 'local_gamificationhelper') . '</p>' .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-1.png', 
                get_string('blockGameDefaultConfig', 'local_gamificationhelper')
            ) .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-2.png', 
                get_string('blockGameDefaultConfig', 'local_gamificationhelper')
            ) .
            self::getImageHTML(
                $blockGamePath, 
                'configuracao-block-game-parte-3.png', 
                get_string('blockGameDefaultConfig', 'local_gamificationhelper')
            ) . '
            <h5 class="section-title">' . get_string('defaultInstallConfigFields', 'local_gamificationhelper') . '</h5>
            <ol>
                <li>' . get_string('blockGameDefaultUseAvatar', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultReplaceAvatars', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultAllowAvatarChange', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowPlayerInfo', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultPointForActivities', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultDailyBonus', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultBonusForBadge', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowRanking', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultPreserveIdentity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowScore', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultShowLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultCustomLevelImages', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultNumberOfLevels', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameDefaultSaveChanges', 'local_gamificationhelper') . '</li>
            </ol>' : '';

            $html .= '<h5 class="section-title">' 
                . get_string('blockGameAddToCourseTutorial', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockGameAddToCourseDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'adicionar-block-game-curso.png', 
                    get_string('blockGameAddToCourseTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameAddStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' 
                . get_string('blockGameSettingsTutorial', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockGameSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-1.png', 
                    get_string('blockGameSettingsTutorial', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-2.png', 
                    get_string('blockGameSettingsTutorial', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-geral-3.png', 
                    get_string('blockGameSettingsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsEditTitle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowCourseName', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowPlayerInfo', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsScoreActivityGrades', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDailyBonus', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowGroupRanking', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsGroupPointsCalculation', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowRanking', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsRankingLimit', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsPreserveIdentity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowScore', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsNumberOfLevels', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsPointsForLevel', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' 
                . get_string('blockGameSettingsCompletionPoints', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsCompletionPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-pontuacao-secao.png', 
                    get_string('blockGameSettingsCompletionPoints', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForCompletion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsCompletionConditions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' 
                . get_string('blockGameSettingsActivityCompletionPoints', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsActivityCompletionPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-pontuacao-atividade.png', 
                    get_string('blockGameSettingsActivityCompletionPoints', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForActivityCompletion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsActivityCompletionConditions', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsGamePointsTab', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockGameSettingsWhereToShow', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsWhereToShowDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-onde-exibir.png', 
                    get_string('blockGameSettingsWhereToShow', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsBlockLocation', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowOnPageType', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultRegion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultWeight', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockGameSettingsOnThisPage', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockGameSettingsOnThisPageDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configuracoes-bloco-nesta-pagina.png', 
                    get_string('blockGameSettingsOnThisPage', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameSettingsVisible', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsRegion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsWeight', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameResetPointsTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameResetPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'redefinir-pontos-1.png', 
                    get_string('blockGameResetPointsTutorial', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockGamePath, 
                    'redefinir-pontos-2.png', 
                    get_string('blockGameResetPointsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameResetPointsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep3', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameRemoveTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameRemoveDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'como-remover-block-game.png', 
                    get_string('blockGameRemoveTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameRemoveStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameRemoveStep3', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGamePermissionsTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockGamePermissionsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'configurar-permissoes-block-game.png', 
                    get_string('blockGamePermissionsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGamePermissionsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGamePermissionsStep3', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockGameCheckPermissionsTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockGameCheckPermissionsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockGamePath, 
                    'verificar-permissoes-block-game.png', 
                    get_string('blockGameCheckPermissionsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockGameCheckPermissionsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameCheckPermissionsStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
                <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
                    ' . get_string('defaultSupportLink1', 'local_gamificationhelper') . '
                </a></li>
                <li><a href="https://www.youtube.com/watch?v=YPSUYfORn0g&ab_channel=prof_jota" target="_blank">
                    ' . get_string('blockGameSupportLink2', 'local_gamificationhelper') . '
                </a></li>
                <li><a href="https://www.youtube.com/watch?v=shge05pvyxc&t=981s&ab_channel=DesignInstrucional" target="_blank">
                    ' . get_string('blockGameSupportLink3', 'local_gamificationhelper') . '
                </a></li>
            </ul>
            ';
        } elseif ($slug === 'blockXp') {
            $html .= is_siteadmin() ? '<h5 class="section-title">' 
                . get_string('blockXpDefaultSettings', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpDefaultSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-1.png', 
                    get_string('blockXpDefaultSettings', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-2.png', 
                    get_string('blockXpDefaultSettings', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'configuracao-padrao-level-up-3.png', 
                    get_string('blockXpDefaultSettings', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpDefaultSettingsPointsContext', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsNavBarDisplay', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsAdminsCanEarnXp', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsKeepLogs', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsUsageReport', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableInfos', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableLevelUpNotif', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableLeader', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsIdentityMode', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsNeighbours', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsRankMode', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsLadderCols', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsEnableCheatGuard', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsMaxActionsPerTime', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsTimeForMaxActions', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsTimeBetweenSameActions', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockTitle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsRankingSnapshot', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpDefaultSettingsBlockRecentActivity', 'local_gamificationhelper') . '</li>
            </ol>' : '';
            $html .= '<h5 class="section-title ' . $admin . '">' 
                . get_string('blockXpAddToCourseTutorial', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpAddToCourseDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'adicionar-level-up-curso.png', 
                    get_string('blockXpAddToCourseTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpAddStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' 
                . get_string('blockXpAccessSettingsTutorial', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('blockXpAccessSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'bloco-level-up.png', 
                    get_string('blockXpAccessSettingsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpInformationTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpInformationTabDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-informacoes.png', 
                    get_string('blockXpInformationTab', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpInformationLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationUsageExample', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationAdd', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationCustomizeLevelsInstructions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpRankingTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpRankingDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-ranking.png', 
                    get_string('blockXpRankingTab', 'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpReportTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpReportDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-relatorio-editar-pontos.png', 
                    get_string('blockXpReportTab', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpReportResetCourseData', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportEditPoints', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportViewLogs', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportDeleteUser', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLogsTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLogsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-relatorio-logs.png', 
                    get_string('blockXpLogsTab', 'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLevelConfigTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLevelConfigDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-geral-1.png', 
                    get_string('blockXpLevelConfigTab', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-geral-2.png', 
                    get_string('blockXpLevelConfigTab', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpLevelNumberOfLevels', 'local_gamificationhelper') . '</li>
                <li><span>' . get_string('blockXpLevelQuickEditPoints', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpLevelQuickEditEqual', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditIncreasing', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditSnowball', 'local_gamificationhelper') . '</li>
                    </ol>
                    ' . self::getImageHTML(
                            $blockXpPath, 
                            'aba-niveis-edicao-rapida-pontos.png', 
                            get_string('blockXpLevelQuickEditPoints', 'local_gamificationhelper')
                        ) . '
                </li>
                <li>' . get_string('blockXpLevelStart', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelLength', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelName', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelDescriptionField', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPopupMessage', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelBadgeAward', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-configuracao.png', 
                    get_string('blockXpLevelQuickEditPoints', 'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpLevelAppearanceTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpLevelAppearanceDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpLevelBadge', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPointsSymbol', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPreview', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelResetAppearance', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-niveis-aparencia.png', 
                    get_string('blockXpLevelAppearanceTab', 'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpPointsTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpPointsDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpPointsEventRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsCompletionRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsGradeRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsDropsDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsImportDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsResetRulesDescription', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-pontos-1.png', 
                    get_string('blockXpPointsTab', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-pontos-2.png', 
                    get_string('blockXpPointsTab', 'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpSettingsTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'aba-configuracoes-1.png', 
                    get_string('blockXpSettingsTab', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $blockXpPath, 
                    'aba-configuracoes-2.png', 
                    get_string('blockXpSettingsTab', 'local_gamificationhelper')
                ) . '
            <ol>
                <li><span>' . get_string('blockXpGeneralSettings', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpEnableXpGain', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpEnableInfoPage', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpEnableLevelUpNotifications', 'local_gamificationhelper') . '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpRankingSettings', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpRankingSettingsEnable', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsAnonymity', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsParticipantLimit', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsDisplay', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpRankingSettingsAdditionalColumns', 'local_gamificationhelper') . '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpFraudProtectionSettings', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpFraudProtectionSettingsEnable', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpFraudProtectionSettingsMaxActionsInterval', 'local_gamificationhelper') . '</li>
                        <li>' . get_string(
                                    'blockXpFraudProtectionSettingsTimeRequiredBetweenIdenticalActions', 
                                    'local_gamificationhelper'
                                ) . 
                        '</li>
                    </ol>
                </li>
                <li><span>' . get_string('blockXpBlockAppearanceSettings', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpBlockAppearanceSettingsTitle', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsIntroduction', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsShowRankingSample', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpBlockAppearanceSettingsShowRecentRewards', 'local_gamificationhelper') . '</li>
                    </ol>
                </li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('blockXpPlusTab', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('blockXpPlusDescription', 'local_gamificationhelper') . '</p>
            <h5 class="section-title">' . get_string('blockXpRemoveTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpRemoveDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'como-remover-level-up.png', 
                    get_string('blockXpRemoveTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpRemoveStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpRemoveStep3', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockXpPermissionsTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpPermissionsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'configurar-permissoes-level-up.png', 
                    get_string('blockXpPermissionsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpPermissionsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPermissionsStep3', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('blockXpCheckPermissionsTutorial', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('blockXpCheckPermissionsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $blockXpPath, 
                    'check-permissoes-level-up.png', 
                    get_string('blockXpCheckPermissionsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('blockXpCheckPermissionsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpCheckPermissionsStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
            ' . get_string('defaultSupportLink1', 'local_gamificationhelper') . '
            </a></li>
            <li><a href="https://docs.levelup.plus/xp/docs" target="_blank">
                ' . get_string('blockXpSupportLink1', 'local_gamificationhelper') . '
            </a></li>
            <li><a href="https://www.youtube.com/watch?v=dPbIbCDwg3k&ab_channel=LINCDigital" target="_blank">
                ' . get_string('blockXpSupportLink2', 'local_gamificationhelper') . '
            </a></li>
            </ul>
            ';
        } else {
            $html .= is_siteadmin() ? '<h5 class="section-title">' 
                . get_string('trailFormatDefaultSettings', 'local_gamificationhelper') . 
            '</h5>
            <p class="section-desc">' . get_string('trailFormatDefaultSettingsDescription', 'local_gamificationhelper') . '</p>' .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-1.png', 
                get_string('trailFormatDefaultSettings', 'local_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-2.png', 
                get_string('trailFormatDefaultSettings', 'local_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-3.png', 
                get_string('trailFormatDefaultSettings', 'local_gamificationhelper')
            ) .
            self::getImageHTML(
                $trailFormatPath, 
                'configuracoes-gerais-trail-format-4.png', 
                get_string('trailFormatDefaultSettings', 'local_gamificationhelper')
            ) : '';

            $html .= '<h5 class="section-title">' 
                . get_string('trailFormatAccessSettingsTutorial', 'local_gamificationhelper') . 
            '</h5>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'como-configurar-trail-format.png', 
                    get_string('trailFormatAccessSettingsTutorial', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('trailFormatAccessStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep4', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatAccessStep5', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title ' . $admin . '">' 
                . get_string('trailFormatSettingsTitle', 'local_gamificationhelper') . 
            '</h5>
            <p>' . get_string('trailFormatSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-1.png', 
                    get_string('trailFormatSettingsTitle', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-2.png', 
                    get_string('trailFormatSettingsTitle', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-3.png', 
                    get_string('trailFormatSettingsTitle', 'local_gamificationhelper')
                ) .
                self::getImageHTML(
                    $trailFormatPath, 
                    'configuracoes-trail-format-4.png', 
                    get_string('trailFormatSettingsTitle', 'local_gamificationhelper')
                ) . '
            <ol>
                <li>' . get_string('trailFormatSettingsNumberOfSections', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionHidden', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCourseLayout', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsHideSideNav', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsShowLockIcon', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsTrailStyle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCheckStyle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageAlignment', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageWidth', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageProportion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsImageMethodResize', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBorderColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBorderWidth', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsEnableBorderRadius', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsBackgroundColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsCurrentSectionColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsContainerImageTextColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSelectedContainerColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleHide', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleLength', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitlePosition', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitlePositionInside', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleHeight', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleOpacity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleFontSize', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleAlignment', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleTextColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleBgColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsShowSummary', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryPosition', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryMaxLength', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryTextColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryBackgroundColor', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSectionTitleSummaryOpacity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsNewActivityNotification', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsAdjustPopupToWindow', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsUnavailableGrayOutside', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailFormatSettingsSection0OnOwnPage', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('trailResetOptions', 'local_gamificationhelper') . '</h5>
            <p>' . get_string('trailResetOptionsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML(
                    $trailFormatPath, 
                    'opcoes-redefinicao-trilha.png', 
                    get_string('trailResetOptions', 
                    'local_gamificationhelper')
                ) . '
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('trailResetTitle', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('trailResetDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('trailResetAlignImageContainer', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageContainerSize', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetResizeImageMethod', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageContainerStyle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetSectionTitle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetNewActivity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetPopupSectionWindow', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetImageNavigation', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' 
                . get_string('trailResetAllTitle', 'local_gamificationhelper') . 
            '</strong></span>
            <p>' . get_string('trailResetAllDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('trailResetAllAlignImageContainer', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageContainerSize', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllResizeImageMethod', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageContainerStyle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllSectionTitle', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllNewActivity', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllPopupSectionWindow', 'local_gamificationhelper') . '</li>
                <li>' . get_string('trailResetAllImageNavigation', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
            ' . get_string('defaultSupportLink1', 'local_gamificationhelper') . '
            </a></li>
            <li><a href="https://www.youtube.com/watch?v=shge05pvyxc&t=981s&ab_channel=DesignInstrucional" target="_blank">
                ' . get_string('blockGameSupportLink3', 'local_gamificationhelper') . '
            </a></li>
            </ul>';
        }

        $html .= '';

        return $html;
    }
}
