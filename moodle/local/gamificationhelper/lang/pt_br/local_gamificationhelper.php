<?php

/**
 * Gamification Helper
 */

$string['pluginname'] = 'Auxiliar de configuração para Gamificação do Moodle';

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

$string['btnInstall'] = 'Instalação';
$string['btnInstallDesc'] = 'Abre uma modal com instruções passo a passo para instalar e configurar o plugin.';

$string['btnStart'] = 'Iniciar o guia';

$string['btnNext'] = 'Próximo';

$string['btnBack'] = 'Voltar';

/**********************************************************************************************************************/

/**
 * Main Page
 */

$string['welcome'] = 'Bem-vindo ao Auxiliar de Gamificação!';

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

$string['explorationAndDiscovery'] = 'Exploração e Descoberta';
$string['explorationAndDiscoveryDesc'] = 'Estimular a curiosidade e a exploração autônoma dos conteúdos, permitindo 
que os alunos descubram novos conhecimentos e conexões de maneira inovadora.';

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

$string['defaultInstallDefaultConfig'] = 'Configuração Padrão do Plugin';

$string['defaultInstallConfigNote'] = 'Após a instalação, a tela de configuração padrão do plugin será exibida. Se não 
houver configurações específicas para um curso, as configurações padrão serão utilizadas. Alterar os dados padrão do 
plugin é opcional e deve ser feito apenas se você desejar que o plugin adote um comportamento específico por padrão.';

$string['defaultInstallConfigFields'] = 'Configurar Campos:';

$string['defaultInstallCourseConfig'] = 'Configuração para um Curso Específico';

$string['defaultInstallSupportLinks'] = 'Acesse os seguintes links para obter mais informações e suporte';

/**********************************************************************************************************************/

/**
 * Block Game
 */

// About
$string['blockGame'] = 'Block Game';

$string['blockGameDesc'] = 'Transforma atividades e recursos em uma experiência de jogo por blocos.';

// Permissions
$string['blockGame:addinstance'] = 'Adicionar um novo bloco Jogo';

// Tutorial

$string['blockGame'] = 'Block Game';
$string['levelUp'] = 'Level Up XP';
$string['formatTrail'] = 'Trail Format';

// Configuração do Plugin
$string['blockGameUseAvatar'] = '<strong>Utilizar Avatar:</strong> Permite o uso de avatares.';

$string['blockGameReplaceAvatars'] = '<strong>Substituir Imagens de Avatares:</strong> Permite alterar todos os avatares 
disponíveis.';

$string['blockGameAllowAvatarChange'] = '<strong>Permitir Mudança de Avatar no Curso:</strong> Define se os participantes 
podem alterar seus avatares.';

$string['blockGameShowPlayerInfo'] = '<strong>Mostrar Informações do Jogador:</strong> Exibe informações de todos os cursos 
do participante.';

$string['blockGamePointForActivities'] = '<strong>Pontuar Notas de Atividades:</strong> Contabiliza a nota das atividades 
como pontos.';

$string['blockGameDailyBonus'] = '<strong>Bônus do Dia:</strong> Define pontos por dia de acesso.';

$string['blockGameBonusForBadge'] = '<strong>Bônus para Emblema:</strong> Aplica pontos para cada emblema conquistado.';

$string['blockGameShowRanking'] = '<strong>Mostrar Classificação:</strong> Permite que os participantes vejam a 
classificação.';

$string['blockGamePreserveIdentity'] = '<strong>Preservar Identidade do Usuário:</strong> Preserva a identidade do usuário 
na classificação.';

$string['blockGameShowScore'] = '<strong>Mostrar Pontuação:</strong> Exibe a pontuação dos participantes.';

$string['blockGameShowLevel'] = '<strong>Mostrar Nível:</strong> Exibe o nível dos participantes.';

$string['blockGameCustomLevelImages'] = '<strong>Substituir Imagens de Níveis:</strong> Permite alterar todas as imagens 
dos níveis.';

$string['blockGameNumberOfLevels'] = '<strong>Número de Níveis:</strong> Define o número de níveis para os cursos.';

$string['blockGameSaveChanges'] = '<strong>Salvar Configurações:</strong> Após configurar os campos, clique em "Salvar 
mudanças".';

// Configuração para um Curso Específico
$string['blockGameAccessCourses'] = '<strong>Acessar Meus Cursos:</strong> Vá em "Meus cursos" e selecione o curso 
desejado.';

$string['blockGameEditMode'] = '<strong>Modo de Edição:</strong> No canto superior direito da tela, clique em "Modo de 
edição".';

$string['blockGameAddBlock'] = '<strong>Adicionar Bloco:</strong> Abra a "Gaveta de blocos" clicando no ícone de seta 
logo abaixo do botão de "Modo de edição". Clique em "Adicionar um bloco" e selecione a opção "Jogo". Um card do plugin 
aparecerá na aba.';

$string['blockGameConfigureBlock'] = '<strong>Configurar Bloco Jogo:</strong> Clique no ícone de engrenagem dentro do 
card do plugin e selecione "Configurar bloco Jogo". Aparecerá um modal com as configurações.';

$string['blockGameBlockSettings'] = '<strong>Configurações do Bloco:</strong>';

$string['blockGameEditTitle'] = '<strong>Editar Título:</strong> Informe um título para o bloco.';

$string['blockGameShowCourseName'] = '<strong>Mostrar Nome do Curso:</strong> Exibe ou não o nome do curso.';

$string['blockGamePointActivities'] = '<strong>Pontuar Notas de Atividades:</strong> Contabiliza as notas das atividades 
como pontos.';
$string['blockGameShowGroupRanking'] = '<strong>Mostrar Classificação por Grupo:</strong> Exibe a classificação por grupo.';

$string['blockGameGroupPointsCalculation'] = '<strong>Cálculo para Pontos de Grupo:</strong> Campo privado e desabilitado.';

$string['blockGameRankingListLimit'] = '<strong>Limite da Lista de Classificação:</strong> Define o número de 
participantes exibidos na classificação.';

$string['blockGamePreserveIdentity'] = '<strong>Preservar Identidade do Usuário:</strong> Preserva a identidade do 
usuário na classificação.';

$string['blockGameShowScore'] = '<strong>Mostrar Pontuação:</strong> Exibe a pontuação no bloco.';

$string['blockGameShowLevel'] = '<strong>Mostrar Nível:</strong> Exibe o nível no bloco.';

$string['blockGameNumberOfLevels'] = '<strong>Número de Níveis:</strong> Define o número de níveis do curso.';

$string['blockGameSectionCompletionPoints'] = '<strong>Configurações de Pontuação de Seção:</strong> Configura a 
pontuação de cada seção do curso.';

$string['blockGameActivityCompletionPoints'] = '<strong>Pontuação por Conclusão de Atividade:</strong> Configura a 
pontuação de cada atividade do curso. Na lista de tópicos, clique no ícone de edição e configure a pontuação na aba 
"Pontos do jogo".';

$string['blockGameBlockDisplaySettings'] = '<strong>Onde Exibir Este Bloco:</strong> Define onde o bloco aparecerá.';

$string['blockGamePageSettings'] = '<strong>Nesta Página:</strong> Define a visibilidade e posição do bloco na página.';

$string['blockGameSaveBlockConfig'] = '<strong>Salvar Configurações:</strong> Após configurar o bloco, clique em 
"Salvar mudanças".';

$string['blockGameSupportLink1'] = 'Como instalar plugins';

$string['blockGameSupportLink2'] = 'Como instalar e configurar o plugin Block Game';

$string['blockGameSupportLink3'] = 'Gamificação na Prática com a Plataforma Moodle';


/**********************************************************************************************************************/

/**
 * Level Up XP - Gamification
 */

// About
$string['levelUp'] = 'Level Up XP - Gamification';
$string['levelUpDesc'] = 'Permite a criação de sistemas de pontos de experiência que motivam os alunos através de 
progressão visual e recompensas.';

// Permissions
$string['blockXp:addinstance'] = 'Adicionar um novo bloco';
$string['blockXp:manage'] = 'Gerenciar todos os aspectos dos pontos de experiência';
$string['blockXp:viewlogs'] = 'Acessar os logs';
$string['blockXp:viewreport'] = 'Ver o relatório';

/**********************************************************************************************************************/

/**
 * Trail Format
 */

// About
$string['formatTrail'] = 'Trail format';
$string['formatTrailDesc'] = 'Proporciona uma jornada gamificada onde os alunos seguem trilhas de aprendizado estruturadas.';

// Permissions
$string['formatTrail:changeimagecontaineralignment'] = 'Alterar ou repor o alinhamento do container de imagem';
$string['formatTrail:changeimagecontainernavigation'] = 'Alterar ou repor a navegação do container de imagem';
$string['formatTrail:changeimagecontainersize'] = 'Alterar ou redefinir o tamanho do container da imagem';
$string['formatTrail:changeimageresizemethod'] = 'Alterar ou redefinir o método de redimensionamento da imagem';
$string['formatTrail:changeimagecontainerstyle'] = 'Alterar ou redefinir o estilo do container da imagem';
$string['formatTrail:changesectiontitleoptions'] = 'Alterar ou redefinir as opções do título da seção';
