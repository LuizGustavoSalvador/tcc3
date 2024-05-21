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
                <div class="modal-footer">
                    <a href="http://localhost:3333/admin/tool/installaddon/index.php" class="btn btn-primary" target="_blank">' . get_string('btnInstall', 'local_gamificationhelper') . '</a>
                    <button type="button" class="btn btn-secondary" onclick="closeModal(\'' . $slug . '\')">Fechar</button>
                </div></div></div>';

        return $html;
    }

    private static function getImageHTML(string $imageName, string $altText): string
    {
        $imageurl = new \moodle_url('/local/gamificationhelper/images/' . $imageName);

        return '<img src="' . $imageurl . '" alt="' . $altText . '" />';
    }

    private static function getPluginStepsContent(string $slug): string
    {
        $html = '<h5 class="section-title title-install">' . get_string('defaultInstallInstallIntro', 'local_gamificationhelper') . '</h5>
        <ol>
            <li>' . get_string('defaultInstallInstallStep1', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallInstallStep2', 'local_gamificationhelper') . '</li>
            ' . self::getImageHTML('area-upload-plugin.jpeg', 'Imagem área de arquivos para por o plugin') . '
            <li>' . get_string('defaultInstallInstallStep3', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallValidation', 'local_gamificationhelper') . '</li>
            ' . self::getImageHTML('validacao-plugin.jpeg', 'Imagem validação do plugin') . '
            <li>' . get_string('defaultInstallMoodleVersionInfo', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallMoodleCheck', 'local_gamificationhelper') . '</li>
            ' . self::getImageHTML('informacao-versao-moodle.png', 'Imagem atualização moodle') . '
            <li>' . get_string('defaultInstallStatusOK', 'local_gamificationhelper') . '</li>
            <li>' . get_string('defaultInstallUpdateVersion', 'local_gamificationhelper') . '</li>
            ' . self::getImageHTML('atualizando-plugin.png', 'Imagem atualização plugin') . '
        </ol>
        <h5 class="section-title">' . get_string('defaultInstallDefaultConfig', 'local_gamificationhelper') . '</h5>
        <p class="section-desc">' . get_string('defaultInstallConfigNote', 'local_gamificationhelper') . '</p>
        ' . self::getImageHTML('configuracao-block-game-parte-1.png', 'Tela de configuração padrão do plugin') . '
        ' . self::getImageHTML('configuracao-block-game-parte-2.png', 'Tela de configuração padrão do plugin') . '
        ' . self::getImageHTML('configuracao-block-game-parte-3.png', 'Tela de configuração padrão do plugin') . '
        <span class="section-subtitle"><strong>' . get_string('defaultInstallConfigFields', 'local_gamificationhelper') . '</strong></span>';

        if ($slug === 'blockGame') {
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
                ' . self::getImageHTML('modo-edicao.png', 'Modo de edição') . '
                <li>' . get_string('blockGameAddBlock', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('gaveta-blocos.png', 'Gaveta de blocos') . '
                <li>' . get_string('blockGameConfigureBlock', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('card-plugin.png', 'Card do plugin') . '
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
                    ' . self::getImageHTML('configuracoes-bloco-parte-1.png', 'Configuração do bloco') . '
                    ' . self::getImageHTML('configuracoes-bloco-parte-2.png', 'Configuração do bloco') . '
                    ' . self::getImageHTML('configuracoes-bloco-parte-3.png', 'Configuração do bloco') . '
                </li>
                <li>' . get_string('blockGameSectionCompletionPoints', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('configurar-pontuacao-atividade.png', 'Configuração de pontuação por atividade') . '
                <li>' . get_string('blockGameActivityCompletionPoints', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('configurar-pontuacao-topico-atividade-pontos.png', 'Configuração de pontuação por finalizar a atividade') . '
                <li>' . get_string('blockGameBlockDisplaySettings', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('configurar-exibicao-bloco.png', 'Configuração exibição do bloco') . '
                <li>' . get_string('blockGamePageSettings', 'local_gamificationhelper') . '</li>
                ' . self::getImageHTML('configurar-nesta-pagina.png', 'Define onde o bloco ficará') . '
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
        }

        $html .= '';

        return $html;
    }
}
