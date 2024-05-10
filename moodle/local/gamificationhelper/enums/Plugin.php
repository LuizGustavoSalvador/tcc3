<?php

namespace gamificationhelper\enums;

enum Plugin: array
{
    case BlockGame = [
        'name' => 'Block Game',
        'slug' => 'game',
        'url' => 'https://moodle.org/plugins/download.php/29329/block_game_moodle41_2023053101.zip'
    ];

    case LevelUp = [
        'name' => 'Level Up',
        'slug' => 'block_xp',
        'url' => 'https://moodle.org/plugins/download.php/31773/block_xp_moodle44_2024042104.zip'
    ];

    case FormatTrail = [
        'name' => 'Format Trail',
        'slug' => 'trail',
        'url' => 'https://moodle.org/plugins/download.php/29369/format_trail_moodle42_2023060501.zip'
    ];
}
