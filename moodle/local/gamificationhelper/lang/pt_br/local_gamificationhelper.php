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
$string['blockGameInstallIntro'] = 'Este guia passo a passo ajudará você a instalar o plugin Block XP em seu ambiente 
Moodle. Certifique-se de seguir cada passo cuidadosamente para garantir uma instalação bem-sucedida.';

$string['blockGameInstallStep1'] = 'Primeiro, localize o arquivo .zip que você baixou. Você precisa arrastá-lo para a área 
de upload no Moodle ou clicar em "Escolher um arquivo" para abrir o explorador de arquivos do seu computador e selecionar 
o arquivo manualmente.';

$string['blockGameInstallStep2'] = 'No Moodle, na área de administração de plugins, clique em "Instalar plugin do arquivo 
ZIP". Isso abrirá uma tela onde você deve carregar o arquivo .zip do plugin.';

$string['blockGameInstallStep3'] = 'Após carregar o arquivo, uma tela de validação mostrará se o arquivo do plugin está 
correto e pronto para ser instalado. Clique em "Continuar" se tudo estiver correto para prosseguir com a instalação.';

$string['blockGameInstallStep4'] = 'O Moodle então verificará se o plugin é compatível com sua versão atual do Moodle e se 
todos os requisitos necessários estão satisfeitos. Uma lista de status aparecerá mostrando "OK" para requisitos satisfeitos 
ou "Verificar" para itens que precisam de atenção.';

$string['blockGameInstallStep5'] = 'Na tela final de verificação, você verá a opção "Atualizar a base de dados do Moodle 
agora". Clique nesse botão para completar a instalação do plugin.';

$string['blockGameInstallStep6'] = 'Após clicar para atualizar o banco de dados, uma tela de confirmação mostrará 
"Atualizando para nova versão". Clique em "Continuar" para finalizar a instalação.';

$string['blockGameConfigIntro'] = 'Após a instalação do Block XP, você precisará configurá-lo para atender às necessidades 
do seu curso. Este guia explica como ajustar cada configuração disponível no plugin.';

$string['blockGameGeneralSettings'] = 'Na administração do plugin, você encontrará várias opções para personalizar como o 
Block XP funciona no seu curso. Aqui estão os detalhes de cada configuração:';

$string['blockGameUseAvatar'] = 'Define se o uso de avatar será permitido por padrão. Avatares podem ser usados para 
personalizar a experiência do aluno e aumentar o engajamento.';

$string['blockGameReplaceAvatars'] = 'Permite alterar todos os avatares disponíveis para os usuários do plugin. Você pode 
carregar novas imagens se desejar personalizar os avatares padrão.';

$string['blockGameAllowAvatarChange'] = 'Permite que os participantes do curso alterem seus avatares. Isso pode aumentar a 
personalização mas pode diminuir a consistência visual se muitas alterações forem permitidas.';

$string['blockGameShowPlayerInfo'] = 'Mostra informações do jogador, como progresso e conquistas, em todos os cursos em que 
ele participa, aumentando a transparência e motivação.';

$string['blockGamePointForActivities'] = 'Contabiliza a nota das atividades como pontos, convertendo resultados acadêmicos 
em elementos gamificados para motivar os alunos.';

$string['blockGameDailyBonus'] = 'Define pontos por dia de acesso, incentivando os alunos a acessarem o curso regularmente 
para maximizar seus pontos.';

$string['blockGameLevelDisplay'] = 'Permite mostrar o nível atual do aluno, proporcionando um sentido de progresso e 
conquista.';

$string['blockGameCustomLevelImages'] = 'Permite carregar imagens personalizadas para cada nível, permitindo que você 
customize completamente a aparência dos níveis no curso.';

$string['blockGameCourseConfigIntro'] = 'Para configurar o Block XP em um curso específico:';

$string['blockGameAddBlock'] = 'No "Modo de edição" do curso, use a "Gaveta de blocos" para adicionar o bloco "Jogo" ao curso.';

$string['blockGameConfigureBlock'] = 'Configure o bloco recém-adicionado para definir específicos de gamificação, como 
pontuação por atividades e configurações de visualização.';

$string['blockGameConfigSaveChanges'] = 'Após ajustar todas as configurações, não esqueça de clicar em "Salvar mudanças" 
para aplicar as novas configurações ao curso.';

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