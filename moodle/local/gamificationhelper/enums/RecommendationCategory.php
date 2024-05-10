<?php

namespace gamificationhelper\enums;

enum RecommendationCategory: string
{
    case Participation = 'participation';
    case Motivation = 'motivation';
    case Challenge = 'challenge';
    case Collaboration = 'collaboration';
    case Exploration = 'exploration';

    public static function safeFrom($value): ?self
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return $case;
            }
        }
        return null;
    }

    public function getPlugins(): array
    {
        return match ($this) {
            self::Participation => [Plugin::BlockGame, Plugin::LevelUp],
            self::Motivation => [Plugin::LevelUp],
            self::Challenge => [Plugin::BlockGame, Plugin::FormatTrail],
            self::Collaboration => [Plugin::LevelUp],
            self::Exploration => [Plugin::FormatTrail],
        };
    }
}
