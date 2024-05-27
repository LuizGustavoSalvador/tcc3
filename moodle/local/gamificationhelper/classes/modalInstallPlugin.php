<?php

namespace gamificationhelper\classes;

require_once __DIR__ . '/recommendationPlugin.php';


class ModalInstallPlugin
{
    public static function getModalHTML(string $slug)
    {
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
                <div class="modal-footer">';

        $html .= is_siteadmin() ? '<a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">' . get_string('btnInstall', 'local_gamificationhelper') . '</a>' : '';
        
        $html .= '<button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $slug . '\')">Fechar</button>
                </div></div></div>';

        return $html;
    }

    private static function getImageHTML(string $path, string $imageName, string $altText): string
    {
        $imageurl = new \moodle_url('/local/gamificationhelper/images/' . $path . '/' . $imageName);

        return '<img src="' . $imageurl . '" alt="' . $altText . '" />';
    }

    private static function getPluginStepsContent(string $slug): string
    {
        $installPath = 'install';
        $blockGamePath = 'blockgame';
        $blockXpPath = 'blockxp';
        $trailFormatPath = 'trailformat';

        $admin = !is_siteadmin() ? 'admin' : '';

        $html = is_siteadmin() ? '<h5 class="section-title title-install">' . get_string('defaultInstallInstallIntro', 'local_gamificationhelper') . '</h5>
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
        </ol>' : '';

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

            $html .= '<h5 class="section-title ' . $admin . '">' . get_string('defaultInstallCourseConfig', 'local_gamificationhelper') . '</h5>
            <ol>
                <li>' . get_string('blockGameAccessCourses', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockGameEditMode', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'modo-edicao.png', 'Modo de edição') . '
                <li>' . get_string('blockGameAddBlock', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($installPath, 'gaveta-blocos.png', 'Gaveta de blocos') . '
                <li>' . get_string('blockGameConfigureBlock', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($blockGamePath, 'card-plugin.png', 'Card do plugin') . '
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
                    ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-parte-1.png', 'Configuração do bloco') . '
                    ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-parte-2.png', 'Configuração do bloco') . '
                    ' . self::getImageHTML($blockGamePath, 'configuracoes-bloco-parte-3.png', 'Configuração do bloco') . '
                </li>
                <li>' . get_string('blockGameSectionCompletionPoints', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($blockGamePath, 'configurar-pontuacao-atividade.png', 'Configuração de pontuação por atividade') . '
                <li>' . get_string('blockGameActivityCompletionPoints', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($blockGamePath, 'configurar-pontuacao-topico-atividade-pontos.png', 'Configuração de pontuação por finalizar a atividade') . '
                <li>' . get_string('blockGameBlockDisplaySettings', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($blockGamePath, 'configurar-exibicao-bloco.png', 'Configuração exibição do bloco') . '
                <li>' . get_string('blockGamePageSettings', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML($blockGamePath, 'configurar-nesta-pagina.png', 'Define onde o bloco ficará') . '
                <li>' . get_string('blockGameSaveBlockConfig', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
                <li><a href="https://docs.moodle.org/404/en/Installing_plugins" target="_blank">
                    ' . get_string('blockGameSupportLink1', 'local_gamificationhelper') . '
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
            ' . self::getImageHTML($blockGamePath, 'configuracao-padrao-level-up-1.png', 'Tela de configuração padrão do plugin') .
                self::getImageHTML($blockGamePath, 'configuracao-padrao-level-up-2.png', 'Tela de configuração padrão do plugin') .
                self::getImageHTML($blockGamePath, 'configuracao-padrao-level-up-3.png', 'Tela de configuração padrão do plugin') . '
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
            ' . self::getImageHTML($blockXpPath, 'adicionar-level-up-curso.png', 'Como adicionar o level up ao curso') .'
            <ol>
                <li>' . get_string('blockXpAddStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpAddStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpAccessSettingsTutorial', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpAccessSettingsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'bloco-level-up.png', 'Bloco geral level up') .'
            <ol>
                <li>' . get_string('blockXpStep1', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep2', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep3', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpStep4', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpInformationTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpInformationTabDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-informacoes.png', 'Informações gerais do curso com o Level up') .'
            <ol>
                <li>' . get_string('blockXpInformationLevel', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationUsageExample', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationAdd', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpInformationCustomizeLevelsInstructions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpRankingTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpRankingDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-ranking.png', 'Ranking dos participantes') .'
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpReportTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpReportDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-relatorio-editar-pontos.png', 'Como editar pontos manualmente') .'
            <ol>
                <li>' . get_string('blockXpReportResetCourseData', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportEditPoints', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportViewLogs', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpReportDeleteUser', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpLogsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpLogsDescription', 'local_gamificationhelper') . '</p>
            ' . self::getImageHTML($blockXpPath, 'aba-relatorio-logs.png', 'Lista de logs dos participantes') .'
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





            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpBlockConfigTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpBlockConfigDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpBlockPosition', 'local_gamificationhelper') . '</li>
                <li>' . get_string('blockXpBlockVisibility', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpPermissionsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpPermissionsDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpEditPermissions', 'local_gamificationhelper') . '</li>
            </ol>
            <span class="section-subtitle sub-with-description"><strong>' . get_string('blockXpCheckPermissionsTab', 'local_gamificationhelper') . '</strong></span>
            <p>' . get_string('blockXpCheckPermissionsDescription', 'local_gamificationhelper') . '</p>
            <ol>
                <li>' . get_string('blockXpParticipantsPermissions', 'local_gamificationhelper') . '</li>
            </ol>
            <h5 class="section-title">' . get_string('defaultInstallSupportLinks', 'local_gamificationhelper') . '</h5>
            <ul class="support-link-list">
            </ul>
            ';
        }

        $html .= '';

        return $html;
    }
}
