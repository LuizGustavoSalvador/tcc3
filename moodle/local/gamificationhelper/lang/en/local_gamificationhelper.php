<?php

/**
 * Gamification Helper
 */

$string['pluginname'] = 'Moodle Gamification Helper';

$string['installplugin'] = 'Install new plugin';

// Permissions
$string['gamificationhelper:view'] = 'Access to the Gamification Helper';

$string['gamificationhelper:manage'] = 'Allows configuration of the Gamification Helper';

// General Moodle permissions
$string['moodleSite:manageblocks'] = 'Manage blocks on a page';

// Modal
$string['modalTitle'] = 'Installation and Configuration of {$a}';

/**********************************************************************************************************************/

/**
 * Buttons
 */

$string['btnAbout'] = 'About the plugin';

$string['btnAboutDesc'] = 'Opens the plugin’s page on Moodle for more information.';

$string['btnPermissions'] = 'Installation and configuration permissions';

$string['btnPermissionsDesc'] = 'Displays a modal with the necessary permissions to use and configure the plugin.';

$string['btnDownload'] = 'Download';

$string['btnDownloadDesc'] = 'Available only if the plugin is not already installed, allows direct download of the plugin.';

$string['btnInstall'] = 'Install and config';

$string['btnInstallDesc'] = 'Opens a modal with step-by-step instructions for installing and configuring the plugin.';

$string['btnStart'] = 'Start';

$string['btnNext'] = 'Next';

$string['btnBack'] = 'Back';

/**********************************************************************************************************************/

/**
 * Main Page
 */
$string['welcome'] = 'Welcome to the Gamification Helper!';

$string['introduction'] = 'This plugin is designed to assist teachers in selecting the best gamification plugins based 
on the educational objectives they wish to achieve and the most suitable gamification model to apply. 
We use the Octalysis framework as the theoretical basis for our recommendations.';

$string['adminRequired'] = 'To install any recommended gamification plugin, you must have administrator permissions due 
to Moodle’s installation control policies. If you are a teacher and wish for a plugin to be installed, please request 
installation from your system administrator.';

$string['pluginInstallation'] = 'At the end of the process, recommended plugins will be listed based on your chosen 
objectives and approach style. You can explore each plugin in detail:';

$string['availablePlugins'] = 'Available gamification plugins:';

$string['alreadyInstalled'] = 'plugin already installed';

$string['pluginInstalledNote'] = 'Plugins that are already installed are indicated with the note 
"(' . $string['alreadyInstalled'] . ')" next to the name.';

/**********************************************************************************************************************/

/**
 * Page - Objectives
 */

$string['defineObjectivesTitle'] = 'Define the objectives and approach';

$string['defineObjectivesDescription'] = 'In this step, define which objectives you wish to achieve and which style of 
gamification you would like to adopt.';

$string['txtListObjectives'] = 'Explore the following objectives for gamification:';

$string['developmentAndAchievement'] = 'Development and Achievement';
$string['developmentAndAchievementDesc'] = 'Encourage overcoming and accomplishment through point systems and rewards, 
promoting continuous development and a sense of achievement among students.';

$string['ownershipAndPossession'] = 'Ownership and Possession';
$string['ownershipAndPossessionDesc'] = 'Promote the accumulation and personalization of resources that students feel 
are their own, strengthening emotional connection and engagement with the learning material.';

$string['empowermentAndCreativity'] = 'Empowerment and Creativity';
$string['empowermentAndCreativityDesc'] = 'Provide freedom to explore and create unique solutions within a structured 
environment, stimulating innovation and critical thinking.';

$string['explorationAndDiscovery'] = 'Exploration and Discovery';
$string['explorationAndDiscoveryDesc'] = 'Stimulate curiosity and autonomous exploration of content, allowing students 
to discover new knowledge and connections in an innovative way.';

$string['socialInfluenceAndRelatedness'] = 'Social Influence and Relatedness';
$string['socialInfluenceAndRelatednessDesc'] = 'Facilitate meaningful interactions and collaborations among students, 
promoting a sense of community and belonging that enhances the learning experience.';

$string['txtListApproach'] = 'Select from the following gamification approach styles:';

$string['competitive'] = 'Competitive';
$string['competitiveDesc'] = 'Create an environment where students compete against each other, aiming for individual 
excellence through leaderboards and rewards that highlight standout performance.';

$string['cooperative'] = 'Cooperative';
$string['cooperativeDesc'] = 'Develop an environment that promotes joint work and collaboration among students to 
achieve common goals, using tools and activities that encourage cooperation.';

$string['independent'] = 'Independent';
$string['independentDesc'] = 'Allow students to lead their own learning, exploring content autonomously and utilizing 
resources that facilitate self-education and the personalization of their educational path.';

$string['epicNarrative'] = 'Epic Narrative';
$string['epicNarrativeDesc'] = 'Engage students in a grand story or mission that transcends everyday activities, 
providing a greater and more inspiring purpose for the learning process.';

$string['promptSelect'] = 'Please select your preferences below to tailor the gamification experience to your 
educational needs:';

$string['selectObjective'] = 'Select the Objective to be Achieved:';

$string['selectStyle'] = 'Select the Gamification Approach Style:';

/**********************************************************************************************************************/

/**
 * Page - Recommendation plugin
 */

$string['selectObjective'] = 'Select the Objective to be Achieved:';

$string['noRecommendationsTitle'] = 'No Matching Plugins Found';

$string['noRecommendations'] = 'Currently, no available plugins directly match the selected objective of "{$a->objective}" 
and the approach of "{$a->approach}". This tool explores a limited set of plugins to demonstrate how gamification can 
be implemented effectively in Moodle. This may occur due to:';

$string['noRecommendationsReason1'] = 'The specific features required by your chosen combination are not supported by 
the current set of plugins.';

$string['noRecommendationsReason2'] = 'The uniqueness of your selected objective and approach, suggesting a potential 
area for future plugin development or customization.';

$string['noRecommendationsConclusion'] = 'This scenario highlights the potential for new developments in Moodle 
gamification. We encourage you to engage with the Moodle community or plugin developers to explore or initiate new 
gamification solutions that meet your educational needs.';

$string['recommendationPluginDesc'] = 'The plugins listed below have been selected based on the objectives and 
approaches you specified. They are designed to enrich the learning environment with gamification elements that can 
enhance student engagement and motivation.';

$string['recommendationPluginTitlePage'] = 'Recommended Gamification Plugins for Your Course';

/**********************************************************************************************************************/

/**
 * Modal permission
 */

$string['permissionsDescription'] = 'This modal displays the status of the permissions required to use the features 
of this plugin. Each icon and color represent a different state:';


$string['permissionGranted'] = '<strong>Green</strong>: The permission has been granted.';

$string['permissionDenied'] = '<strong>Red</strong>: The permission has not been granted. Please request permissions 
from the administrator to use/configure this plugin.';

$string['permissionDeniedNotInstalled'] = '<strong>Yellow</strong>: The permission has not been granted and the plugin 
is not yet installed. Permissions listed in yellow will be validated as allowed or not once the plugin is installed.';

$string['permissionsListTitle'] = 'List of permissions:';

/**********************************************************************************************************************/

/**
 * Block Game
 */

// About
$string['blockGame'] = 'Block Game';

$string['blockGameDesc'] = 'Transforms activities and resources into a block-based gaming experience.';

// Permissions
$string['blockGame:addinstance'] = 'Add a new Game block';

// Tutorial
$string['blockGameInstallIntro'] = 'This step-by-step guide will help you install the Block XP plugin on your Moodle 
environment. Please follow each step carefully to ensure a successful installation.';

$string['blockGameInstallStep1'] = 'First, locate the .zip file you have downloaded. You need to drag it to the upload 
area in Moodle or click "Choose a file" to open your computer\'s file explorer and select the file manually.';

$string['blockGameInstallStep2'] = 'In Moodle, within the plugin administration area, click on "Install plugin from ZIP 
file." This will open a screen where you should upload the plugin\'s .zip file.';

$string['blockGameInstallStep3'] = 'After uploading the file, a validation screen will show if the plugin file is correct 
and ready to be installed. Click "Continue" if everything is correct to proceed with the installation.';

$string['blockGameInstallStep4'] = 'Moodle will then check if the plugin is compatible with your current version of Moodle 
and if all necessary requirements are met. A status list will appear showing "OK" for satisfied requirements or "Check" for items that need attention.';

$string['blockGameInstallStep5'] = 'On the final verification screen, you will see the option "Upgrade Moodle database 
now." Click this button to complete the plugin installation.';

$string['blockGameInstallStep6'] = 'After clicking to update the database, a confirmation screen will show "Upgrading to 
a new version." Click "Continue" to finalize the installation.';

$string['blockGameConfigIntro'] = 'After installing Block XP, you will need to configure it to suit your course\'s needs. 
This guide explains how to adjust each available setting within the plugin.';

$string['blockGameGeneralSettings'] = 'In the plugin administration, you will find several options to customize how 
Block XP functions in your course. Here are the details of each setting:';

$string['blockGameUseAvatar'] = 'Defines whether the use of an avatar will be allowed by default. Avatars can be used to 
personalize the student experience and increase engagement.';

$string['blockGameReplaceAvatars'] = 'Allows you to change all the avatars available to plugin users. You can upload new 
images if you wish to customize the default avatars.';

$string['blockGameAllowAvatarChange'] = 'Allows course participants to change their avatars. This can increase 
personalization but may reduce visual consistency if many changes are allowed.';

$string['blockGameShowPlayerInfo'] = 'Displays player information, such as progress and achievements, across all courses 
they are enrolled in, increasing transparency and motivation.';

$string['blockGamePointForActivities'] = 'Counts the grade of activities as points, converting academic results into 
gamified elements to motivate students.';

$string['blockGameDailyBonus'] = 'Sets points for daily access, encouraging students to access the course regularly to 
maximize their points.';

$string['blockGameLevelDisplay'] = 'Allows displaying the current level of the student, providing a sense of progress and 
achievement.';

$string['blockGameCustomLevelImages'] = 'Allows you to upload custom images for each level, enabling you to fully customize 
the appearance of levels in the course.';

$string['blockGameCourseConfigIntro'] = 'To configure Block XP in a specific course:';

$string['blockGameAddBlock'] = 'In the course\'s "Edit mode," use the "Blocks drawer" to add the "Game" block to the course.';

$string['blockGameConfigureBlock'] = 'Configure the newly added block to set gamification specifics, such as scoring for 
activities and display settings.';

$string['blockGameConfigSaveChanges'] = 'After adjusting all the settings, do not forget to click "Save changes" to apply 
the new settings to the course.';

/**********************************************************************************************************************/

/**
 * Level Up XP - Gamification
 */

// About
$string['levelUp'] = 'Level Up XP - Gamification';

$string['levelUpDesc'] = 'Enables the creation of experience point systems that motivate students through visual 
progression and rewards.';

// Permissions
$string['blockXp:manage'] = 'Manage all aspects of experience points';

$string['blockXp:viewlogs'] = 'View the logs';

$string['blockXp:viewreport'] = 'View the report';

$string['blockXp:addinstance'] = 'Add a new block';

// Tutorial

/**********************************************************************************************************************/

/**
 * Trail Format
 */

// About
$string['formatTrail'] = 'Trail format';

$string['formatTrailDesc'] = 'Provides a gamified journey where students follow structured learning paths.';

// Permissions
$string['formatTrail:changeimagecontaineralignment'] = 'Change or reset the image container alignment';

$string['formatTrail:changeimagecontainernavigation'] = 'Change or reset the image container navigation';

$string['formatTrail:changeimagecontainersize'] = 'Change or reset the image container size';

$string['formatTrail:changeimagecontainerstyle'] = 'Change or reset the image container style';

$string['formatTrail:changeimageresizemethod'] = 'Change or reset the image resize method';

$string['formatTrail:changesectiontitleoptions'] = 'Change or reset the section title options';

// Tutorial