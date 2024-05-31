<?php

namespace gamificationhelper\classes;

class recommendationPlugin {
    const DEVELOPMENT_AND_ACHIEVEMENT = 'developmentAndAchievement';
    const OWNERSHIP_AND_POSSESSION = 'ownershipAndPossession';
    const EMPOWERMENT_AND_CREATIVITY = 'empowermentAndCreativity';
    const UNPREDICTABILITY_AND_CURIOSITY = 'unpredictabilityAndCuriosity';
    const SOCIAL_INFLUENCE_AND_RELATEDNESS = 'socialInfluenceAndRelatedness';
    const COMPETITIVE = 'competitive';
    const COOPERATIVE = 'cooperative';
    const INDEPENDENT = 'independent';
    const EPIC_NARRATIVE = 'epicNarrative';
    const PLUGINS = [
        [
            'name' => 'Block Game',
            'slug' => 'blockGame',
            'key' => 'game',
            'download' => 'https://moodle.org/plugins/download.php/29329/block_game_moodle41_2023053101.zip',
            'url' => 'https://moodle.org/plugins/block_game',
            'objectives' => [self::OWNERSHIP_AND_POSSESSION, self::SOCIAL_INFLUENCE_AND_RELATEDNESS],
            'approaches' => [self::COOPERATIVE, self::COMPETITIVE]
        ],
        [
            'name' => 'Level Up XP - Gamification',
            'slug' => 'blockXp',
            'key' => 'xp',
            'download' => 'https://moodle.org/plugins/download.php/31773/block_xp_moodle44_2024042104.zip',
            'url' => 'https://moodle.org/plugins/block_xp',
            'objectives' => [self::DEVELOPMENT_AND_ACHIEVEMENT, self::SOCIAL_INFLUENCE_AND_RELATEDNESS],
            'approaches' => [self::COMPETITIVE, self::INDEPENDENT]
        ],
        [
            'name' => 'Trail format',
            'slug' => 'trail',
            'key' => 'trail',
            'download' => 'https://moodle.org/plugins/download.php/29369/format_trail_moodle42_2023060501.zip',
            'url' => 'https://moodle.org/plugins/trail',
            'objectives' => [self::UNPREDICTABILITY_AND_CURIOSITY, self::EMPOWERMENT_AND_CREATIVITY],
            'approaches' => [self::INDEPENDENT, self::EPIC_NARRATIVE]
        ]
    ];

    public static function getPlugins(string $objective = '', string $approach = '', string $slug = '') {
        if(empty($slug)){
            $recommendedPlugins = [];

            foreach (self::PLUGINS as $plugin) {
                if (\in_array($objective, $plugin['objectives']) && \in_array($approach, $plugin['approaches'])) {
                    $recommendedPlugins[] = $plugin;
                }
            }

            return $recommendedPlugins;
        }else{
            return \array_filter(self::PLUGINS, fn($p) => $p['slug'] === $slug);
        }
    
    }
}