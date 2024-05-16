<?php

/**
 * Gamification Helper
 */

$string['pluginname'] = 'Auxiliar de configuração para Gamificação do Moodle';

$string['installplugin'] = 'Instalar plugin';

// Permissions
$string['gamificationhelper:view'] = 'Acesso ao Auxiliar de Gamificação';

$string['gamificationhelper:manage'] = 'Permite configurar o Auxiliar de Gamificação';

// General Moodle permissions
$string['moodleSite:manageblocks'] = 'Gerenciar blocos';

// Modal
$string['modalTitle'] = 'Instalação e Configuração de {$a}';

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
 * Block Game
 */

// About
$string['blockGame'] = 'Block Game';

$string['blockGameDesc'] = 'Transforma atividades e recursos em uma experiência de jogo por blocos.';

// Permissions
$string['blockGame:addinstance'] = 'Adicionar um novo bloco Jogo';

// Tutorial
$string['modalTitle'] = 'Instalação e Configuração';

$string['blockGameInstallIntro'] = 'Instalação do Plugin (Apenas para Administradores)';

$string['blockGameDownload'] = 'Baixar Plugin: Acesse Block Game e clique em "Download".';

$string['blockGameInstallStep1'] = 'Arraste o arquivo .zip que foi baixado até a área de arquivos ou clique em "Escolha 
um arquivo" para abrir o diretório de arquivos do seu computador.';

$string['blockGameInstallStep2'] = 'Clique em "Instalar plugin do arquivo ZIP".';

$string['blockGameValidation'] = 'Validação do Plugin: Abrirá uma tela de validação do plugin. Caso seja bem-sucedido, 
clique em "Continuar".';

$string['blockGameMoodleVersionInfo'] = 'Informação sobre a Versão do Moodle: Após a verificação do plugin, abrirá a tela 
de informação sobre a versão do Moodle:';

$string['blockGameMoodleCheck'] = 'O Moodle checa se todos os requisitos para continuar rodando estão sendo cumpridos.';

$string['blockGameStatusOK'] = 'OK - O componente está correto e sem problemas.';

$string['blockGameStatusVerify'] = 'Verificar - ...';

$string['blockGamePluginVerification'] = 'Verificação de Plugins: Na tela "Verificação de plugins", o plugin já está no 
banco de dados do Moodle e está pronto para atualizar. Clique em "Atualizar a base de dados do Moodle agora".';

$string['blockGameUpdateVersion'] = 'Atualizando para Nova Versão: Na tela "Atualizando para nova versão", clique em 
"Continuar".';

$string['blockGameConfigIntro'] = 'Configuração do Plugin';

$string['blockGameDefaultConfig'] = 'Configuração Padrão do Plugin:';

$string['blockGameConfigNote'] = 'Após a instalação, abrirá a tela de configuração padrão do plugin. Se não houver 
configuração específica para um curso, as configurações padrão serão utilizadas. Alterar os dados padrão do plugin é opcional.';

$string['blockGameConfigFields'] = 'Configurar Campos:';

$string['blockGameUseAvatar'] = 'Utilizar Avatar: Permite o uso de avatares.';

$string['blockGameReplaceAvatars'] = 'Substituir Imagens de Avatares: Permite alterar todos os avatares disponíveis.';

$string['blockGameAllowAvatarChange'] = 'Permitir Mudança de Avatar no Curso: Define se os participantes podem alterar 
seus avatares.';

$string['blockGameShowPlayerInfo'] = 'Mostrar Informações do Jogador: Mostra informações de todos os cursos do participante.';

$string['blockGamePointForActivities'] = 'Pontuar Notas de Atividades: Contabiliza a nota das atividades como pontos.';

$string['blockGameDailyBonus'] = 'Bônus do Dia: Define pontos por dia de acesso.';

$string['blockGameBonusForBadge'] = 'Bônus para Emblema: Aplica pontuação para cada emblema conquistado.';

$string['blockGameShowRanking'] = 'Mostrar Classificação: Permite visualizar a classificação.';

$string['blockGamePreserveIdentity'] = 'Preservar Identidade do Usuário: Preserva a identidade do usuário na classificação.';

$string['blockGameShowScore'] = 'Mostrar Pontuação: Mostra a pontuação dos participantes.';

$string['blockGameShowLevel'] = 'Mostrar Nível: Mostra o nível dos participantes.';

$string['blockGameCustomLevelImages'] = 'Substituir Imagens de Níveis: Permite alterar todas as imagens dos níveis.';

$string['blockGameNumberOfLevels'] = 'Número de Níveis: Define o número de níveis para os cursos.';

$string['blockGameSaveChanges'] = 'Salvar Configurações: Após checar os campos, clique em "Salvar mudanças".';

$string['blockGameCourseConfig'] = 'Configuração para um Curso Específico';

$string['blockGameAccessCourses'] = 'Acessar Meus Cursos: Vá em "Meus cursos" e selecione o curso desejado.';

$string['blockGameEditMode'] = 'Modo de Edição: No canto superior direito da tela, clique em "Modo de edição".';

$string['blockGameAddBlock'] = 'Adicionar Bloco: Abra a "Gaveta de blocos" e clique em "Adicionar um bloco", selecionando 
a opção "Jogo". Um card do plugin aparecerá na aba.';

$string['blockGameConfigureBlock'] = 'Configurar Bloco Jogo: Clique no ícone de engrenagem no card do plugin e selecione 
"Configurar bloco Jogo". Aparecerá um modal com configurações.';

$string['blockGameBlockSettings'] = 'Configurações do Bloco:';

$string['blockGameEditTitle'] = 'Editar Título: Informe um título para o bloco.';

$string['blockGameShowCourseName'] = 'Mostrar Nome do Curso: Exibe ou não o nome do curso.';

$string['blockGameShowPlayerInfo'] = 'Mostrar Informações do Jogador: Mostra informações de todos os cursos do participante.';

$string['blockGamePointActivities'] = 'Pontuar Notas de Atividades: Contabiliza notas como pontos.';

$string['blockGameDailyBonus'] = 'Bônus do Dia: Define pontos por dia de acesso.';

$string['blockGameShowGroupRanking'] = 'Mostrar Classificação por Grupo: Mostra a classificação por grupo.';

$string['blockGameGroupPointsCalculation'] = 'Cálculo para Pontos de Grupo: Campo privado e desabilitado.';

$string['blockGameShowRanking'] = 'Mostrar Classificação: Permite o participante ver a classificação.';

$string['blockGameRankingListLimit'] = 'Limite da Lista de Classificação: Define a quantidade de participantes exibidos 
na classificação.';
$string['blockGamePreserveIdentity'] = 'Preservar Identidade do Usuário: Preserva a identidade do usuário na classificação.';

$string['blockGameShowScore'] = 'Mostrar Pontuação: Mostra a pontuação no bloco.';

$string['blockGameShowLevel'] = 'Mostrar Nível: Mostra o nível no bloco.';

$string['blockGameNumberOfLevels'] = 'Número de Níveis: Define o número de níveis do curso.';

$string['blockGameSectionCompletionPoints'] = 'Configurações de Pontuação de Seção: Configura a pontuação de cada seção 
do curso.';

$string['blockGameActivityCompletionPoints'] = 'Pontuação por Conclusão de Atividade: Configura a pontuação de cada 
atividade do curso. Na lista de tópicos, clique no ícone de edição e configure a pontuação na aba "Pontos do jogo".';

$string['blockGameBlockDisplaySettings'] = 'Onde Exibir Este Bloco: Define onde o bloco aparecerá.';

$string['blockGamePageSettings'] = 'Nesta Página: Define a visibilidade e posição do bloco na página.';

$string['blockGameSaveBlockConfig'] = 'Salvar Configurações: Após configurar o bloco, clique em "Salvar mudanças".';

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