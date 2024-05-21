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
 * Default install plugin
 */

// Plugin Installation (Admin)
$string['defaultInstallInstallIntro'] = 'Plugin Installation (Admins Only)';

$string['defaultInstallInstallStep1'] = 'Click the "Install" button to open the plugin installation page.';

$string['defaultInstallInstallStep2'] = 'Drag the downloaded .zip file to the file area or click "Choose a file" to open the file directory on your computer.';

$string['defaultInstallInstallStep3'] = 'Click "Install plugin from ZIP file".';

$string['defaultInstallValidation'] = 'A plugin validation screen will be displayed. If the validation is successful, click "Continue".';

$string['defaultInstallMoodleVersionInfo'] = 'After verifying the plugin, a screen with information about the Moodle version will be displayed:';

$string['defaultInstallMoodleCheck'] = 'Moodle checks if all requirements for continued operation are met.';

$string['defaultInstallStatusOK'] = 'OK - The component is correct and without issues.';

$string['defaultInstallPluginVerification'] = 'Plugin Verification: On the "Plugin verification" screen, the plugin is already in the Moodle database and is ready to be updated. Click "Upgrade Moodle database now".';

$string['defaultInstallUpdateVersion'] = 'Updating to New Version: On the "Updating to new version" screen, click "Continue".';

$string['defaultInstallConfigIntro'] = 'Plugin Configuration';

$string['defaultInstallDefaultConfig'] = 'Default Plugin Configuration:';

$string['defaultInstallConfigNote'] = 'After installation, the default plugin configuration screen will be displayed. If there are no specific configurations for a course, the default settings will be used. Changing the default plugin settings is optional and should only be done if you want the plugin to adopt a specific behavior by default.';

$string['defaultInstallConfigFields'] = 'Configure Fields:';

$string['defaultInstallCourseConfig'] = 'Course-Specific Configuration';

$string['defaultInstallSupportLinks'] = 'Access the following links for more information and support';

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
$string['modalTitle'] = 'Installation and Configuration';
$string['blockGame'] = 'Block Game';
$string['levelUp'] = 'Level Up XP';
$string['formatTrail'] = 'Trail Format';

// Plugin Configuration
$string['blockGameUseAvatar'] = '<strong>Use Avatar:</strong> Allows the use of avatars.';

$string['blockGameReplaceAvatars'] = '<strong>Replace Avatar Images:</strong> Allows changing all available avatars.';

$string['blockGameAllowAvatarChange'] = '<strong>Allow Avatar Change in Course:</strong> Defines if participants can 
change their avatars.';

$string['blockGameShowPlayerInfo'] = '<strong>Show Player Information:</strong> Displays information from all the 
participant\'s courses.';

$string['blockGamePointForActivities'] = '<strong>Score Activity Grades:</strong> Converts activity grades into points.';

$string['blockGameDailyBonus'] = '<strong>Daily Bonus:</strong> Sets points per day of access.';

$string['blockGameBonusForBadge'] = '<strong>Bonus for Badge:</strong> Applies points for each badge earned.';

$string['blockGameShowRanking'] = '<strong>Show Ranking:</strong> Allows participants to see the ranking.';

$string['blockGamePreserveIdentity'] = '<strong>Preserve User Identity:</strong> Preserves the user\'s identity in the 
ranking.';

$string['blockGameShowScore'] = '<strong>Show Score:</strong> Displays participants\' scores.';

$string['blockGameShowLevel'] = '<strong>Show Level:</strong> Displays participants\' levels.';

$string['blockGameCustomLevelImages'] = '<strong>Replace Level Images:</strong> Allows changing all level images.';

$string['blockGameNumberOfLevels'] = '<strong>Number of Levels:</strong> Sets the number of levels for the courses.';

$string['blockGameSaveChanges'] = '<strong>Save Settings:</strong> After configuring the fields, click "Save changes".';

// Course-Specific Configuration
$string['blockGameAccessCourses'] = '<strong>Access My Courses:</strong> Go to "My courses" and select the desired course.';

$string['blockGameEditMode'] = '<strong>Edit Mode:</strong> In the top right corner of the screen, click "Turn editing on".';

$string['blockGameAddBlock'] = '<strong>Add Block:</strong> Open the "Block drawer" by clicking the arrow icon just 
below the "Turn editing on" button. Click "Add a block" and select the "Game" option. A plugin card will appear on the 
tab.';

$string['blockGameConfigureBlock'] = '<strong>Configure Game Block:</strong> Click the gear icon on the plugin card and 
select "Configure Game block". A modal with settings will appear.';

$string['blockGameBlockSettings'] = '<strong>Block Settings:</strong>';

$string['blockGameEditTitle'] = '<strong>Edit Title:</strong> Enter a title for the block.';

$string['blockGameShowCourseName'] = '<strong>Show Course Name:</strong> Displays or hides the course name.';

$string['blockGamePointActivities'] = '<strong>Score Activity Grades:</strong> Converts activity grades into points.';

$string['blockGameShowGroupRanking'] = '<strong>Show Group Ranking:</strong> Displays the group ranking.';

$string['blockGameGroupPointsCalculation'] = '<strong>Group Points Calculation:</strong> Private and disabled field.';

$string['blockGameRankingListLimit'] = '<strong>Ranking List Limit:</strong> Sets the number of participants displayed 
in the ranking.';
$string['blockGamePreserveIdentity'] = '<strong>Preserve User Identity:</strong> Preserves the user\'s identity in the 
ranking.';
$string['blockGameShowScore'] = '<strong>Show Score:</strong> Displays the score in the block.';

$string['blockGameShowLevel'] = '<strong>Show Level:</strong> Displays the level in the block.';

$string['blockGameNumberOfLevels'] = '<strong>Number of Levels:</strong> Sets the number of levels for the course.';

$string['blockGameSectionCompletionPoints'] = '<strong>Section Completion Points Settings:</strong> Configures the points 
for each course section.';

$string['blockGameActivityCompletionPoints'] = '<strong>Activity Completion Points:</strong> Configures the points for 
each course activity. In the list of course topics, click the edit icon and configure the points in the "Game points" tab.';

$string['blockGameBlockDisplaySettings'] = '<strong>Where to Display This Block:</strong> Defines where the block will 
appear.';

$string['blockGamePageSettings'] = '<strong>On This Page:</strong> Defines the visibility and position of the block on 
the page.';

$string['blockGameSaveBlockConfig'] = '<strong>Save Settings:</strong> After configuring the block, click "Save changes".';

$string['blockGameSupportLink1'] = 'How to install plugins';

$string['blockGameSupportLink2'] = 'How to install and configure the Block Game plugin';

$string['blockGameSupportLink3'] = 'Gamification in Practice with the Moodle Platform';

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
