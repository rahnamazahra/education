<?php
namespace App\Enum;


enum CourseLevelEnum: string
{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED = 'advanced';

    public function title()
    {
        return match ($this) {
            self::BEGINNER => 'مبتدی',
            self::INTERMEDIATE => 'متوسط',
            self::ADVANCED => 'پیشرفته',
        };
    }
}
