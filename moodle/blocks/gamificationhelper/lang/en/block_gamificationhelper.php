<?php

/**
 * Gamification Helper
 */

$string['pluginname'] = 'MGA - Moodle Gamification Assistant';

$string['accessPlugin'] = 'Access AGM';

$string['installplugin'] = 'Install new plugin';

// Permissions
$string['gamificationhelper:view'] = 'Access to the MGA';

$string['gamificationhelper:manage'] = 'Allows configuration of the MGA';

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

$string['btnConfig'] = 'Config plugin';

$string['btnConfigDesc'] = 'Opens a modal with step-by-step instructions for installing and configuring the plugin.';

$string['btnInstall'] = 'Install plugin';

$string['btnStart'] = 'Start MGA';

$string['btnNext'] = 'Next';

$string['btnBack'] = 'Back';

/**********************************************************************************************************************/

/**
 * Main Page
 */
$string['welcome'] = 'Welcome to MGA!';

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

$string['unpredictabilityAndCuriosity'] = 'Unpredictability and Curiosity';
$string['unpredictabilityAndCuriosityDesc'] = 'Stimulate curiosity and autonomous exploration of content, allowing students 
to discover new knowledge and connections innovatively. Surprise and discovery are powerful motivators to engage students.';

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

$string['defaultInstallInstallStep2'] = 'Drag the downloaded .zip file to the file area or click "Choose a file" to open 
the file directory on your computer.';

$string['defaultInstallInstallStep3'] = 'Click "Install plugin from ZIP file".';

$string['defaultInstallValidation'] = 'A plugin validation screen will be displayed. If the validation is successful, 
click "Continue".';

$string['defaultInstallMoodleVersionInfo'] = 'After verifying the plugin, a screen with information about the Moodle 
version will be displayed:';

$string['defaultInstallMoodleCheck'] = 'Moodle checks if all requirements for continued operation are met.';

$string['defaultInstallStatusOK'] = 'OK - The component is correct and without issues.';

$string['defaultInstallPluginVerification'] = 'Plugin Verification: On the "Plugin verification" screen, the plugin is 
already in the Moodle database and is ready to be updated. Click "Upgrade Moodle database now".';

$string['defaultInstallUpdateVersion'] = 'Updating to New Version: On the "Updating to new version" screen, click "Continue".';

$string['defaultInstallConfigIntro'] = 'Plugin Configuration';

$string['defaultInstallConfigFields'] = 'Configure Fields';

$string['defaultInstallCourseConfig'] = 'Course-Specific Configuration';

$string['defaultInstallSupportLinks'] = 'Access the following links for more information and support';

$string['defaultSupportLink1'] = 'How to install plugins';

// Request installation
$string['defaultInstallPluginRequestTutorial'] = 'Requesting the Installation of a Plugin';

$string['defaultInstallPluginRequestDescription'] = 'If you do not have administrative permissions to install plugins in 
Moodle, follow the instructions below to request the installation of a plugin from the Moodle administrator.';

$string['defaultInstallSendEmail'] = '<strong>Contact the Moodle Administrator:</strong> Send a message or email to the 
administrator of your Moodle environment.';

$string['defaultInstallAttachZipDescription'] = '<strong>Attach the ZIP File of the Plugin:</strong> Attach the ZIP file 
of the desired plugin in the message so that the administrator can install it directly.';

$string['defaultInstallPluginNameDescription'] = 'If the administrator prefers not to receive ZIP files, provide the name 
of the plugin "{$a}" so that they can search for and install it directly from the Moodle plugin store.';


/**********************************************************************************************************************/

/**
 * Block Game
 */

/****************************************** About ******************************************/
$string['blockGame'] = 'Block Game';

$string['blockGameDesc'] = 'Transforms activities and resources into a block-based gaming experience.';

/*************************************** Permissions ***************************************/
$string['blockGame:addinstance'] = 'Add a new Game block';

/**************************************** Tutorial ****************************************/
// Default Settings Tab
$string['blockGameDefaultConfig'] = 'Default Plugin Configuration:';

$string['blockGameDefaultConfigNote'] = 'After installation, the default plugin configuration screen will be displayed. 
If there are no specific configurations for a course, the default settings will be used. Changing the default plugin 
settings is optional and should only be done if you want the plugin to adopt a specific behavior by default.';

$string['blockGameDefaultUseAvatar'] = '<strong>Use Avatar:</strong> Allows the use of avatars.';

$string['blockGameDefaultReplaceAvatars'] = '<strong>Replace Avatar Images:</strong> Allows changing all available avatars.';

$string['blockGameDefaultAllowAvatarChange'] = '<strong>Allow Avatar Change in Course:</strong> Defines if participants can 
change their avatars.';

$string['blockGameDefaultShowPlayerInfo'] = '<strong>Show Player Information:</strong> Displays information from all the 
participant\'s courses.';

$string['blockGameDefaultPointForActivities'] = '<strong>Score Activity Grades:</strong> Converts activity grades into points.';

$string['blockGameDefaultDailyBonus'] = '<strong>Daily Bonus:</strong> Sets points per day of access.';

$string['blockGameDefaultBonusForBadge'] = '<strong>Bonus for Badge:</strong> Applies points for each badge earned.';

$string['blockGameDefaultShowRanking'] = '<strong>Show Ranking:</strong> Allows participants to see the ranking.';

$string['blockGameDefaultPreserveIdentity'] = '<strong>Preserve User Identity:</strong> Preserves the user\'s identity in 
the ranking.';

$string['blockGameDefaultShowScore'] = '<strong>Show Score:</strong> Displays participants\' scores.';

$string['blockGameDefaultShowLevel'] = '<strong>Show Level:</strong> Displays participants\' levels.';

$string['blockGameDefaultCustomLevelImages'] = '<strong>Replace Level Images:</strong> Allows changing all level images.';

$string['blockGameDefaultNumberOfLevels'] = '<strong>Number of Levels:</strong> Sets the number of levels for the courses.';

$string['blockGameDefaultSaveChanges'] = '<strong>Save Settings:</strong> After configuring the fields, click "Save changes".';

// Adding Block Game to the Course
$string['blockGameAddToCourseTutorial'] = 'How to Add Block Game to Your Course';

$string['blockGameAddToCourseDescription'] = 'Follow the steps below to add the Block Game block to your course and start 
using its gamification features.';

$string['blockGameResetPointsStep0'] = '<strong>Activate Edit Mode:</strong> The option to reset points will only be 
available when the course edit mode is active and will appear only on the game card created by the teacher or moderator.';

$string['blockGameAddStep1'] = '<strong>Select the Desired Course:</strong> On the Moodle dashboard, select the course to 
which you want to add Block Game.';

$string['blockGameAddStep2'] = '<strong>Enable Edit Mode:</strong> Within the course, click the "Edit mode" button to allow 
the addition of new blocks.';

$string['blockGameAddStep3'] = '<strong>Open Block Drawer:</strong> With edit mode enabled, go to the side menu (block drawer) 
and click on "Add a block".';

$string['blockGameAddStep4'] = '<strong>Add Block:</strong> In the list of available blocks, find and select "Game". 
The block will be added to your course.';

// Course-Specific Configuration
$string['blockGameSettingsTutorial'] = 'Block Game Settings';

$string['blockGameSettingsDescription'] = 'To access the Block Game settings, ensure that the course editing mode is 
enabled. The configuration option will only be available to the teacher or moderator who created the game. Follow the 
instructions below to configure the Block Game:';

$string['blockGameSettingsEditTitle'] = '<strong>Edit title:</strong> Allows editing the block title.';

$string['blockGameSettingsShowCourseName'] = '<strong>Show course name:</strong> Displays the course name in the block.';

$string['blockGameSettingsShowPlayerInfo'] = '<strong>Show player information:</strong> Shows information to the player 
from all courses they are participating in.';

$string['blockGameSettingsScoreActivityGrades'] = '<strong>Score activity grades:</strong> Use activity grades to score. 
Only for numeric scales!';

$string['blockGameSettingsDailyBonus'] = '<strong>Daily bonus:</strong> Daily bonus badge, set points per day of access.';

$string['blockGameSettingsShowGroupRanking'] = '<strong>Show group ranking:</strong> Displays the group ranking.';

$string['blockGameSettingsGroupPointsCalculation'] = '<strong>Group points calculation:</strong> Select the method of 
calculation for group points.';

$string['blockGameSettingsShowRanking'] = '<strong>Show ranking:</strong> Displays the ranking.';

$string['blockGameSettingsRankingLimit'] = '<strong>Ranking list limit:</strong> Controls the number of players to be 
displayed in the ranking list. Select 0 (zero) to list all.';

$string['blockGameSettingsPreserveIdentity'] = '<strong>Preserve user identity:</strong> Preserve user identity in the 
ranking list.';

$string['blockGameSettingsShowScore'] = '<strong>Show score:</strong> Showing the score.';

$string['blockGameSettingsShowLevel'] = '<strong>Show Level:</strong> Show Level.';

$string['blockGameSettingsNumberOfLevels'] = '<strong>Number of levels:</strong> Defines the number of levels. This field 
disables the editing of the "Points for level ..." fields.';

$string['blockGameSettingsPointsForLevel'] = '<strong>Points for level 1-15:</strong> Define the number of points required 
to reach the respective level. Points can be adjusted as needed. Fields for unused levels are disabled.';

$string['blockGameSettingsCompletionPoints'] = 'Section Completion Points (completion criteria required)';

$string['blockGameSettingsCompletionPointsDescription'] = 'To configure the Game block in Moodle, you need to set scoring 
criteria for the completion of sections/topics. These criteria are configured according to the structure of the course, 
varying depending on the number of sections/topics present.';

$string['blockGameSettingsPointsForCompletion'] = '<strong>Points for Section Completion:</strong> These fields allow you 
to define how many points each student earns upon completing a specific section of the course.';

$string['blockGameSettingsCompletionConditions'] = '<strong>Completion Conditions:</strong> These options determine when 
section completion points are awarded to the participant. Conditions are set by editing an activity in the section, going 
to the "Completion conditions" tab. Points will only be applied after all activities with defined completion conditions 
are completed, thereby releasing the section\'s points. Configuring these conditions correctly is essential for the Game 
block to function.';

$string['blockGameSettingsActivityCompletionPoints'] = 'Activity /Resource Completion Points (mandatory completion 
criteria):';

$string['blockGameSettingsActivityCompletionPointsDescription'] = 'This setting allows assigning points to students for 
completing specific activities or resources in the course. Each field represents an activity or resource created in the 
course.';

$string['blockGameSettingsPointsForActivityCompletion'] = '<strong>Points for Activity Completion:</strong> These fields 
allow setting how many points each student earns for completing a specific activity or resource in the course.';

$string['blockGameSettingsActivityCompletionConditions'] = '<strong>Completion Criteria:</strong> Activities must have 
completion criteria defined for points to be applied. Even if points are configured, if the activity does not have a 
completion criterion, the points will not be awarded.';

$string['blockGameSettingsGamePointsTab'] = '<strong>Game Points:</strong> If the Game block is added to the course, 
it is possible to configure the activity points directly in the activity\'s editing tab, by going to the "Game Points" 
section.';

$string['blockGameSettingsWhereToShow'] = 'Where to show this block';

$string['blockGameSettingsWhereToShowDescription'] = 'Configure where the Game block will be displayed in the course, 
including the specific page and screen region.';

$string['blockGameSettingsBlockLocation'] = '<strong>Block original location:</strong> The original location where the 
block was created. Block settings can cause it to appear in other places (contexts) within the original location. For 
example, a block created on a course page can be displayed on the activities of that course. A block created on the site\'s 
home page can be displayed across the entire site.';

$string['blockGameSettingsShowOnPageType'] = '<strong>Show on page types:</strong> Selects the types of pages where the 
block will be displayed. Options include "Any page", "Any course page", and "Any main course page type".';

$string['blockGameSettingsDefaultRegion'] = '<strong>Default region:</strong> Defines the default region of the course 
where the block will be displayed. Options may include regions such as "Right", "Left", etc., depending on the theme used.';

$string['blockGameSettingsDefaultWeight'] = '<strong>Default weight:</strong> Allows adjusting the block\'s position within 
the selected region. Lower values place the block closer to the top.';

$string['blockGameSettingsOnThisPage'] = 'On this page';

$string['blockGameSettingsOnThisPageDescription'] = 'Configure how the block will be displayed on this specific course page.';

$string['blockGameSettingsVisible'] = '<strong>Visible:</strong> Defines whether the block will be visible or hidden on 
the page. Options are "Yes" to make the block visible and "No" to hide it.';

$string['blockGameSettingsRegion'] = '<strong>Region:</strong> Defines in which region of the page the block will be 
displayed. Options vary depending on the theme used, such as "Right" or "Left".';

$string['blockGameSettingsWeight'] = '<strong>Weight:</strong> Allows adjusting the block\'s position within the selected 
region. Negative values place the block closer to the top, while positive values place it closer to the bottom.';

// Support links
$string['blockGameSupportLink1'] = 'How to install and configure the Block Game plugin';

$string['blockGameSupportLink2'] = 'Gamification in Practice with the Moodle Platform';

$string['blockGameSupportLink3'] = 'Installing and Configuring the Block Game Plugin in Moodle';


// Reset points
$string['blockGameResetPointsTutorial'] = 'How to Reset Points in Block Game';

$string['blockGameResetPointsDescription'] = 'The "Reset Points" option allows all accumulated points by students in the 
course to be reset. Resetting the course points will cause all users to lose their points. This action is irreversible. 
Make sure you really want to do this.';

$string['blockGameResetPointsStep1'] = '<strong>How to access:</strong> In the Block Game plugin interface, click the red 
circular arrow icon in the game widget.';

$string['blockGameResetPointsStep2'] = '<strong>Select Reset Points:</strong> Select the "Reset points" option.';

$string['blockGameResetPointsStep3'] = '<strong>Confirm Action:</strong> Confirm the action in the confirmation window 
that appears by clicking "Yes".';

// How to Remove Block Game
$string['blockGameRemoveTutorial'] = 'How to Remove Block Game from the Course';

$string['blockGameRemoveDescription'] = 'Follow the steps below to remove the Block Game block from your course.';

$string['blockGameRemoveStep0'] = '<strong>Activate Edit Mode:</strong> The option to remove the block will only be 
available when the course edit mode is active.';

$string['blockGameRemoveStep1'] = '<strong>Access the Block Menu:</strong> In the Block Game plugin interface, click the 
gear icon (⚙️) in the game widget.';

$string['blockGameRemoveStep2'] = '<strong>Select Delete Block:</strong> In the dropdown menu, select the "Delete Block 
Game" option.';

$string['blockGameRemoveStep3'] = '<strong>Confirm Action:</strong> In the confirmation window that appears, click "Delete" 
to confirm the removal of the block.';

// Configure Permissions
$string['blockGamePermissionsTutorial'] = 'How to Configure Permissions in Block Game';

$string['blockGamePermissionsDescription'] = 'Follow the steps below to configure user permissions in the Block Game block 
of your course.';

$string['blockGamePermissionsStep0'] = '<strong>Activate Edit Mode:</strong> The option to configure permissions will 
only be available when the course edit mode is active.';

$string['blockGamePermissionsStep1'] = '<strong>Access the Block Menu:</strong> In the Block Game plugin interface, click 
the gear icon (⚙️) in the game widget.';

$string['blockGamePermissionsStep2'] = '<strong>Select Permissions:</strong> In the dropdown menu, select the "Permissions" 
option.';

$string['blockGamePermissionsStep3'] = '<strong>Configure Permissions:</strong> On the permissions page, adjust the 
permissions as needed by selecting the roles and authorized or prohibited actions.';


// Check permissions
$string['blockGameCheckPermissionsTutorial'] = 'How to Check Permissions in Block Game';

$string['blockGameCheckPermissionsDescription'] = 'Follow the steps below to check user permissions in the Block Game block 
of your course.';

$string['blockGameCheckPermissionsStep0'] = '<strong>Activate Edit Mode:</strong> The option to check permissions will only 
be available when the course edit mode is active.';

$string['blockGameCheckPermissionsStep1'] = '<strong>Access the Block Menu:</strong> In the Block Game plugin interface, 
click the gear icon (⚙️) in the game widget.';

$string['blockGameCheckPermissionsStep2'] = '<strong>Select Check Permissions:</strong> In the dropdown menu, select the 
"Check permissions" option.';

$string['blockGameCheckPermissionsStep3'] = '<strong>Choose User:</strong> On the permissions verification page, select 
the desired user from the list of enrolled users.';

$string['blockGameCheckPermissionsStep4'] = '<strong>Show Permissions:</strong> Click the "Show permissions for this user" 
button to view the detailed permissions of the selected user.';

/**********************************************************************************************************************/

/**
 * Level Up XP - Gamification
 */

/****************************************** About ******************************************/
$string['levelUp'] = 'Level Up XP - Gamification';

$string['levelUpDesc'] = 'Enables the creation of experience point systems that motivate students through visual 
progression and rewards.';

/*************************************** Permissions ***************************************/
$string['blockXp:manage'] = 'Manage all aspects of experience points';

$string['blockXp:viewlogs'] = 'View the logs';

$string['blockXp:viewreport'] = 'View the report';

$string['blockXp:addinstance'] = 'Add a new block';

/**************************************** Tutorial ****************************************/
// Default Settings Tab
$string['blockXpDefaultSettings'] = 'Default Settings';

$string['blockXpDefaultSettingsDescription'] = 'The default settings for the Level Up XP plugin allow you to define how 
the plugin will operate across the entire site. Configure the global options for course gamification, including how points 
are used, navigation visibility, and whether administrators can earn points.';

$string['blockXpDefaultSettingsPointsContext'] = '<strong>Where are points used?</strong> When selecting "In courses", 
experience points earned will only be counted in the course where the block was added. If you choose "For the whole site", 
points will be accumulated across all courses, allowing for global leveling up.';

$string['blockXpDefaultSettingsNavBarDisplay'] = '<strong>Show in navigation bar:</strong> When enabled, the user\'s 
level will be displayed in the top navigation bar.';

$string['blockXpDefaultSettingsAdminsCanEarnXp'] = '<strong>Admins can earn points:</strong> By default, administrators 
do not earn points. This setting allows them to be included in the points system.';

$string['blockXpDefaultSettingsKeepLogs'] = '<strong>Keep logs:</strong> Defines the duration for which logs will be kept 
before being deleted.';

$string['blockXpDefaultSettingsUsageReport'] = '<strong>Share usage report:</strong> Periodically shares anonymous usage 
information with the plugin developers to help improve the plugin.';

$string['blockXpDefaultSettingsEnableInfos'] = '<strong>Enable info page:</strong> When disabled, the info page will not 
be visible to students.';

$string['blockXpDefaultSettingsEnableLevelUpNotif'] = '<strong>Enable level up notifications:</strong> When enabled, 
students will see a popup congratulating them for reaching a new level.';

$string['blockXpDefaultSettingsEnableLeader'] = '<strong>Enable leaderboard:</strong> When disabled, the leaderboard will 
not be visible to students.';

$string['blockXpDefaultSettingsIdentityMode'] = '<strong>Anonymity:</strong> Controls whether participants can see each 
other\'s names and avatars.';

$string['blockXpDefaultSettingsNeighbours'] = '<strong>Participants limit:</strong> Controls who is displayed on the 
leaderboard.';

$string['blockXpDefaultSettingsRankMode'] = '<strong>Ranking:</strong> The ranking is the absolute position of the 
current user on the leaderboard. The relative ranking is the difference in experience points between a user and their 
neighbors.';

$string['blockXpDefaultSettingsLadderCols'] = '<strong>Additional columns:</strong> This setting determines which additional 
columns are displayed on the leaderboard.';

$string['blockXpDefaultSettingsEnableCheatGuard'] = '<strong>Enable cheat guard:</strong> The cheat guard provides a simple 
and effective mechanism to prevent abuse in the points system.';

$string['blockXpDefaultSettingsMaxActionsPerTime'] = '<strong>Max actions in time interval:</strong> Defines the maximum 
number of actions that will count towards points during a specific time interval.';

$string['blockXpDefaultSettingsTimeForMaxActions'] = '<strong>Time interval for max actions:</strong> Defines the time 
interval during which the user should not exceed a maximum number of actions.';

$string['blockXpDefaultSettingsTimeBetweenSameActions'] = '<strong>Time required between identical actions:</strong> 
Defines the minimum time between identical actions for them to be accepted again.';

$string['blockXpDefaultSettingsBlockTitle'] = '<strong>Block title:</strong> Defines the title of the block.';

$string['blockXpDefaultSettingsBlockDescription'] = '<strong>Block description:</strong> Defines an introductory message 
displayed in the block.';

$string['blockXpDefaultSettingsRankingSnapshot'] = '<strong>Show ranking snapshot:</strong> Displays a snapshot of the 
ranking in the block.';

$string['blockXpDefaultSettingsBlockRecentActivity'] = '<strong>Show recent rewards:</strong> Displays a list of recent 
events that rewarded the student with points.';

// Tutorial to Add Level Up XP to the Course
$string['blockXpAddToCourseTutorial'] = 'How to Add Level Up XP to Your Course';

$string['blockXpAddToCourseDescription'] = 'Follow the steps below to add the Level Up XP block to your course and start 
utilizing gamification features.';

$string['blockXpAddStep1'] = '<strong>Select the Desired Course:</strong> In the Moodle dashboard, select the course to 
which you want to add Level Up XP.';

$string['blockXpAddStep2'] = '<strong>Enable Edit mode:</strong> Within the course, click the "Edit Mode" button to allow 
the addition of new blocks.';

$string['blockXpAddStep3'] = '<strong>Open Blocks Drawer:</strong> With editing mode enabled, go to the side menu 
(blocks drawer) and click on "Add a block".';

$string['blockXpAddStep4'] = '<strong>Add Block:</strong> In the list of available blocks, find and select "Level Up XP". 
The block will be added to your course.';


// How to Access the Settings
$string['blockXpAccessSettingsTutorial'] = 'Accessing the Level Up XP Plugin Settings';

$string['blockXpAccessSettingsDescription'] = 'To configure the Level Up XP plugin and customize the gamification of 
your course, follow the steps below:';

$string['blockXpStep1'] = '<strong>Navigate to the Level Up XP Block:</strong> In your course panel, locate the Level 
Up XP block. It displays a summary of your current progress, including the current level, total XP accumulated, ranking, 
and recent rewards.';

$string['blockXpStep2'] = '<strong>Accessing the Settings:</strong> In the Level Up XP block, click on the "Settings" 
option. This will open the page where you can adjust various plugin settings to customize the gamification experience 
for your students.';

$string['blockXpStep3'] = '<strong>Settings Tabs:</strong> On the settings page, you will find several tabs, each 
dedicated to different aspects of the plugin.';

$string['blockXpStep4'] = '<strong>XP+ Features:</strong> In some areas of the settings, you will see fields marked with 
"XP+ required". These fields are extra features of the paid XP+ extension. However, these features are just additional 
customizations and do not interfere with the gamification and results achievable with the base plugin.';

// Information Tab
$string['blockXpInformationTab'] = 'Information';

$string['blockXpInformationTabDescription'] = 'The "Information" tab of the Level Up XP plugin provides a visual summary 
of students\' levels in a course. In this tab, you can see the distribution of levels, add relevant information, and 
customize levels as needed. It is essential to keep students informed about their progress and to motivate them to 
continue actively participating in the course. The customization features allow teachers to tailor gamification to the 
specific needs of their courses, making the learning experience more engaging and effective.';

$string['blockXpInformationLevel'] = 'Displays the level number and the amount of XP points needed to reach it. This 
visualization helps students understand their progress and encourages them to reach the next level.';

$string['blockXpInformationUsageExample'] = '<strong>View Progress:</strong> Each colored star represents a specific level 
that students can achieve. Hovering over a star shows how many points are needed to reach the next level.';

$string['blockXpInformationAdd'] = '<strong>Add Information:</strong> Allows including additional descriptions or goals 
that can help students better understand the level system and what is expected of them.';

$string['blockXpInformationCustomizeLevelsInstructions'] = '<strong>Customize Levels:</strong> Opens the "Levels" tab 
if you want to change the point requirements or the appearance of the levels.';

// Report Tab - Report
$string['blockXpReportTab'] = 'Report';

$string['blockXpReportDescription'] = 'The Report tab allows you to view and manage the levels and points of course 
participants. Here, you can manually edit each student\'s points, check action logs, and reset the course score data.';

$string['blockXpReportResetCourseData'] = '<strong>Reset course data:</strong> Resets all scores for all course participants. 
This action resets all students\' levels and points, which is useful for restarting gamification in the course.';

$string['blockXpReportEditPoints'] = '<strong>Edit points:</strong> Allows you to manually adjust a specific student\'s 
points. By clicking "Edit," you can enter new point and level values for the selected participant and click "Save changes" 
to apply the changes.';

$string['blockXpReportViewLogs'] = '<strong>View logs:</strong> Displays records of actions taken by participants. Used 
to monitor and review activities that resulted in point gains.';

$string['blockXpReportDeleteUser'] = '<strong>Delete user:</strong> Removes the user from the ranking and deletes all 
associated logs. If the intention is only to reset the user\'s points, it is recommended to set the points to 0, as 
deleting a user does not affect their ability to earn points in the future.';

// Report Tab - Logs
$string['blockXpLogsTab'] = 'Logs';

$string['blockXpLogsDescription'] = 'The Logs tab allows you to view and filter all event records that resulted in point 
gains for course participants. This feature is useful for monitoring and reviewing activities performed by students.';

// Levels Tab -> Configuration
$string['blockXpLevelConfigTab'] = 'Level Configuration';

$string['blockXpLevelConfigDescription'] = 'Customize the settings for each level, including the points required to reach 
the level, names, and descriptions.';

$string['blockXpLevelNumberOfLevels'] = '<strong>Number of Levels:</strong> Set the total number of levels that participants 
can achieve. By default, Level Up XP sets up 10 levels of increasing difficulty.';

$string['blockXpLevelQuickEditPoints'] = '<strong>Quick Edit Points:</strong> Allows you to quickly edit the points required 
to reach each level. We recommend using the "Snowballing" method to create an environment where the early levels are not 
too hard, but become increasingly challenging as the learner progresses.';

$string['blockXpLevelQuickEditEqual'] = '<strong>Equal:</strong> All levels require the same number of points to be reached. 
This method is simple but can take away the sense of achievement of reaching a level, as all levels are identical.';

$string['blockXpLevelQuickEditIncreasing'] = '<strong>Increasing:</strong> Levels progressively take more points to be 
reached. This method increases the difficulty linearly, making the points predictable for the instructor.';

$string['blockXpLevelQuickEditSnowball'] = '<strong>Snowballing:</strong> Levels become exponentially harder to reach. 
This method allows learners to quickly progress through the early levels, but requires greater effort in the later levels. 
Recommended.';

$string['blockXpLevelStart'] = '<strong>Start:</strong> Sets the number of points required to reach the level. 
Note: Level 1 always starts at 0 points and cannot be changed.';

$string['blockXpLevelLength'] = '<strong>Length:</strong> Sets the additional number of points needed to progress to the 
next level.';

$string['blockXpLevelName'] = '<strong>Name:</strong> Allows you to add a custom name for each level.';

$string['blockXpLevelDescriptionField'] = '<strong>Description:</strong> Allows you to add a description for each level. 
This description will be displayed to participants on the information page.';

$string['blockXpLevelPopupMessage'] = '<strong>Popup Notification Message:</strong> Optional message displayed in the popup 
notification when the participant reaches the level. This option is available only with Level Up XP+ enabled.';

$string['blockXpLevelBadgeAward'] = '<strong>Badge to Award:</strong> Allows you to select a badge to be awarded when the 
participant reaches the level. This option is available only with Level Up XP+ enabled.';

// Levels Tab -> Appearance
$string['blockXpLevelAppearanceTab'] = 'Level Appearance';

$string['blockXpLevelAppearanceDescription'] = 'Customize the appearance of the levels and the meaning of the points.';

$string['blockXpLevelBadge'] = '<strong>Level Badges:</strong> Allows you to upload custom badges to represent each level.';

$string['blockXpLevelPointsSymbol'] = '<strong>Points Symbol:</strong> Defines the symbol to be used for representing 
experience points. This option is available only with Level Up XP+ enabled.';

$string['blockXpLevelPreview'] = '<strong>Preview:</strong> Displays a preview of how the level badges will appear to the 
course participants.';

$string['blockXpLevelResetAppearance'] = '<strong>Reset Appearance to Defaults:</strong> Resets the appearance of all 
course levels to the default settings. Be sure you want to apply this action, as it cannot be undone.';

// Points Tab
$string['blockXpPointsTab'] = 'Points';

$string['blockXpPointsDescription'] = 'Configure scoring rules based on events and other actions performed by users.';

$string['blockXpPointsEventRulesDescription'] = '<strong>Event Rules:</strong> Monitor actions and award points to students 
as they perform specific activities. It is advisable to check the plugin Log page to identify which events are triggered as 
students perform actions in the course.';

$string['blockXpPointsCompletionRulesDescription'] = '<strong>Completion Rules:</strong> Award points to students as they 
complete activities, sections, or courses. This feature requires Level Up XP+.';

$string['blockXpPointsGradeRulesDescription'] = '<strong>Grade Rules:</strong> Allow users to receive points equivalent 
to the grades they receive. This feature requires Level Up XP+.';

$string['blockXpPointsDropsDescription'] = '<strong>Drops:</strong> These are snippets of code placed directly in the 
content that grant points when found by a user. This feature requires Level Up XP+.';

$string['blockXpPointsImportDescription'] = '<strong>Import Points:</strong> Allows importing points from a CSV file and 
optionally sending a message to the recipient. This feature requires Level Up XP+.';

$string['blockXpPointsResetRulesDescription'] = '<strong>Reset Course Rules to Default:</strong> This action resets all 
course scoring rules to the default settings. Use this option with caution as it cannot be undone.';

// Settings Tab
$string['blockXpSettingsTab'] = 'Settings';

$string['blockXpSettingsDescription'] = 'The Settings tab allows administrators and instructors to customize various options 
of the Level Up XP plugin. This includes general adjustments like enabling XP points and notifications, ranking settings, 
fraud protection to prevent abuse, and customizing the appearance of the Level Up XP block.';

// Settings Tab -> General
$string['blockXpGeneralSettings'] = 'General';

$string['blockXpEnableXpGain'] = '<strong>Enable XP gain:</strong> Allows enabling or disabling the gain of experience 
points in the course. When set to "No", no one will earn points in the course. This is useful for freezing earned points 
or enabling them at a certain time. Note that this can also be controlled with more granularity using the block/xp:earnxp 
capability.';

$string['blockXpEnableInfoPage'] = '<strong>Enable info page:</strong> Controls whether the plugin\'s info page will be 
accessible to students. When set to "No", students will not be able to see the info page.';

$string['blockXpEnableLevelUpNotifications'] = '<strong>Enable level-up notifications:</strong> Controls whether students 
will receive popup notifications when they reach a new level. When set to "Yes", students will see a popup congratulating 
them on reaching a new level.';

// Settings Tab -> Ranking
$string['blockXpRankingSettings'] = 'Ranking';

$string['blockXpRankingSettingsEnable'] = '<strong>Enable ranking:</strong> Allows enabling or disabling the ranking view 
for students. When set to "No," students will not be able to view the ranking.';

$string['blockXpRankingSettingsAnonymity'] = '<strong>Anonymity:</strong> Controls whether participants can see each 
other\'s names and avatars in the ranking. When enabled, participants\' identities will be displayed. Otherwise, they will 
remain anonymous.';

$string['blockXpRankingSettingsParticipantLimit'] = '<strong>Participant limit:</strong> Controls how many participants 
will be displayed in the ranking. You can choose to display all participants or limit the view to immediate neighbors 
(the two participants above and below the current user, for example).';

$string['blockXpRankingSettingsDisplay'] = '<strong>Ranking:</strong> Defines which columns will be displayed in the ranking. 
Absolute ranking is the user\'s position in the ranking. Relative ranking is the difference in experience points between 
a user and their neighbors.';

$string['blockXpRankingSettingsAdditionalColumns'] = '<strong>Additional columns:</strong> Determines which additional 
columns are displayed in the ranking. To select more than one column or deselect a selected column, press the CTRL or 
CMD key while clicking.';

// Settings Tab -> Fraud Protection
$string['blockXpFraudProtectionSettings'] = 'Fraud Protection';

$string['blockXpFraudProtectionSettingsEnable'] = '<strong>Enable fraud protection:</strong> Fraud protection provides a 
simple and cost-effective mechanism to prevent students from abusing the system using obvious techniques, such as refreshing 
the same page indefinitely or repeating the same action multiple times.';

$string['blockXpFraudProtectionSettingsMaxActionsInterval'] = '<strong>Max. actions in time interval:</strong> The maximum 
number of actions that will count towards gaining experience points during the provided time interval. Any subsequent 
actions will be ignored. When this value is empty or zero, it is not applied.';

$string['blockXpFraudProtectionSettingsTimeRequiredBetweenIdenticalActions'] = '<strong>Time required between identical 
actions:</strong> The minimum amount of time required before an action that has previously occurred is accepted again. 
An action is considered identical if it was performed in the same context and object; reading a forum post will be 
considered identical if the same post is read again. When this value is empty or zero, it does not apply.';

// Settings Tab -> Block Appearance
$string['blockXpBlockAppearanceSettings'] = 'Block Appearance';

$string['blockXpBlockAppearanceSettingsTitle'] = '<strong>Title:</strong> The title of the block.';

$string['blockXpBlockAppearanceSettingsIntroduction'] = '<strong>Introduction:</strong> A short introductory message 
displayed in the block. Students can dismiss the message, and in that case, they will not see it again.';

$string['blockXpBlockAppearanceSettingsShowRankingSample'] = '<strong>Show ranking sample:</strong> The ranking sample 
displays the user\'s ranking. It will also try to show the two people around the user. This feature requires that the 
ranking table be activated and its rankings displayed.';

$string['blockXpBlockAppearanceSettingsShowRecentRewards'] = '<strong>Show recent rewards:</strong> When enabled, the 
block will display a small list of recent events that rewarded the student with points.';

// XP+ Tab
$string['blockXpPlusTab'] = '<strong>XP+</strong>';

$string['blockXpPlusDescription'] = 'Level Up XP+ is a paid extension that offers extra features, but effective gamification 
can be achieved with the base plugin alone, without the need to purchase the additional tool.';

$string['blockXpReportTab'] = 'Report';
$string['blockXpReportDescription'] = 'The Report tab provides detailed information about the points of the participants.';
$string['blockXpEditPoints'] = '<strong>Edit Participant Points:</strong> Allows you to manually credit or debit points for 
users.';
$string['blockXpLogTab'] = '<strong>Log Tab:</strong> Displays a detailed log of user actions and awarded points, useful 
for monitoring progress and adjusting scoring rules.';

$string['blockXpRankingTab'] = 'Ranking';

$string['blockXpRankingDescription'] = 'The Ranking tab shows the classification of participants based on accumulated 
points. This view can be used to foster healthy competition and student engagement.';

$string['blockXpInfoTab'] = 'Information';

$string['blockXpInfoDescription'] = 'In this tab, you can add support texts or additional information that will be 
displayed to participants. These texts can include tips, game rules, or any other relevant information.';

$string['blockXpBlockConfigTab'] = 'Configure Block';

$string['blockXpBlockConfigDescription'] = 'This tab allows you to configure the position of the plugin block on the 
screen and its visibility.';

$string['blockXpBlockPosition'] = '<strong>Block Position:</strong> Defines where the block will be displayed on the 
course page.';

$string['blockXpBlockVisibility'] = '<strong>Visibility:</strong> Defines whether the block will be visible or not to 
participants.';

$string['blockXpPermissionsTab'] = 'Permissions';

$string['blockXpPermissionsDescription'] = 'In this tab, you can define what permissions each user level will have. This 
is useful for controlling access to certain plugin functionalities.';

$string['blockXpEditPermissions'] = '<strong>Edit Permissions:</strong> Allows you to adjust permissions for different 
user levels.';

$string['blockXpCheckPermissionsTab'] = 'Check Permissions';

$string['blockXpCheckPermissionsDescription'] = 'The Check Permissions tab displays a list of participants and their 
respective permissions in the plugin.';

$string['blockXpParticipantsPermissions'] = '<strong>List of Participants and Permissions:</strong> Shows which permissions 
each user has.';

// How to remove Level Up XP from the course
$string['blockXpRemoveTutorial'] = 'How to Remove Level Up XP from the Course';

$string['blockXpRemoveDescription'] = 'Follow the steps below to remove the Level Up XP block from your course.';

$string['blockXpRemoveStep0'] = '<strong>Activate Edit Mode:</strong> The option to remove the block will only be available 
when the course edit mode is active.';

$string['blockXpRemoveStep1'] = '<strong>Access the Block Menu:</strong> In the Level Up XP plugin interface, click the 
gear icon (⚙️) in the game widget.';

$string['blockXpRemoveStep2'] = '<strong>Select Delete Block:</strong> In the dropdown menu, select the "Delete Level Up 
XP block" option.';

$string['blockXpRemoveStep3'] = '<strong>Confirm Action:</strong> In the confirmation window that appears, click "Delete" 
to confirm the removal of the block.';

// Configure permissions
$string['blockXpPermissionsTutorial'] = 'How to Configure Permissions in Level Up XP';

$string['blockXpPermissionsDescription'] = 'Follow the steps below to configure user permissions in the Level Up XP 
block of your course.';

$string['blockXpPermissionsStep0'] = '<strong>Activate Edit Mode:</strong> The option to configure permissions will 
only be available when the course edit mode is active.';

$string['blockXpPermissionsStep1'] = '<strong>Access the Block Menu:</strong> In the Level Up XP plugin interface, 
click the gear icon (⚙️) in the game widget.';

$string['blockXpPermissionsStep2'] = '<strong>Select Permissions:</strong> In the dropdown menu, select the 
"Permissions" option.';

$string['blockXpPermissionsStep3'] = '<strong>Configure Permissions:</strong> On the permissions page, adjust the 
permissions as needed by selecting the roles and authorized or prohibited actions.';

// Check permissions
$string['blockXpCheckPermissionsTutorial'] = 'How to Check Permissions in Level Up XP';

$string['blockXpCheckPermissionsDescription'] = 'Follow the steps below to check user permissions in the Level Up XP 
block of your course.';

$string['blockXpCheckPermissionsStep0'] = '<strong>Activate Edit Mode:</strong> The option to check permissions will only 
be available when the course edit mode is active.';

$string['blockXpCheckPermissionsStep1'] = '<strong>Access the Block Menu:</strong> In the Level Up XP plugin interface, 
click the gear icon (⚙️) in the game widget.';

$string['blockXpCheckPermissionsStep2'] = '<strong>Select Check Permissions:</strong> In the dropdown menu, select the 
"Check permissions" option.';

$string['blockXpCheckPermissionsStep3'] = '<strong>Choose User:</strong> On the permissions verification page, select 
the desired user from the list of enrolled users.';

$string['blockXpCheckPermissionsStep4'] = '<strong>Show Permissions:</strong> Click the "Show permissions for this user" 
button to view the detailed permissions of the selected user.';

// Support Links
$string['blockXpSupportLink1'] = 'Official plugin documentation';

$string['blockXpSupportLink2'] = 'Gamification with Level UP! in Moodle';

/**********************************************************************************************************************/

/**
 * Trail Format
 */

/****************************************** About ******************************************/
$string['formatTrail'] = 'Trail format';

$string['formatTrailDesc'] = 'Provides a gamified journey where students follow structured learning paths.';

/*************************************** Permissions ***************************************/
$string['formatTrail:changeimagecontaineralignment'] = 'Change or reset the image container alignment';

$string['formatTrail:changeimagecontainernavigation'] = 'Change or reset the image container navigation';

$string['formatTrail:changeimagecontainersize'] = 'Change or reset the image container size';

$string['formatTrail:changeimagecontainerstyle'] = 'Change or reset the image container style';

$string['formatTrail:changeimageresizemethod'] = 'Change or reset the image resize method';

$string['formatTrail:changesectiontitleoptions'] = 'Change or reset the section title options';

/**************************************** Tutorial ****************************************/
// Default settings
$string['trailFormatDefaultSettings'] = 'Configurações Padrão do Plugin Trail Format';

$string['trailFormatDefaultSettingsDescription'] = 'After installation, the plugin\'s default configuration screen will 
be displayed. If there are no specific settings for a course, the default settings will be used. Changing the plugin\'s 
default data is optional and should only be done if you want the plugin to adopt specific behavior by default. You can 
see the description of the fields below in the section "How to configure the Trail Format fields".';

// How to access the Trail Format plugin settings
$string['trailFormatAccessSettingsTutorial'] = 'How to access the Trail Format plugin settings';

$string['trailFormatAccessStep1'] = '<strong>Select the Desired Course:</strong> On the Moodle dashboard, select the 
course to which you want to add the Trail Format.';

$string['trailFormatAccessStep2'] = '<strong>Access Course Settings:</strong> Within the course, click on the "Settings" 
tab to access the course settings.';

$string['trailFormatAccessStep3'] = '<strong>Course Format:</strong> In the "Course format" section, locate the "Format" 
field and select the "Trail format" option from the dropdown menu.';

$string['trailFormatAccessStep4'] = '<strong>Trail Format Settings:</strong> After selecting "Trail format," specific 
configuration fields for this format will be available below to be adjusted as needed.';

$string['trailFormatAccessStep5'] = '<strong>Disabling the plugin:</strong> To disable the plugin for the course, you only 
need to change the "Format" field option to another format. This will also cause all configurations made for the trail 
format to be lost, but only if the format change is altered and saved.';

$string['trailFormatSettingsTitle'] = 'How to configure Trail Format fields';

$string['trailFormatSettingsDescription'] = 'Configuring the Trail Format allows you to adjust various visual and functional 
aspects of the course to optimize gamification and student engagement. While the color fields are not mandatory for 
gamification, they provide better styling for the course, allowing you to customize the look according to your needs and 
preferences.';

$string['trailFormatSettingsNumberOfSections'] = '<strong>Number of sections:</strong> This field sets the number of 
sections in the course that will have the trail format applied. By default, it is pre-filled with the current number of 
sections in the course. You can adjust this number as needed to include more or fewer sections in the trail format.';

$string['trailFormatSettingsSectionHidden'] = '<strong>Hidden sections:</strong> Hidden sections can be displayed to 
students as "not available" on the course page or kept completely hidden.';

$string['trailFormatSettingsCourseLayout'] = '<strong>Course layout:</strong> Course sections can be displayed all on one 
page or separated into multiple pages.';

$string['trailFormatSettingsHideSideNav'] = '<strong>Hide side navigation:</strong> Hide side navigation arrows.';

$string['trailFormatSettingsShowLockIcon'] = '<strong>Show lock icon when restricted:</strong> Show lock icon when the 
section is restricted.';

$string['trailFormatSettingsTrailStyle'] = '<strong>Trail style:</strong> Defines the visual style of the trail, such as 
Track, Treasure, River, Puzzle 1, and Puzzle 2.';

$string['trailFormatSettingsCheckStyle'] = '<strong>Check style:</strong> Choose the check style that will appear when 
the student completes all activities with completion criteria for the section, such as Check, Star, or Like.';

$string['trailFormatSettingsContainerImageAlignment'] = '<strong>Image container alignment:</strong> Resets the image 
container alignment to the default value. This alignment will be applied the same way as a course first displayed in trail 
format. Options include "Left", "Center", and "Right". Choosing "Center" will center the image within the container, while 
"Left" and "Right" will align the image to the left and right, respectively.';

$string['trailFormatSettingsContainerImageWidth'] = '<strong>Set the width of the image container:</strong> Allows setting 
the width of the image container, with options such as 192 and 210.';

$string['trailFormatSettingsContainerImageProportion'] = '<strong>Set the image container proportion relative to width:
</strong> Defines the image container proportion, with options such as 3:2 and 3:1.';

$string['trailFormatSettingsImageMethodResize'] = '<strong>Set the image resizing method:</strong> Defines the image resizing 
method to "Scale" or "Crop".';

$string['trailFormatSettingsBorderColor'] = '<strong>Set the border color:</strong> Allows choosing the border color for 
the image.';

$string['trailFormatSettingsBorderWidth'] = '<strong>Set the border width:</strong> Defines the border width between 1 
and 10.';

$string['trailFormatSettingsEnableBorderRadius'] = '<strong>Enable/disable the border radius:</strong> Allows enabling or 
disabling the border radius for the image.';

$string['trailFormatSettingsBackgroundColor'] = '<strong>Set the background color for the image container:</strong> Sets 
the background color for the image container, 999999 for transparent.';

$string['trailFormatSettingsCurrentSectionColor'] = '<strong>Set the current color for the selected section:</strong> Sets 
the current color for the selected section.';

$string['trailFormatSettingsContainerImageTextColor'] = '<strong>Set the text color for the currently selected image 
container:</strong> Sets the text color for the currently selected image container.';

$string['trailFormatSettingsSelectedContainerColor'] = '<strong>Set the current color for the selected image container:
</strong> Sets the current color for the selected image container, 999999 for transparent.';

$string['trailFormatSettingsSectionTitleHide'] = '<strong>Hide section title option:</strong> Define if you want to hide 
the section title.';

$string['trailFormatSettingsSectionTitleLength'] = '<strong>Section title track length option:</strong> Set the maximum 
length of the section title in the track box. Enter "0" for no truncation.';

$string['trailFormatSettingsSectionTitlePosition'] = '<strong>Section title box position option:</strong> Set the position 
of the section title inside the track box to one of the following: "Inside" or "Outside".';

$string['trailFormatSettingsSectionTitlePositionInside'] = '<strong>Section title box position when option "Inside":</strong> 
Set the position of the section title when "Inside" the track box to one of the following: "Top", "Middle" or "Base".';

$string['trailFormatSettingsSectionTitleHeight'] = '<strong>Section title box height:</strong> Height of the section title 
box in pixels or 0 for calculated. When the box position is "Inside".';

$string['trailFormatSettingsSectionTitleOpacity'] = '<strong>Section title box opacity:</strong> Opacity of the section 
title box between 0 and 1 in increments of 0.1. When the box position is "Inside".';

$string['trailFormatSettingsSectionTitleFontSize'] = '<strong>Section title font size:</strong> Section title font size 
between 12 and 24 pixels, where 0 represents "not set, but inherited from the theme or any other CSS".';

$string['trailFormatSettingsSectionTitleAlignment'] = '<strong>Section title alignment:</strong> Set the section title 
alignment to "Left", "Center" or "Right".';

$string['trailFormatSettingsSectionTitleTextColor'] = '<strong>Section title text color when option "Inside":</strong> Set 
the text color of the section title when the option is "Inside".';

$string['trailFormatSettingsSectionTitleBgColor'] = '<strong>Title background color:</strong> Set the background color of 
the section title when the option is "Inside".';

$string['trailFormatSettingsShowSummary'] = '<strong>Show section title summary on hover:</strong> Show the section title 
summary when hovering over the track box.';

$string['trailFormatSettingsSectionTitleSummaryPosition'] = '<strong>Define the section title summary position on 
hover:</strong> Set the position of the section title summary when hovering over the trail box to one of the following: 
"top", "bottom", "left", or "right".';

$string['trailFormatSettingsSectionTitleSummaryMaxLength'] = '<strong>Set the maximum length of the section title summary 
on hover:</strong> Set the maximum length of the section title summary when hovering over the trail box. Enter "0" for no 
truncation.';

$string['trailFormatSettingsSectionTitleSummaryTextColor'] = '<strong>Set the section title summary text color on 
hover:</strong> Set the section title summary text color on hover.';

$string['trailFormatSettingsSectionTitleSummaryBackgroundColor'] = '<strong>Set the section title summary background color 
on hover:</strong> Set the section title summary background color on hover.';

$string['trailFormatSettingsSectionTitleSummaryOpacity'] = '<strong>Set the section title summary background opacity on 
hover:</strong> Set the section title summary background opacity, between 0 and 1 in increments of 0.1, when hovering over 
the section title in the trail box.';

$string['trailFormatSettingsNewActivityNotification'] = '<strong>Show new activity notification image:</strong> Show the 
new activity notification image when a new activity or resource is added to a section.';

$string['trailFormatSettingsAdjustPopupToWindow'] = '<strong>Adjust section popup to window:</strong> If enabled, the 
pop-up box with the section content will fit the window size and scroll within if necessary. If disabled, the entire page 
will scroll.';

$string['trailFormatSettingsUnavailableGrayOutside'] = '<strong>Unavailable gray outside:</strong> In trail view, show 
unavailable section images in gray and unlinked.';

$string['trailFormatSettingsSection0OnOwnPage'] = '<strong>Section 0 on its own page when off-trail and on a single section 
page:</strong> Have section 0 on its own page when off-trail and the "Course layout" setting is "One section per page".';

$string['trailResetOptions'] = 'Trail Reset Options';

$string['trailResetOptionsDescription'] = 'The "Trail Reset Options" allow you to restore various settings to their 
default values, as they were the first time the course was displayed in trail format. To access this tab, go to "desired 
course" -> "settings" -> "Trail Reset Options". This can be useful for reverting changes and ensuring consistent display.';

$string['trailResetTitle'] = 'Reset';

$string['trailResetDescription'] = 'The "Reset" option allows you to reset specific trail format settings to their default 
values for an individual course.';

$string['trailResetAlignImageContainer'] = '<strong>Image container alignments:</strong> Resets the alignments of the 
image container to the default value for all courses, so it will be the same as a course the first time it is in trail 
format.';

$string['trailResetImageContainerSize'] = '<strong>Image container sizes:</strong> Resets the sizes of the image containers 
to the default value for all courses, so it will be the same as a course the first time it is in trail format.';

$string['trailResetResizeImageMethod'] = '<strong>Image resizing methods:</strong> Resets the image resizing methods to 
the default value for all courses, so it will be the same as the first in trail formatting.';

$string['trailResetImageContainerStyle'] = '<strong>Image container styles:</strong> Resets the styles of the image 
container to the default value for all courses, so it will be the same as the first in trail formatting.';

$string['trailResetSectionTitle'] = '<strong>Section title options:</strong> Resets the section title options to the 
default value for all courses, so it will be the same as the first time it is in trail format.';

$string['trailResetNewActivity'] = '<strong>New activities:</strong> Resets the new activity notification images to the 
default value for all courses, so it will be the same as a course the first time it is in trail format.';

$string['trailResetPopupSectionWindow'] = '<strong>Adjust section pop-up to window:</strong> Restores the "Adjust to 
window" section popup to the default value for all courses, so it will be the same as a course the first time it is in 
trail format.';

$string['trailResetImageNavigation'] = '<strong>Image container navigation:</strong> Resets the image container navigation 
to the default value for all courses, so it will be the same as a course the first time it is in trail format.';

$string['trailResetAllTitle'] = 'Reset All';

$string['trailResetAllDescription'] = 'The "Reset All" option allows you to reset all trail format settings to their 
default values for all courses.';

$string['trailResetAllAlignImageContainer'] = '<strong>Image container alignments:</strong> Resets the alignments of the 
image container to the default value for all courses, so it will be the same as a course the first time it is in trail 
format.';

$string['trailResetAllImageContainerSize'] = '<strong>Image container sizes:</strong> Resets the sizes of the image 
containers to the default value for all courses, so it will be the same as a course the first time it is in trail format.';

$string['trailResetAllResizeImageMethod'] = '<strong>Image resizing methods:</strong> Resets the image resizing methods 
to the default value for all courses, so it will be the same as the first in trail formatting.';

$string['trailResetAllImageContainerStyle'] = '<strong>Image container styles:</strong> Resets the styles of the image 
container to the default value for all courses, so it will be the same as the first in trail formatting.';

$string['trailResetAllSectionTitle'] = '<strong>Section title options:</strong> Resets the section title options to the 
default value for all courses, so it will be the same as the first time it is in trail format.';

$string['trailResetAllNewActivity'] = '<strong>New activities:</strong> Resets the new activity notification images to 
the default value for all courses, so it will be the same as a course the first time it is in trail format.';

$string['trailResetAllPopupSectionWindow'] = '<strong>Adjust section pop-up to window:</strong> Restores the "Adjust to 
window" section popup to the default value for all courses, so it will be the same as a course the first time it is in 
trail format.';

$string['trailResetAllImageNavigation'] = '<strong>Image container navigation:</strong> Resets the image container 
navigation to the default value for all courses, so it will be the same as a course the first time it is in trail format.';
