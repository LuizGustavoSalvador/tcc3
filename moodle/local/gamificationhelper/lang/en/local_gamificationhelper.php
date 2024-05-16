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
$string['modalTitle'] = 'Installation and Configuration';
$string['blockGame'] = 'Block Game';
$string['levelUp'] = 'Level Up XP';
$string['formatTrail'] = 'Trail Format';

// Installation of the Plugin (Admin Only)
$string['blockGameInstallIntro'] = 'Installation of the Plugin (Admin Only)';
$string['blockGameDownload'] = 'Download Plugin: Go to Block Game and click "Download".';
$string['blockGameInstallStep1'] = 'Drag the .zip file you downloaded to the file area or click "Choose a file" to open your computer\'s file directory.';
$string['blockGameInstallStep2'] = 'Click "Install plugin from ZIP file".';
$string['blockGameValidation'] = 'Plugin Validation: A plugin validation screen will appear. If successful, click "Continue".';
$string['blockGameMoodleVersionInfo'] = 'Moodle Version Information: After the plugin is verified, a screen will appear with information about the Moodle version:';
$string['blockGameMoodleCheck'] = 'Moodle checks if all requirements to continue running are met.';
$string['blockGameStatusOK'] = 'OK - The component is correct and without any issues.';
$string['blockGameStatusVerify'] = 'Verify - ...';
$string['blockGamePluginVerification'] = 'Plugin Verification: On the "Plugin Verification" screen, the plugin is already in the Moodle database and is ready to update. Click "Update the Moodle database now".';
$string['blockGameUpdateVersion'] = 'Updating to New Version: On the "Updating to new version" screen, click "Continue".';

// Plugin Configuration
$string['blockGameConfigIntro'] = 'Plugin Configuration';

$string['blockGameDefaultConfig'] = 'Default Plugin Configuration:';

$string['blockGameConfigNote'] = 'After installation, the plugin\'s default configuration screen will open. If there is 
no specific configuration for a course, the default configurations will be used. Changing the plugin\'s default settings 
is optional.';

$string['blockGameConfigFields'] = 'Configure Fields:';

$string['blockGameUseAvatar'] = 'Use Avatar: Allows the use of avatars.';

$string['blockGameReplaceAvatars'] = 'Replace Avatar Images: Allows you to change all available avatars.';

$string['blockGameAllowAvatarChange'] = 'Allow Avatar Change in Course: Defines if participants can change their avatars.';

$string['blockGameShowPlayerInfo'] = 'Show Player Info: Shows information about all the participant\'s courses.';

$string['blockGamePointForActivities'] = 'Point Activity Grades: Counts the activity grades as points.';

$string['blockGameDailyBonus'] = 'Daily Bonus: Defines points per day of access.';

$string['blockGameBonusForBadge'] = 'Bonus for Badge: Applies points for each badge earned.';

$string['blockGameShowRanking'] = 'Show Ranking: Allows viewing the ranking.';

$string['blockGamePreserveIdentity'] = 'Preserve User Identity: Preserves the user\'s identity in the ranking.';

$string['blockGameShowScore'] = 'Show Score: Shows the participants\' scores.';

$string['blockGameShowLevel'] = 'Show Level: Shows the participants\' levels.';

$string['blockGameCustomLevelImages'] = 'Replace Level Images: Allows you to change all the level images.';

$string['blockGameNumberOfLevels'] = 'Number of Levels: Defines the number of levels for the courses.';

$string['blockGameSaveChanges'] = 'Save Changes: After checking the fields, click "Save changes".';

$string['blockGameCourseConfig'] = 'Configuration for a Specific Course';

$string['blockGameAccessCourses'] = 'Access My Courses: Go to "My courses" and select the desired course.';

$string['blockGameEditMode'] = 'Edit Mode: In the top right corner of the screen, click "Edit mode".';

$string['blockGameAddBlock'] = 'Add Block: Open the "Block drawer" and click "Add a block", selecting the "Game" option. 
A plugin card will appear in the tab.';

$string['blockGameConfigureBlock'] = 'Configure Game Block: Click the gear icon on the plugin card and select "Configure 
Game block". A modal with configurations will appear.';

$string['blockGameBlockSettings'] = 'Block Settings:';

$string['blockGameEditTitle'] = 'Edit Title: Provide a title for the block.';

$string['blockGameShowCourseName'] = 'Show Course Name: Displays or hides the course name.';

$string['blockGameShowPlayerInfo'] = 'Show Player Info: Shows information about all the participant\'s courses.';

$string['blockGamePointActivities'] = 'Point Activity Grades: Counts grades as points.';

$string['blockGameDailyBonus'] = 'Daily Bonus: Defines points per day of access.';

$string['blockGameShowGroupRanking'] = 'Show Group Ranking: Displays the ranking by group.';

$string['blockGameGroupPointsCalculation'] = 'Group Points Calculation: Private and disabled field.';

$string['blockGameShowRanking'] = 'Show Ranking: Allows the participant to see the ranking.';

$string['blockGameRankingListLimit'] = 'Ranking List Limit: Defines the number of participants shown in the ranking.';

$string['blockGamePreserveIdentity'] = 'Preserve User Identity: Preserves the user\'s identity in the ranking.';

$string['blockGameShowScore'] = 'Show Score: Displays the score in the block.';

$string['blockGameShowLevel'] = 'Show Level: Displays the level in the block.';

$string['blockGameNumberOfLevels'] = 'Number of Levels: Defines the number of levels for the course.';

$string['blockGameSectionCompletionPoints'] = 'Section Completion Points Settings: Configures the points for each course 
section.';

$string['blockGameActivityCompletionPoints'] = 'Activity Completion Points: Configures the points for each course activity. 
In the topic list, click the edit icon and configure the points in the "Game points" tab.';

$string['blockGameBlockDisplaySettings'] = 'Where to Display This Block: Defines where the block will appear.';

$string['blockGamePageSettings'] = 'On This Page: Defines the block\'s visibility and position on the page.';

$string['blockGameSaveBlockConfig'] = 'Save Changes: After configuring the block, click "Save changes".';


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