<?php

/**
 * Gamification Helper
 */

$string['pluginname'] = 'AGM - Assistente de Gamificação Moodle';

$string['installplugin'] = 'Instalar e configurar plugin';

// Permissions
$string['gamificationhelper:view'] = 'Acesso ao Auxiliar de Gamificação';

$string['gamificationhelper:manage'] = 'Permite configurar o Auxiliar de Gamificação';

// General Moodle permissions
$string['moodleSite:manageblocks'] = 'Gerenciar blocos';

// Modal
$string['modalTitle'] = 'Instalação e Configuração - {$a}';

/**********************************************************************************************************************/

/**
 * Buttons
 */

$string['btnAbout'] = 'Sobre';
$string['btnAboutDesc'] = 'Abre a página do plugin no Moodle para mais informações.';

$string['btnPermissions'] = 'Permissões';
$string['btnPermissionsDesc'] = 'Exibe uma modal com as permissões necessárias para usar e configurar o plugin.';

$string['btnDownload'] = 'Download';
$string['btnDownloadDesc'] = 'Disponível apenas se o plugin não estiver instalado, permite o download direto do plugin.';

$string['btnConfig'] = 'Configurar plugin';
$string['btnConfigDesc'] = 'Abre uma modal com instruções passo a passo para instalar e configurar o plugin.';

$string['btnInstall'] = 'Instalar plugin';

$string['btnStart'] = 'Iniciar o AGM';

$string['btnNext'] = 'Próximo';

$string['btnBack'] = 'Voltar';

/**********************************************************************************************************************/

/**
 * Main Page
 */

$string['welcome'] = 'Bem-vindo ao AGM!';

$string['introduction'] = 'Este plugin foi desenvolvido para ajudar professores a selecionarem os melhores plugins de 
gamificação, baseando-se nos objetivos educacionais desejados e no modelo de gamificação mais adequado. 
Utilizamos o modelo Octalysis como referência teórica para nossas recomendações.';

$string['adminRequired'] = 'Para instalar qualquer plugin de gamificação recomendado, você deve possuir permissões de 
administrador devido às políticas de controle de instalação do Moodle. Se você é um professor e deseja que um plugin 
seja instalado, solicite a instalação ao administrador do seu sistema.';

$string['pluginInstallation'] = 'Ao final do processo, os plugins recomendados serão listados com base nos seus objetivos 
e estilo de abordagem escolhidos. Você poderá explorar cada plugin em detalhes:';

$string['availablePlugins'] = 'Plugins de gamificação disponíveis:';

$string['alreadyInstalled'] = 'Plugin já instalado';

$string['pluginInstalledNote'] = 'Plugins já instalados são indicados com a nota 
"(' . $string['alreadyInstalled'] . ')" ao lado do nome.';

/**********************************************************************************************************************/

/**
 * Page - Objectives
 */

$string['defineObjectivesTitle'] = 'Definir os objetivos e abordagem';

$string['defineObjectivesDescription'] = 'Nesta etapa, defina quais objetivos você deseja alcançar e qual estilo de 
gamificação gostaria de adotar.';

$string['txtListObjectives'] = 'Explore os seguintes objetivos para a gamificação:';

$string['developmentAndAchievement'] = 'Desenvolvimento e Realização';
$string['developmentAndAchievementDesc'] = 'Incentivar a superação e conquista através de sistemas de pontos e 
recompensas, promovendo o desenvolvimento contínuo e o senso de realização dos alunos.';

$string['ownershipAndPossession'] = 'Propriedade e Posse';
$string['ownershipAndPossessionDesc'] = 'Promover a acumulação e personalização de recursos que os alunos sentem como 
seus, fortalecendo a conexão emocional e o engajamento com o material de aprendizado.';

$string['empowermentAndCreativity'] = 'Empoderamento e Criatividade';
$string['empowermentAndCreativityDesc'] = 'Oferecer liberdade para explorar e criar soluções únicas dentro de um 
ambiente estruturado, estimulando a inovação e o pensamento crítico.';

$string['unpredictabilityAndCuriosity'] = 'Imprevisibilidade e Curiosidade';
$string['unpredictabilityAndCuriosityDesc'] = 'Estimular a curiosidade e a exploração autônoma dos conteúdos, permitindo 
que os alunos descubram novos conhecimentos e conexões de maneira inovadora. A surpresa e a descoberta são poderosos 
motivadores para engajar os alunos.';

$string['socialInfluenceAndRelatedness'] = 'Influência Social e Pertencimento';
$string['socialInfluenceAndRelatednessDesc'] = 'Facilitar interações e colaborações significativas entre os alunos, 
promovendo um senso de comunidade e pertencimento que melhora a experiência de aprendizado.';

$string['txtListApproach'] = 'Selecione entre os seguintes estilos de abordagens para a gamificação:';

$string['competitive'] = 'Competitiva';
$string['competitiveDesc'] = 'Criar um ambiente onde os alunos competem entre si, visando a excelência individual 
através de tabelas de classificação e recompensas que destacam o desempenho destacado.';

$string['cooperative'] = 'Cooperativa';
$string['cooperativeDesc'] = 'Desenvolver um ambiente que promova trabalho conjunto e colaboração entre os alunos 
para alcançar objetivos comuns, utilizando ferramentas e atividades que estimulem a cooperação.';

$string['independent'] = 'Independente';
$string['independentDesc'] = 'Permitir que os alunos conduzam seu próprio aprendizado, explorando conteúdos de forma 
autônoma e utilizando recursos que facilitam a autoeducação e a personalização do percurso educativo.';

$string['epicNarrative'] = 'Narrativa Épica';
$string['epicNarrativeDesc'] = 'Engajar os alunos em uma grande história ou missão que transcenda as atividades 
cotidianas, proporcionando um propósito maior e mais inspirador para o processo de aprendizagem.';

$string['promptSelect'] = 'Por favor, selecione suas preferências abaixo para personalizar a experiência de gamificação 
conforme suas necessidades educacionais:';

$string['selectObjective'] = 'Selecione o Objetivo a ser Atingido:';

$string['selectStyle'] = 'Selecione o Estilo de Abordagem para a Gamificação:';

/**********************************************************************************************************************/

/**
 * Page - Recommendation plugin
 */

$string['selectObjective'] = 'Selecione o Objetivo a ser Atingido:';

$string['noRecommendationsTitle'] = 'Nenhum Plugin Correspondente Encontrado';

$string['noRecommendations'] = 'Atualmente, não há plugins disponíveis que correspondam diretamente ao objetivo de 
"{$a->objective}" e à abordagem de "{$a->approach}". Esta ferramenta explora um conjunto limitado de plugins para 
demonstrar como a gamificação pode ser implementada efetivamente no Moodle. Isso pode ocorrer devido a:';

$string['noRecommendationsReason1'] = 'As características específicas requeridas pela sua combinação escolhida não são 
suportadas pelo conjunto atual de plugins.';

$string['noRecommendationsReason2'] = 'A singularidade do seu objetivo e abordagem selecionados, sugerindo uma área 
potencial para o desenvolvimento ou personalização futura de plugins.';

$string['noRecommendationsConclusion'] = 'Este cenário destaca o potencial para novos desenvolvimentos em gamificação 
no Moodle. Encorajamos você a se engajar com a comunidade Moodle ou desenvolvedores de plugins para explorar ou iniciar 
novas soluções de gamificação que atendam às suas necessidades educacionais.';

$string['recommendationPluginDesc'] = 'Os plugins listados abaixo foram selecionados com base nos objetivos e abordagens 
que você especificou. Eles são projetados para enriquecer o ambiente de aprendizado com elementos de gamificação que 
podem aumentar o engajamento e a motivação dos alunos.';

$string['recommendationPluginTitlePage'] = 'Plugins de Gamificação Recomendados para Seu Curso';

/**********************************************************************************************************************/

/**
 * Modal permission
 */

$string['permissionsDescription'] = 'Esta modal apresenta o status das permissões necessárias para utilizar as 
funcionalidades deste plugin. Cada ícone e cor representam um estado diferente:';


$string['permissionGranted'] = '<strong>Verde</strong>: A permissão foi concedida.';

$string['permissionDenied'] = '<strong>Vermelho</strong>: A permissão não foi concedida. Solicite as permissões ao 
administrador para utilizar/configurar este plugin.';

$string['permissionDeniedNotInstalled'] = '<strong>Amarelo</strong>: A permissão não foi concedida e o plugin ainda não 
está instalado. As permissões listadas em amarelo serão validadas como permitidas ou não após a instalação do plugin.';

$string['permissionsListTitle'] = 'Lista de permissões:';

/**********************************************************************************************************************/

/**
 * Default install plugin
 */

// Instalação do Plugin (Admin)
$string['defaultInstallInstallIntro'] = 'Instalação do Plugin (Apenas para Administradores)';

$string['defaultInstallInstallStep1'] = 'Clique no botão "Instalação" para abrir a página de instalação de plugins.';

$string['defaultInstallInstallStep2'] = 'Arraste o arquivo .zip que foi baixado até a área de arquivos ou clique em "Escolher 
um arquivo" para abrir o diretório de arquivos do seu computador.';

$string['defaultInstallInstallStep3'] = 'Clique em "Instalar plugin do arquivo ZIP".';

$string['defaultInstallValidation'] = 'Uma tela de validação do plugin será exibida. Se a validação for bem-sucedida, 
clique em "Continuar".';

$string['defaultInstallMoodleVersionInfo'] = 'Após a verificação do plugin, uma tela de informação sobre a versão do 
Moodle será exibida:';

$string['defaultInstallMoodleCheck'] = 'O Moodle verifica se todos os requisitos para continuar funcionando estão sendo 
cumpridos.';

$string['defaultInstallStatusOK'] = 'OK - O componente está correto e sem problemas.';

$string['defaultInstallPluginVerification'] = 'Verificação de Plugins: Na tela "Verificação de plugins", o plugin já está no 
banco de dados do Moodle e está pronto para ser atualizado. Clique em "Atualizar a base de dados do Moodle agora".';

$string['defaultInstallUpdateVersion'] = 'Atualizando para Nova Versão: Na tela "Atualizando para nova versão", clique em 
"Continuar".';

$string['defaultInstallConfigIntro'] = 'Configuração do Plugin';

$string['defaultInstallConfigFields'] = 'Configurar Campos:';

$string['defaultInstallCourseConfig'] = 'Configuração para um Curso Específico';

$string['defaultInstallSupportLinks'] = 'Acesse os seguintes links para obter mais informações e suporte';

$string['defaultSupportLink1'] = 'Como instalar plugins';

// Solicitar instalação
$string['defaultInstallPluginRequestTutorial'] = 'Solicitando a Instalação de um Plugin';

$string['defaultInstallPluginRequestDescription'] = 'Se você não possui permissões administrativas para instalar plugins 
no Moodle, siga as instruções abaixo para solicitar a instalação de um plugin para o administrador do Moodle.';

$string['defaultInstallSendEmail'] = '<strong>Entre em contato com o administrador do Moodle:</strong> Envie uma mensagem 
ou e-mail para o administrador do seu ambiente Moodle.';

$string['defaultInstallAttachZipDescription'] = '<strong>Encaminhe o arquivo ZIP do plugin:</strong> Anexe o arquivo ZIP 
do plugin desejado na mensagem para que o administrador possa instalá-lo diretamente.';

$string['defaultInstallPluginNameDescription'] = 'Caso o administrador prefira não receber arquivos ZIP, informe o nome 
do plugin "{$a}" para que ele possa buscar e instalar diretamente da loja de plugins do Moodle.';

/**********************************************************************************************************************/

/**
 * Block Game
 */

/****************************************** About ******************************************/
$string['blockGame'] = 'Block Game';

$string['blockGameDesc'] = 'Transforma atividades e recursos em uma experiência de jogo por blocos.';

/*************************************** Permissions ***************************************/
$string['blockGame:addinstance'] = 'Adicionar um novo bloco Jogo';

/**************************************** Tutorial ****************************************/
// Configurações padrão
$string['blockGameDefaultConfig'] = 'Configuração Padrão do Plugin';

$string['blockGameDefaultConfigNote'] = 'Após a instalação, a tela de configuração padrão do plugin será exibida. Se não 
houver configurações específicas para um curso, as configurações padrão serão utilizadas. Alterar os dados padrão do 
plugin é opcional e deve ser feito apenas se você desejar que o plugin adote um comportamento específico por padrão.';

$string['blockGameDefaultUseAvatar'] = '<strong>Utilizar Avatar:</strong> Permite o uso de avatares.';

$string['blockGameDefaultReplaceAvatars'] = '<strong>Substituir Imagens de Avatares:</strong> Permite alterar todos os avatares 
disponíveis.';

$string['blockGameDefaultAllowAvatarChange'] = '<strong>Permitir Mudança de Avatar no Curso:</strong> Define se os participantes 
podem alterar seus avatares.';

$string['blockGameDefaultShowPlayerInfo'] = '<strong>Mostrar Informações do Jogador:</strong> Exibe informações de todos os cursos 
do participante.';

$string['blockGameDefaultPointForActivities'] = '<strong>Pontuar Notas de Atividades:</strong> Contabiliza a nota das atividades 
como pontos.';

$string['blockGameDefaultDailyBonus'] = '<strong>Bônus do Dia:</strong> Define pontos por dia de acesso.';

$string['blockGameDefaultBonusForBadge'] = '<strong>Bônus para Emblema:</strong> Aplica pontos para cada emblema conquistado.';

$string['blockGameDefaultShowRanking'] = '<strong>Mostrar Classificação:</strong> Permite que os participantes vejam a 
classificação.';

$string['blockGameDefaultPreserveIdentity'] = '<strong>Preservar Identidade do Usuário:</strong> Preserva a identidade do usuário 
na classificação.';

$string['blockGameDefaultShowScore'] = '<strong>Mostrar Pontuação:</strong> Exibe a pontuação dos participantes.';

$string['blockGameDefaultShowLevel'] = '<strong>Mostrar Nível:</strong> Exibe o nível dos participantes.';

$string['blockGameDefaultCustomLevelImages'] = '<strong>Substituir Imagens de Níveis:</strong> Permite alterar todas as imagens 
dos níveis.';

$string['blockGameDefaultNumberOfLevels'] = '<strong>Número de Níveis:</strong> Define o número de níveis para os cursos.';

$string['blockGameDefaultSaveChanges'] = '<strong>Salvar Configurações:</strong> Após configurar os campos, clique em "Salvar 
mudanças".';

// Adicionar o Block Game ao Curso
$string['blockGameAddToCourseTutorial'] = 'Como Adicionar o Block Game ao Seu Curso';

$string['blockGameAddToCourseDescription'] = 'Siga os passos abaixo para adicionar o bloco Block Game ao seu curso e 
começar a utilizar suas funcionalidades de gamificação.';

$string['blockGameResetPointsStep0'] = '<strong>Ativar Modo de Edição:</strong> A opção de redefinir pontos só estará 
disponível quando o modo de edição do curso estiver ativo e aparecerá apenas no card do jogo criado pelo professor ou 
moderador.';

$string['blockGameAddStep1'] = '<strong>Selecionar o Curso Desejado:</strong> No painel do Moodle, selecione o curso ao 
qual você deseja adicionar o Block Game.';

$string['blockGameAddStep2'] = '<strong>Habilitar Modo de Edição:</strong> Dentro do curso, clique no botão "Modo de edição" 
para permitir a adição de novos blocos.';

$string['blockGameAddStep3'] = '<strong>Abrir Gaveta de Blocos:</strong> Com o modo de edição ativado, vá até o menu lateral 
(gaveta de blocos) e clique em "Adicionar um bloco".';

$string['blockGameAddStep4'] = '<strong>Adicionar Bloco:</strong> Na lista de blocos disponíveis, encontre e selecione "Jogo". 
O bloco será adicionado ao seu curso.';

// Configuração para um Curso Específico
$string['blockGameSettingsTutorial'] = 'Configurações do Block Game';

$string['blockGameSettingsDescription'] = 'Para acessar as configurações do Block Game, certifique-se de que o modo de 
edição do curso esteja ativo. A opção de configuração estará disponível apenas para o professor ou moderador que criou o 
jogo. Siga as instruções abaixo para configurar o Block Game:';

$string['blockGameSettingsEditTitle'] = '<strong>Editar o título:</strong> Permite editar o título do bloco.';

$string['blockGameSettingsShowCourseName'] = '<strong>Mostrar nome do curso:</strong> Mostra o nome do curso no bloco.';

$string['blockGameSettingsShowPlayerInfo'] = '<strong>Mostrar informações do jogador:</strong> Mostra informações ao jogador 
de todos os cursos que ele participa.';

$string['blockGameSettingsScoreActivityGrades'] = '<strong>Pontuar notas de atividades:</strong> Use notas de atividades 
para pontuar. Apenas para escalas numéricas!';

$string['blockGameSettingsDailyBonus'] = '<strong>Bônus do dia:</strong> Emblema bônus do dia, definir pontos por dia de 
acesso.';

$string['blockGameSettingsShowGroupRanking'] = '<strong>Mostrar classificação por grupo:</strong> Mostrando a classificação 
por grupo.';

$string['blockGameSettingsGroupPointsCalculation'] = '<strong>Cálculo para pontos de grupo:</strong> Selecione o método 
de cálculo para os pontos de grupo.';

$string['blockGameSettingsShowRanking'] = '<strong>Mostrar classificação:</strong> Mostrando a classificação.';

$string['blockGameSettingsRankingLimit'] = '<strong>Limite da lista de classificação:</strong> Controla a quantidade de 
jogadores a ser exibido na lista de classificação. Selecione 0 (zero) para listar todos.';

$string['blockGameSettingsPreserveIdentity'] = '<strong>Preservar identidade do usuário:</strong> Preservar identidade do 
usuário na lista de classificação.';

$string['blockGameSettingsShowScore'] = '<strong>Mostrar pontuação:</strong> Mostrando a pontuação.';

$string['blockGameSettingsShowLevel'] = '<strong>Mostrar Nível:</strong> Mostrar Nível.';

$string['blockGameSettingsNumberOfLevels'] = '<strong>Número de níveis:</strong> Define o número de níveis. Esse campo 
desabilita a edição dos campos "Pontos para o nível ...".';

$string['blockGameSettingsPointsForLevel'] = '<strong>Pontos para o nível 1-15:</strong> Defina a quantidade de pontos 
necessários para alcançar o nível respectivo. Os pontos podem ser ajustados conforme necessário. Campos para níveis não 
utilizados são desabilitados.';

$string['blockGameSettingsCompletionPoints'] = 'Pontuar conclusão de seção (necessário critérios de conclusão)';

$string['blockGameSettingsCompletionPointsDescription'] = 'Para configurar o bloco Jogo no Moodle, é necessário definir 
critérios de pontuação para a conclusão de seções/tópicos. Esses critérios são configurados de acordo com a estrutura do 
curso, variando conforme a quantidade de seções/tópicos presentes.';

$string['blockGameSettingsPointsForCompletion'] = '<strong>Pontos por conclusão de seção:</strong> Esses campos permitem 
definir quantos pontos cada aluno ganha ao concluir uma seção específica do curso.';

$string['blockGameSettingsCompletionConditions'] = '<strong>Condições de Conclusão:</strong> Essas opções determinam quando 
os pontos de conclusão de seção são atribuídos ao participante. As condições são definidas ao editar uma atividade na seção, 
indo até a aba "Condições de conclusão". A pontuação só será aplicada após todas as atividades com condição de conclusão 
definida serem concluídas, liberando assim a pontuação da seção. Configurar essas condições corretamente é essencial para 
o funcionamento do bloco Jogo.';

$string['blockGameSettingsActivityCompletionPoints'] = 'Pontuação por conclusão de Atividade /Recursos (critérios de 
conclusão obrigatórios):';

$string['blockGameSettingsActivityCompletionPointsDescription'] = 'Esta configuração permite atribuir pontos aos alunos 
pela conclusão de atividades ou recursos específicos no curso. Cada campo representa uma atividade ou recurso criado no 
curso.';

$string['blockGameSettingsPointsForActivityCompletion'] = '<strong>Pontos por conclusão de Atividade:</strong> Esses 
campos permitem definir quantos pontos cada aluno ganha ao concluir uma atividade ou recurso específico do curso.';

$string['blockGameSettingsActivityCompletionConditions'] = '<strong>Critérios de Conclusão:</strong> As atividades precisam 
ter critérios de conclusão definidos para que a pontuação seja aplicada. Mesmo que os pontos estejam configurados, se a 
atividade não tiver um critério de conclusão, os pontos não serão atribuídos.';

$string['blockGameSettingsGamePointsTab'] = '<strong>Pontos do Jogo:</strong> Se o bloco Jogo estiver adicionado ao curso, 
é possível configurar os pontos da atividade diretamente na aba de edição da mesma, indo até a seção "Pontos do Jogo".';

$string['blockGameSettingsWhereToShow'] = 'Onde exibir este bloco';

$string['blockGameSettingsWhereToShowDescription'] = 'Configure onde o bloco Jogo será exibido no curso, incluindo a página 
específica e a região na tela.';

$string['blockGameSettingsBlockLocation'] = '<strong>Localização original do bloco:</strong> O local original onde o bloco foi 
criado. As configurações de bloqueio podem fazer com que ele apareça em outros locais (contextos) dentro do local original. 
Por exemplo, um bloco criado na página de um curso pode ser exibido nas atividades desse curso. Um bloco criado na página 
inicial do site pode ser exibido em todo o site.';

$string['blockGameSettingsShowOnPageType'] = '<strong>Mostrar nos tipos de página:</strong> Seleciona em quais tipos de página o 
bloco será exibido. As opções incluem "Qualquer página", "Qualquer página de curso" e "Qualquer tipo de página principal 
de curso".';

$string['blockGameSettingsDefaultRegion'] = '<strong>Região padrão:</strong> Define em qual região do curso o bloco será exibido 
por padrão. As opções podem incluir regiões como "Direita", "Esquerda", etc., dependendo do tema utilizado.';

$string['blockGameSettingsDefaultWeight'] = '<strong>Peso padrão:</strong> Permite ajustar a posição do bloco dentro da região 
selecionada. Valores mais baixos colocam o bloco mais próximo do topo.';

$string['blockGameSettingsOnThisPage'] = 'Nessa página';

$string['blockGameSettingsOnThisPageDescription'] = 'Configure como o bloco será exibido nesta página específica do curso.';

$string['blockGameSettingsVisible'] = '<strong>Visível:</strong> Define se o bloco estará visível ou oculto na página. As opções 
são "Sim" para tornar o bloco visível e "Não" para ocultá-lo.';

$string['blockGameSettingsRegion'] = '<strong>Região:</strong> Define em qual região da página o bloco será exibido. As opções 
variam de acordo com o tema utilizado, como "Direita" ou "Esquerda".';

$string['blockGameSettingsWeight'] = '<strong>Peso:</strong> Permite ajustar a posição do bloco dentro da região selecionada. 
Valores negativos colocam o bloco mais próximo do topo, enquanto valores positivos o colocam mais próximo da parte inferior.';

// Links de apoio
$string['blockGameSupportLink1'] = 'Como instalar e configurar o plugin Block Game';

$string['blockGameSupportLink2'] = 'Gamificação na Prática com a Plataforma Moodle';

// Como redefinir os pontos
$string['blockGameResetPointsTutorial'] = 'Como Redefinir Pontos no Block Game';

$string['blockGameResetPointsDescription'] = 'A opção "Redefinir Pontos" permite que todos os pontos acumulados pelos 
alunos no curso sejam zerados. Ao redefinir a pontuação do curso, todos os usuários perdem seus pontos. Esta ação é 
irreversível. Certifique-se de que deseja realmente fazer isso.';

$string['blockGameResetPointsStep1'] = '<strong>Como acessar:</strong> Na interface do plugin Block Game, clique no ícone 
de seta circular vermelha no widget do jogo.';

$string['blockGameResetPointsStep2'] = '<strong>Selecionar Redefinir Pontos:</strong> Selecione a opção "Redefinir pontos".';

$string['blockGameResetPointsStep3'] = '<strong>Confirmar Ação:</strong> Confirme a ação na janela de confirmação que 
aparece clicando em "Sim".';

/**********************************************************************************************************************/

/**
 * Level Up XP - Gamification
 */

/****************************************** About ******************************************/
$string['levelUp'] = 'Level Up XP - Gamification';
$string['levelUpDesc'] = 'Permite a criação de sistemas de pontos de experiência que motivam os alunos através de 
progressão visual e recompensas.';

/*************************************** Permissions ***************************************/
$string['blockXp:addinstance'] = 'Adicionar um novo bloco';
$string['blockXp:manage'] = 'Gerenciar todos os aspectos dos pontos de experiência';
$string['blockXp:viewlogs'] = 'Acessar os logs';
$string['blockXp:viewreport'] = 'Ver o relatório';

/**************************************** Tutorial ****************************************/
// Configurações Padrão
$string['blockXpDefaultSettings'] = 'Configurações Padrão do Plugin Level Up XP';

$string['blockXpDefaultSettingsDescription'] = 'As configurações padrão do plugin Level Up XP permitem definir como o 
plugin funcionará em todo o site. Configure as opções globais para a gamificação do curso, incluindo como os pontos são 
usados, a visibilidade na navegação e se os administradores podem ganhar pontos.';

$string['blockXpDefaultSettingsPointsContext'] = '<strong>Onde os pontos são usados?</strong> Quando selecionar "Em cursos", os pontos 
de experiência ganhos serão contados apenas no curso onde o bloco foi adicionado. Se escolher "Para todo o site", os pontos 
serão somados em todos os cursos, permitindo subir de nível globalmente.';

$string['blockXpDefaultSettingsNavBarDisplay'] = '<strong>Mostrar na barra de navegação:</strong> Quando ativado, o nível do usuário será 
exibido na barra de navegação superior.';

$string['blockXpDefaultSettingsAdminsCanEarnXp'] = '<strong>Administradores podem ganhar pontos:</strong> Por padrão, os administradores 
não ganham pontos. Esta configuração permite incluí-los no sistema de pontuação.';

$string['blockXpDefaultSettingsKeepLogs'] = '<strong>Manter logs</strong> Define o tempo durante o qual os logs serão mantidos antes de 
serem excluídos.';

$string['blockXpDefaultSettingsUsageReport'] = '<strong>Compartilhar relatório de uso:</strong> Periodicamente compartilha informações de 
uso anônimas com os desenvolvedores do plugin para ajudar a melhorar o plugin.';

$string['blockXpDefaultSettingsEnableInfos'] = '<strong>Habilitar a página de informações:</strong> Quando desativado, a página de 
informações não estará visível para os estudantes.';

$string['blockXpDefaultSettingsEnableLevelUpNotif'] = '<strong>Habilitar notificações de mudança de nível:</strong> Quando ativado, os 
estudantes verão um popup parabenizando-os por alcançar um novo nível.';

$string['blockXpDefaultSettingsEnableLeader'] = '<strong>Habilitar ranking:</strong> Quando desativado, o ranking não estará visível para 
os estudantes.';

$string['blockXpDefaultSettingsIdentityMode'] = '<strong>Anonimato:</strong> Controla se os participantes podem ver o nome e o avatar uns 
dos outros.';

$string['blockXpDefaultSettingsNeighbours'] = '<strong>Limite de participantes:</strong> Controla quem é exibido no placar do ranking.';

$string['blockXpDefaultSettingsRankMode'] = '<strong>Ranking:</strong> A classificação é a posição absoluta do usuário no ranking. A 
classificação relativa é a diferença dos pontos de experiência entre um usuário e seus vizinhos.';

$string['blockXpDefaultSettingsLadderCols'] = '<strong>Colunas adicionais:</strong> Esta configuração determina quais colunas adicionais 
são exibidas no ranking.';

$string['blockXpDefaultSettingsEnableCheatGuard'] = '<strong>Ativar proteção contra fraude:</strong> O cheat guard oferece um mecanismo 
simples e eficaz para prevenir abusos no sistema de pontuação.';

$string['blockXpDefaultSettingsMaxActionsPerTime'] = '<strong>Max. ações no intervalo de tempo:</strong> Define o número máximo de ações 
que contarão para pontos durante um intervalo de tempo específico.';

$string['blockXpDefaultSettingsTimeForMaxActions'] = '<strong>Intervalo de tempo para max. ações:</strong> Define o intervalo de tempo 
durante o qual o usuário não deve exceder um número máximo de ações.';

$string['blockXpDefaultSettingsTimeBetweenSameActions'] = '<strong>Tempo requerido entre ações idênticas:</strong> Define o tempo mínimo 
entre ações idênticas para serem aceitas novamente.';

$string['blockXpDefaultSettingsBlockTitle'] = '<strong>Título do bloco:</strong> Define o título do bloco.';

$string['blockXpDefaultSettingsBlockDescription'] = '<strong>Descrição do bloco:</strong> Define uma mensagem de introdução exibida no bloco.';

$string['blockXpDefaultSettingsRankingSnapshot'] = '<strong>Exibir amostra do ranking:</strong> Mostra uma amostra do ranking no bloco.';

$string['blockXpDefaultSettingsBlockRecentActivity'] = '<strong>Mostrar recompensas recentes:</strong> Mostra uma lista de eventos 
recentes que recompensaram o estudante com pontos.';

// Adicionar o Level Up XP ao Curso
$string['blockXpAddToCourseTutorial'] = 'Como Adicionar o Level Up XP ao Seu Curso';

$string['blockXpAddToCourseDescription'] = 'Siga os passos abaixo para adicionar o bloco Level Up XP ao seu curso e 
começar a utilizar as funcionalidades de gamificação.';

$string['blockXpAddStep1'] = '<strong>Selecionar o Curso Desejado:</strong> No painel do Moodle, selecione o curso ao qual 
você deseja adicionar o Level Up XP.';

$string['blockXpAddStep2'] = '<strong>Habilitar Modo de edição:</strong> Dentro do curso, clique no botão "Modo de edição" 
para permitir a adição de novos blocos.';

$string['blockXpAddStep3'] = '<strong>Abrir Gaveta de Blocos:</strong> Com o modo de edição ativado, vá até o menu lateral 
(gaveta de blocos) e clique em "Adicionar um bloco".';

$string['blockXpAddStep4'] = '<strong>Adicionar Bloco:</strong> Na lista de blocos disponíveis, encontre e selecione 
"Level Up XP". O bloco será adicionado ao seu curso.';

// Como acessar as configurações
$string['blockXpAccessSettingsTutorial'] = 'Acessando as Configurações do Plugin Level Up XP';

$string['blockXpAccessSettingsDescription'] = 'Para configurar o plugin Level Up XP e personalizar a gamificação do seu 
curso, siga os passos abaixo:';

$string['blockXpStep1'] = '<strong>Navegue até o Bloco do Level Up XP:</strong> No painel do seu curso, localize o bloco 
do Level Up XP. Ele exibe um resumo do seu progresso atual, incluindo o nível atual, total de XP acumulado, ranking e 
recompensas recentes.';

$string['blockXpStep2'] = '<strong>Acessando as Configurações:</strong> No bloco do Level Up XP, clique na opção 
"Configurações". Isso abrirá a página onde você pode ajustar diversas configurações do plugin para personalizar a experiência 
de gamificação dos seus alunos.';

$string['blockXpStep3'] = '<strong>Abas de Configuração:</strong> Na página de configurações, você encontrará várias abas, 
cada uma dedicada a diferentes aspectos do plugin.';

$string['blockXpStep4'] = '<strong>Funcionalidades XP+:</strong> Em algumas áreas das configurações, você verá campos 
marcados com "XP+ necessário". Estes campos são funcionalidades extras da extensão paga XP+. No entanto, estas funcionalidades 
são apenas customizações adicionais e não interferem na gamificação e no resultado a ser atingido com o plugin base.';

// Aba Informações
$string['blockXpInformationTab'] = 'Informações';

$string['blockXpInformationTabDescription'] = 'A aba "Informações" do plugin Level Up XP oferece um resumo visual dos 
níveis dos alunos em um curso. Nesta aba, é possível ver a distribuição dos níveis, adicionar mais informações relevantes 
e personalizar os níveis conforme necessário. Sendo fundamental para manter os alunos informados sobre seu progresso e para 
motivá-los a continuar participando ativamente do curso. As funcionalidades de personalização permitem aos professores 
adaptar a gamificação às necessidades específicas de seus cursos, tornando a experiência de aprendizagem mais envolvente 
e eficaz.';

$string['blockXpInformationLevel'] = 'Mostra o número do nível e a quantidade de pontos XP necessários para alcançá-lo. Esta 
visualização ajuda os alunos a entenderem seu progresso e os incentiva a alcançar o próximo nível.';

$string['blockXpInformationUsageExample'] = '<strong>Visualizar Progresso:</strong> Cada estrela colorida representa um 
nível específico que os alunos podem alcançar. Ao passar o cursor sobre uma estrela, é possível ver quantos pontos são 
necessários para alcançar o próximo nível.';

$string['blockXpInformationAdd'] = '<strong>Adicionar Informações:</strong> Permite incluir descrições ou metas adicionais 
que podem ajudar os alunos a entender melhor o sistema de níveis e o que é esperado deles.';

$string['blockXpInformationCustomizeLevelsInstructions'] = '<strong>Personalizar Níveis:</strong> Abrirá a aba "Níveis" 
caso desejar alterar os requisitos de pontos ou a aparência dos níveis.';


// Aba Ranking
$string['blockXpRankingTab'] = 'Ranking';

$string['blockXpRankingDescription'] = 'A aba Ranking mostra a classificação dos participantes com base nos pontos 
acumulados. Esta visualização pode ser utilizada para fomentar a competitividade saudável e o engajamento dos alunos.';

// Aba Relatório -> Relatório
$string['blockXpReportTab'] = 'Relatório';

$string['blockXpReportDescription'] = 'A aba Relatório permite visualizar e gerenciar os níveis e pontos dos participantes 
do curso. Aqui, você pode editar manualmente os pontos de cada aluno, verificar logs de ações e redefinir os dados de pontuação 
do curso.';

$string['blockXpReportResetCourseData'] = '<strong>Resetar os dados do curso:</strong> Reseta todas as pontuações de todos 
os participantes do curso. Esta ação redefine os níveis e pontos de todos os estudantes, sendo útil para reiniciar a 
gamificação no curso.';

$string['blockXpReportEditPoints'] = '<strong>Editar pontos:</strong> Permite ajustar manualmente os pontos de um aluno 
específico. Ao clicar em "Editar", você pode inserir novos valores de pontos e nível para o participante selecionado e 
clicar em "Salvar mudanças" para aplicar as alterações.';

$string['blockXpReportViewLogs'] = '<strong>Ver logs:</strong> Exibe os registros de ações realizadas pelos participantes. 
Utilizado para monitorar e revisar as atividades que resultaram em ganho de pontos.';

$string['blockXpReportDeleteUser'] = '<strong>Excluir usuário:</strong> Remove o usuário do ranking e exclui todos os logs 
associados. Se a intenção é apenas redefinir os pontos do usuário, é recomendável definir os pontos como 0, pois excluir 
um usuário não afeta sua capacidade de ganhar pontos no futuro.';

// Aba Relatório -> Logs
$string['blockXpLogsTab'] = 'Logs';

$string['blockXpLogsDescription'] = 'A aba Logs permite visualizar e filtrar todos os registros de eventos que resultaram 
em ganho de pontos para os participantes do curso. Este recurso é útil para monitorar e revisar as atividades realizadas 
pelos alunos.';

// Aba Níveis -> Configuração
$string['blockXpLevelConfigTab'] = 'Configuração dos Níveis';

$string['blockXpLevelConfigDescription'] = 'Personalize as configurações de cada nível, incluindo os pontos necessários 
para alcançar o nível, nomes e descrições.';

$string['blockXpLevelNumberOfLevels'] = '<strong>Número de Níveis:</strong> Defina o número total de níveis que os participantes podem alcançar. Por padrão, o Level Up XP configura 10 níveis de dificuldade crescente.';

$string['blockXpLevelQuickEditPoints'] = '<strong>Edição Rápida de Pontos:</strong> Permite editar rapidamente os pontos 
necessários para alcançar cada nível. Recomendamos o uso do método "Bola de Neve" para criar um ambiente onde os primeiros 
níveis não sejam muito difíceis, mas se tornem cada vez mais desafiadores à medida que o aluno progride.';

$string['blockXpLevelQuickEditEqual'] = '<strong>Igual:</strong> Todos os níveis exigem o mesmo número de pontos para serem 
alcançados. Este método é simples, mas pode tirar a sensação de conquista de alcançar um nível, pois todos os níveis são 
idênticos.';

$string['blockXpLevelQuickEditIncreasing'] = '<strong>Crescente:</strong> Os níveis demoram progressivamente mais para 
serem alcançados. Este método aumenta a dificuldade de forma linear, tornando os pontos previsíveis para o instrutor.';

$string['blockXpLevelQuickEditSnowball'] = '<strong>Bola de Neve:</strong> Os níveis se tornam exponencialmente mais 
difíceis de alcançar. Este método permite que os alunos progridam rapidamente nos primeiros níveis, mas requerem um esforço 
maior nos níveis posteriores. Recomendado.';

$string['blockXpLevelStart'] = '<strong>Início:</strong> Define a quantidade de pontos necessários para atingir o nível. 
Nota: O nível 1 sempre inicia com 0 pontos e não pode ser alterado.';

$string['blockXpLevelLength'] = '<strong>Comprimento:</strong> Define a quantidade de pontos adicionais necessários para 
avançar ao próximo nível.';

$string['blockXpLevelName'] = '<strong>Nome:</strong> Permite adicionar um nome personalizado para cada nível.';

$string['blockXpLevelDescriptionField'] = '<strong>Descrição:</strong> Permite adicionar uma descrição para cada nível. 
Esta descrição será exibida aos participantes na página de informações.';

$string['blockXpLevelPopupMessage'] = '<strong>Mensagem de Notificação de Popup:</strong> Mensagem opcional exibida na 
notificação de popup quando o participante atinge o nível. Esta opção está disponível apenas com o Level Up XP+ ativado.';

$string['blockXpLevelBadgeAward'] = '<strong>Emblema para Conceder:</strong> Permite selecionar um emblema 
para ser concedido quando o participante atinge o nível. Esta opção está disponível apenas com o Level Up XP+ ativado.';

// Aba Níveis -> Aparência
$string['blockXpLevelAppearanceTab'] = 'Aparência dos Níveis';

$string['blockXpLevelAppearanceDescription'] = 'Personalize a aparência dos níveis e o significado dos pontos.';

$string['blockXpLevelBadge'] = '<strong>Emblemas de Nível:</strong> Permite o upload de emblemas personalizados para 
representar cada nível.';

$string['blockXpLevelPointsSymbol'] = '<strong>Símbolo de Pontos:</strong> Define o símbolo a ser usado para representar 
os pontos de experiência. Esta opção está disponível apenas com o Level Up XP+ ativado.';

$string['blockXpLevelPreview'] = '<strong>Ver Prévia:</strong> Exibe uma visualização de como os emblemas dos níveis 
aparecerão para os participantes do curso.';

$string['blockXpLevelResetAppearance'] = '<strong>Redefinir aparência para padrões:</strong> Redefine a aparência de todos os 
níveis do curso para o padrão. Tenha certeza de que deseja aplicar esta ação, pois não é possível desfazê-la.';

// Aba Pontos
$string['blockXpPointsTab'] = 'Pontos';

$string['blockXpPointsDescription'] = 'Configure regras de pontuação baseadas em eventos e outras ações realizadas pelos 
usuários.';

$string['blockXpPointsEventRulesDescription'] = '<strong>Regras de Eventos:</strong> Monitore as ações e atribua pontos aos 
estudantes conforme realizam atividades específicas. É aconselhável verificar a página de Log do plugin para identificar 
quais eventos são acionados à medida que os estudantes realizam ações no curso.';

$string['blockXpPointsCompletionRulesDescription'] = '<strong>Regras de Conclusão:</strong> Atribui pontos aos estudantes conforme 
completam atividades, seções ou cursos. Esta funcionalidade requer o Level Up XP+.';

$string['blockXpPointsGradeRulesDescription'] = '<strong>Regras de Notas: </strong> Permitem que os usuários recebam pontos 
equivalentes às notas que recebem. Esta funcionalidade requer o Level Up XP+.';

$string['blockXpPointsDropsDescription'] = '<strong>Drops:</strong> São trechos de código colocados diretamente no conteúdo que 
concedem pontos quando encontrados por um usuário. Esta funcionalidade requer o Level Up XP+.';

$string['blockXpPointsImportDescription'] = '<strong>Importar Pontos:</strong> Permite importar pontos de um arquivo CSV 
e, opcionalmente, enviar uma mensagem ao destinatário. Esta funcionalidade requer o Level Up XP+.';

$string['blockXpPointsResetRulesDescription'] = '<strong>Redefinir as Regras do Curso para o Padrão:</strong> Esta ação 
redefine todas as regras de pontuação do curso para as configurações padrão. Use esta opção com cuidado, pois não é possível 
desfazê-la.';

// Aba Configurações
$string['blockXpSettingsTab'] = 'Configurações';

$string['blockXpSettingsDescription'] = 'A aba Configurações permite aos administradores e instrutores personalizar várias 
opções do plugin Level Up XP. Isso inclui ajustes gerais, como a habilitação de pontos XP e notificações, configurações de 
ranking, proteções contra fraude para evitar abusos e a personalização da aparência do bloco do Level Up XP.';

// Aba Configurações -> Geral
$string['blockXpGeneralSettings'] = '<strong>Geral</strong>';

$string['blockXpEnableXpGain'] = '<strong>Habilitar ganho de pontos XP:</strong> Permite ativar ou desativar o ganho de 
pontos de experiência no curso. Quando definido como "Não", ninguém ganhará pontos no curso. Isso é útil para congelar os 
pontos ganhos ou para habilitá-los em determinado momento. Observe que isso também pode ser controlado com mais granularidade 
usando a capacidade block/xp:earnxp.';

$string['blockXpEnableInfoPage'] = '<strong>Habilitar a página de informações:</strong> Controla se a página de informações 
do plugin estará acessível aos estudantes. Quando definido como "Não", os estudantes não serão capazes de ver a página de 
informações.';

$string['blockXpEnableLevelUpNotifications'] = '<strong>Habilitar notificações de mudança de nível:</strong> Controla se 
os estudantes receberão notificações de popup quando alcançarem um novo nível. Quando definido como "Sim", os estudantes 
verão um popup parabenizando-os pelo novo nível alcançado.';

// Aba Configurações -> Ranking
$string['blockXpRankingSettings'] = '<strong>Ranking</strong>';

$string['blockXpRankingSettingsEnable'] = '<strong>Habilitar ranking:</strong> Permite ativar ou desativar a visualização do 
ranking para os estudantes. Quando definido como "Não", os estudantes não poderão visualizar o ranking.';

$string['blockXpRankingSettingsAnonymity'] = '<strong>Anonimato:</strong> Controla se os participantes podem ver o nome e o avatar 
uns dos outros no ranking. Quando ativado, a identidade dos participantes será exibida. Caso contrário, permanecerá anônima.';

$string['blockXpRankingSettingsParticipantLimit'] = '<strong>Limite de participantes:</strong> Controla quantos participantes serão 
exibidos no ranking. Você pode escolher exibir todos os participantes ou limitar a visualização aos vizinhos imediatos 
(os dois participantes acima e abaixo do usuário atual, por exemplo).';

$string['blockXpRankingSettingsDisplay'] = '<strong>Ranking:</strong> Define quais colunas serão exibidas no ranking. A classificação 
absoluta é a posição do usuário no ranking. A classificação relativa é a diferença dos pontos de experiência entre um 
usuário e seus vizinhos.';

$string['blockXpRankingSettingsAdditionalColumns'] = '<strong>Colunas adicionais:</strong> Determina quais colunas adicionais são 
exibidas no ranking. Para selecionar mais de uma coluna ou desmarcar uma coluna selecionada, pressione a tecla CTRL ou CMD 
enquanto clica.';

// Aba Configurações -> Proteção contra fraude
$string['blockXpFraudProtectionSettings'] = '<strong>Proteção contra fraude</strong>';

$string['blockXpFraudProtectionSettingsEnable'] = '<strong>Ativar proteção contra fraude:</strong> A proteção contra fraude 
oferece um mecanismo simples e barato para evitar que os estudantes abusem do sistema usando técnicas óbvias, como atualizar 
a mesma página indefinidamente ou repetir a mesma ação repetidas vezes.';

$string['blockXpFraudProtectionSettingsMaxActionsInterval'] = '<strong>Max. ações no intervalo de tempo:</strong> O número 
máximo de ações que contarão para ganho de pontos de experiência durante o intervalo de tempo fornecido. Qualquer ação 
subsequente será ignorada. Quando este valor está vazio ou é igual a zero, não é aplicado.';

$string['blockXpFraudProtectionSettingsTimeRequiredBetweenIdenticalActions'] = '<strong>Tempo requerido entre ações 
idênticas:</strong> O tempo mínimo necessário antes que uma ação que já ocorreu anteriormente seja aceita novamente. 
Uma ação é considerada idêntica se foi realizada no mesmo contexto e objeto; ler uma postagem no fórum será considerado 
idêntico se a mesma postagem for lida novamente. Quando esse valor está vazio ou igual a zero, ele não se aplica.';

// Aba Configurações -> Aparência do bloco
$string['blockXpBlockAppearanceSettings'] = '<strong>Aparência do bloco</strong>';

$string['blockXpBlockAppearanceSettingsTitle'] = '<strong>Título:</strong> O título do bloco.';

$string['blockXpBlockAppearanceSettingsIntroduction'] = '<strong>Introdução:</strong> Uma pequena mensagem de introdução 
exibida no bloco. Os estudantes podem descartar a mensagem e, nesse caso, eles não a verão novamente.';

$string['blockXpBlockAppearanceSettingsShowRankingSample'] = '<strong>Exibir amostra do ranking:</strong> A amostra do ranking 
exibe a classificação do usuário. Ele também tentará exibir as duas pessoas ao redor do usuário. Esse recurso requer que 
a tabela de classificação seja ativada e suas classificações sejam exibidas.';

$string['blockXpBlockAppearanceSettingsShowRecentRewards'] = '<strong>Mostrar recompensas recentes:</strong> Quando ativado, 
o bloco exibirá uma pequena lista de eventos recentes que recompensaram o estudante com pontos.';

// Aba XP+
$string['blockXpPlusTab'] = '<strong>XP+</strong>';

$string['blockXpPlusDescription'] = 'O Level Up XP+ é uma extensão paga que oferece funcionalidades extras, mas a gamificação efetiva pode ser alcançada apenas com o plugin base, sem a necessidade de adquirir a ferramenta adicional.';

////
$string['blockXpBlockConfigTab'] = 'Configurar Bloco';

$string['blockXpBlockConfigDescription'] = 'Esta aba permite configurar a posição do bloco do plugin na tela e sua 
visibilidade.';

$string['blockXpBlockPosition'] = '<strong>Posicionamento do Bloco:</strong> Define onde o bloco será exibido na página 
do curso.';

$string['blockXpBlockVisibility'] = '<strong>Visibilidade:</strong> Define se o bloco será visível ou não para os 
participantes.';

$string['blockXpPermissionsTab'] = 'Permissões';

$string['blockXpPermissionsDescription'] = 'Nesta aba, você pode definir quais permissões cada nível de usuário terá. 
Isso é útil para controlar o acesso a determinadas funcionalidades do plugin.';

$string['blockXpEditPermissions'] = '<strong>Editar Permissões:</strong> Permite ajustar as permissões para diferentes 
níveis de usuário.';

$string['blockXpCheckPermissionsTab'] = 'Checar Permissões';

$string['blockXpCheckPermissionsDescription'] = 'A aba Checar Permissões exibe uma lista de participantes e suas respectivas 
permissões no plugin.';

$string['blockXpParticipantsPermissions'] = '<strong>Lista de Participantes e Permissões:</strong> Mostra quais permissões 
cada usuário possui.';

// Links de apoio
$string['blockXpSupportLink1'] = 'Documentação oficial do plugin';

/**********************************************************************************************************************/

/**
 * Trail Format
 */

/****************************************** About ******************************************/
$string['formatTrail'] = 'Trail format';
$string['formatTrailDesc'] = 'Proporciona uma jornada gamificada onde os alunos seguem trilhas de aprendizado estruturadas.';

/*************************************** Permissions ***************************************/
$string['formatTrail:changeimagecontaineralignment'] = 'Alterar ou repor o alinhamento do container de imagem';
$string['formatTrail:changeimagecontainernavigation'] = 'Alterar ou repor a navegação do container de imagem';
$string['formatTrail:changeimagecontainersize'] = 'Alterar ou redefinir o tamanho do container da imagem';
$string['formatTrail:changeimageresizemethod'] = 'Alterar ou redefinir o método de redimensionamento da imagem';
$string['formatTrail:changeimagecontainerstyle'] = 'Alterar ou redefinir o estilo do container da imagem';
$string['formatTrail:changesectiontitleoptions'] = 'Alterar ou redefinir as opções do título da seção';

/**************************************** Tutorial ****************************************/

// Como acessar as configurações do plugin Trail Format
$string['trailFormatAccessSettingsTutorial'] = 'Como acessar as configurações do plugin Trail Format';

$string['trailFormatAccessSettingsDescription'] = 'Para configurar o plugin Trail Format no Moodle, siga os passos abaixo.';

$string['trailFormatAccessStep1'] = '<strong>Selecionar o Curso Desejado:</strong> No painel do Moodle, selecione o curso 
ao qual você deseja adicionar o Formato de Trilha.';

$string['trailFormatAccessStep2'] = '<strong>Acessar Configurações do Curso:</strong> Dentro do curso, clique na aba 
"Configurações" para acessar as configurações do curso.';

$string['trailFormatAccessStep3'] = '<strong>Formato de Curso:</strong> Na seção "Formato de curso", localize o campo 
"Formato" e selecione a opção "Formato de trilha" no menu suspenso.';

$string['trailFormatAccessStep4'] = '<strong>Configurações do Formato de Trilha:</strong> Após selecionar "Formato de trilha", 
os campos de configuração específicos para esse formato estarão disponíveis logo abaixo para serem ajustados conforme 
necessário.';

$string['trailFormatSettingsTitle'] = 'Como configurar os campos do Trail Format';

$string['trailFormatSettingsDescription'] = 'A configuração do Trail Format permite que você ajuste diversos aspectos 
visuais e funcionais do curso para otimizar a gamificação e o engajamento dos alunos. Embora os campos de cores não sejam 
obrigatórios para a gamificação, eles oferecem uma melhor estilização do curso, permitindo que você adapte o visual 
conforme suas necessidades e preferências.';

$string['trailFormatSettingsNumberOfSections'] = '<strong>Número de seções:</strong> Este campo define o número de seções 
no curso que terão o formato de trilha aplicado. Por padrão, ele já vem preenchido com a quantidade de seções do curso. 
Você pode ajustar esse número conforme necessário para incluir mais ou menos seções no formato de trilha.';

$string['trailFormatSettingsSectionHidden'] = '<strong>Seções escondidas:</strong> As seções ocultas podem ser exibidas 
aos estudantes como "não disponíveis" na página do curso ou mantidas completamente ocultas.';

$string['trailFormatSettingsCourseLayout'] = '<strong>Layout do curso:</strong> Seções do curso podem ser exibidas todas 
em uma página ou separadas em diversas páginas.';

$string['trailFormatSettingsHideSideNav'] = '<strong>Ocultar navegação lateral:</strong> Ocultar setas de navegação lateral.';

$string['trailFormatSettingsShowLockIcon'] = '<strong>Mostrar cadeado quando tiver restrição:</strong> Mostrar imagem do 
cadeado quando a seção tiver restrição.';

$string['trailFormatSettingsTrailStyle'] = '<strong>Estilo da Trilha:</strong> Define o estilo visual da trilha, como Pista, 
Tesouro, Rio, Quebra-cabeças 1 e Quebra-cabeças 2.';

$string['trailFormatSettingsCheckStyle'] = '<strong>Estilo do check:</strong> Escolha o estilo de check que aparecerá quando 
o estudante concluir todas as atividades com critérios de conclusão da seção, podendo ser Check, Estrela ou Curti.';

$string['trailFormatSettingsContainerimagealignmentDescription'] = '<strong>Alinhamento de container de imagem:</strong> 
Redefine o alinhamento do container de imagem para o valor padrão. Este alinhamento será aplicado da mesma forma que um 
curso exibido pela primeira vez no formato de trilha. Opções incluem "Esquerda", "Centro" e "Direita". Escolher "Centro" 
irá centralizar a imagem dentro do container, enquanto "Esquerda" e "Direita" irão alinhar a imagem à esquerda e à direita, 
respectivamente.';
