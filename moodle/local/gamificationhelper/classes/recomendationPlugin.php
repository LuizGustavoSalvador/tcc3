<?php

namespace gamificationhelper\classes;

class recomendationPlugin {
    const PARTICIPATION = 'participation';
    const MOTIVATION = 'motivation';
    const CHALLENGE = 'challenge';
    const COLLABORATION = 'collaboration';
    const EXPLORATION = 'exploration';

    const BLOCK_GAME = [
        'name' => 'Block Game', 
        'slug' => 'game', 
        'download' => 'https://moodle.org/plugins/download.php/29329/block_game_moodle41_2023053101.zip',
        'url' => 'https://moodle.org/plugins/block_game'
    ];

    const LEVEL_UP = [
        'name' => 'Level Up XP - Gamification', 
        'slug' => 'block_xp', 
        'download' => 'https://moodle.org/plugins/download.php/31773/block_xp_moodle44_2024042104.zip',
        'url' => 'https://moodle.org/plugins/block_xp'
    ];

    const FORMAT_TRAIL = [
        'name' => 'Trail format', 
        'slug' => 'trail', 
        'download' => 'https://moodle.org/plugins/download.php/29369/format_trail_moodle42_2023060501.zip',
        'url' => 'https://moodle.org/plugins/trail'
    ];

    public static function getPlugins($category) {
        $plugins = [
            self::PARTICIPATION => [self::BLOCK_GAME, self::LEVEL_UP],
            self::MOTIVATION => [self::LEVEL_UP],
            self::CHALLENGE => [self::BLOCK_GAME, self::FORMAT_TRAIL],
            self::COLLABORATION => [self::LEVEL_UP],
            self::EXPLORATION => [self::FORMAT_TRAIL]
        ];

        return $plugins[$category] ?? [];
    }
}