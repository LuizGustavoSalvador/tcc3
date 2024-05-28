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
                    <button type="button" class="btn-close" onclick="closeModal(\'' . $slug . '\')"><i class="fa fa-times"></i></button>
                </div>
                <div class="content install-plugin-content">' . $steps . '</div>
                <div class="modal-footer">';

        $html .= !is_siteadmin() ? '<a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">' . get_string('btnInstall', 'local_gamificationhelper') . '</a>' : '';

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
            $html = '<h5 class="section-title title-install">' . get_string('defaultInstallInstallIntro', 'local_gamificationhelper') . '</h5>
            <ol>
                <li>' . get_string('defaultInstallInstallStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallInstallStep2', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'area-upload-plugin.jpeg', 'Imagem área de arquivos para por o plugin') . '
                <li>' . get_string('defaultInstallInstallStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallValidation', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'validacao-plugin.jpeg', 'Imagem validação do plugin') . '
                <li>' . get_string('defaultInstallMoodleVersionInfo', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallMoodleCheck', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'informacao-versao-moodle.png', 'Imagem atualização moodle') . '
                <li>' . get_string('defaultInstallStatusOK', 'local_gamificationhelper') . '</li>
                <li>' . get_string('defaultInstallUpdateVersion', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'atualizando-plugin.png', 'Imagem atualização plugin') . '
            </ol>';
        } else {
            $html = '<h5 class="section-title title-install">' . get_string('defaultInstallPluginRequestTutorial', 'local_gamificationhelper') . '</h5>
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
            self::getImageHTML($blockGamePath, 'configuracao-block-game-parte-1.png', 'Tela de configuração padrão do plugin') .
            self::getImageHTML($blockGamePath, 'configuracao-block-game-parte-2.png', 'Tela de configuração padrão do plugin') .
            self::getImageHTML($blockGamePath, 'configuracao-block-game-parte-3.png', 'Tela de configuração padrão do plugin') . '
            
            <span class="section-subtitle"><strong>' . get_string('defaultInstallConfigFields', 'local_gamificationhelper') . '</strong></span>
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

            $html .= '<span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameAddToCourseTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameAddToCourseDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'adicionar-block-game-curso.png', 'Como adicionar o Block Game ao curso') . '
            <ol>
                <li>' . get_string('blockGameAddStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameAddStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameSettingsTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-geral-1.png', 'Configurações gerais do bloco') . 
                self::getImageHTML($blockGamePath, 'configuracoes-bloco-geral-2.png', 'Configurações gerais do bloco') . 
                self::getImageHTML($blockGamePath, 'configuracoes-bloco-geral-3.png', 'Configurações gerais do bloco') . '
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
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameSettingsCompletionPoints', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameSettingsCompletionPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-pontuacao-secao.png', 'Configurações de pontuação por seção') . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForCompletion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsCompletionConditions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameSettingsActivityCompletionPoints', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameSettingsActivityCompletionPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-pontuacao-atividade.png', 'Configurações de pontuação por atividade') . '
            <ol>
                <li>' . get_string('blockGameSettingsPointsForActivityCompletion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsActivityCompletionConditions', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsGamePointsTab', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameSettingsWhereToShow', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameSettingsWhereToShowDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-onde-exibir.png', 'Configurações onde exibir') . '
            <ol>
                <li>' . get_string('blockGameSettingsBlockLocation', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsShowOnPageType', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultRegion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsDefaultWeight', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameSettingsOnThisPage', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameSettingsOnThisPageDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-nesta-pagina.png', 'Configurações nesta página') . '
            <ol>
                <li>' . get_string('blockGameSettingsVisible', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsRegion', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameSettingsWeight', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockGameResetPointsTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockGameResetPointsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockGamePath, 'redefinir-pontos-1.png', 'Como redefinir pontos') .
                self::getImageHTML($blockGamePath, 'redefinir-pontos-2.png', 'Como redefinir pontos') . '
            <ol>
                <li>' . get_string('blockGameResetPointsStep0', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameResetPointsStep3', 'local_gamificationhelper') . '</li>
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
            $html .= is_siteadmin() ? '<h5 class="section-title">' . get_string('blockXpDefaultSettings', 'local_gamificationhelper') . '</h5>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpDefaultSettingsDescription', 'local_gamificationhelper') . '</strong></span>
            ' . self::getImageHTML($blockXpPath, 'configuracao-padrao-level-up-1.png', 'Tela de configuração padrão do plugin') .
                self::getImageHTML($blockXpPath, 'configuracao-padrao-level-up-2.png', 'Tela de configuração padrão do plugin') .
                self::getImageHTML($blockXpPath, 'configuracao-padrao-level-up-3.png', 'Tela de configuração padrão do plugin') . '
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
            $html .= '<span class="section-subtitle sub-with-description ' . $admin . '"><strong>' . get_string('blockXpAddToCourseTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpAddToCourseDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'adicionar-level-up-curso.png', 'Como adicionar o level up ao curso') . '
            <ol>
                <li>' . get_string('blockXpAddStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpAccessSettingsTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpAccessSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'bloco-level-up.png', 'Bloco geral level up') . '
            <ol>
                <li>' . get_string('blockXpStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpInformationTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpInformationTabDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-informacoes.png', 'Informações gerais do curso com o Level up') . '
            <ol>
                <li>' . get_string('blockXpInformationLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationUsageExample', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationAdd', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationCustomizeLevelsInstructions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpRankingTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpRankingDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-ranking.png', 'Ranking dos participantes') . '
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpReportTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpReportDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-relatorio-editar-pontos.png', 'Como editar pontos manualmente') . '
            <ol>
                <li>' . get_string('blockXpReportResetCourseData', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportEditPoints', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportViewLogs', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportDeleteUser', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpLogsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpLogsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-relatorio-logs.png', 'Lista de logs dos participantes') . '
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpLevelConfigTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpLevelConfigDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-niveis-geral-1.png', 'Aba níveis') .
                self::getImageHTML($blockXpPath, 'aba-niveis-geral-2.png', 'Aba níveis') . '
            <ol>
                <li>' . get_string('blockXpLevelNumberOfLevels', 'local_gamificationhelper') . '</li>
                <li><span>' . get_string('blockXpLevelQuickEditPoints', 'local_gamificationhelper') . '</span>
                    <ol class="sub-list">
                        <li>' . get_string('blockXpLevelQuickEditEqual', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditIncreasing', 'local_gamificationhelper') . '</li>
                        <li>' . get_string('blockXpLevelQuickEditSnowball', 'local_gamificationhelper') . '</li>
                    </ol>
                    ' . self::getImageHTML($blockXpPath, 'aba-niveis-edicao-rapida-pontos.png', 'Edição rápida de pontos') . '
                </li>
                <li>' . get_string('blockXpLevelStart', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelLength', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelName', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelDescriptionField', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPopupMessage', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelBadgeAward', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML($blockXpPath, 'aba-niveis-configuracao.png', 'Configurações de nível') . '
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpLevelAppearanceTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpLevelAppearanceDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpLevelBadge', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPointsSymbol', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelPreview', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpLevelResetAppearance', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML($blockXpPath, 'aba-niveis-aparencia.png', 'Configurações de aparência do nível') . '
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpPointsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpPointsDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpPointsEventRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsCompletionRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsGradeRulesDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsDropsDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsImportDescription', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpPointsResetRulesDescription', 'local_gamificationhelper') . '</li>
            </ol>
            ' . self::getImageHTML($blockXpPath, 'aba-pontos-1.png', 'Configurações de pontos de regras') .
                self::getImageHTML($blockXpPath, 'aba-pontos-2.png', 'Configurações de pontos de regras') . '
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpSettingsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-configuracoes-1.png', 'Configurações de do plugin') .
                self::getImageHTML($blockXpPath, 'aba-configuracoes-2.png', 'Configurações de do plugin') . '
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
                        <li>' . get_string('blockXpFraudProtectionSettingsTimeRequiredBetweenIdenticalActions', 'local_gamificationhelper') . '</li>
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
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpPlusTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpPlusDescription', 'local_gamificationhelper') . '</p>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
            ' . get_string('defaultSupportLink1', 'local_gamificationhelper') . '
            </a></li>
            <li><a href="https://docs.levelup.plus/xp/docs" target="_blank">
                ' . get_string('blockXpSupportLink1', 'local_gamificationhelper') . '
            </a></li>
            </ul>
            ';
        }

        $html .= '';

        return $html;
    }
}
