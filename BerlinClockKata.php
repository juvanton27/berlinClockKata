<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $hour, int $minute, int $seconde): int
    {
        return $minute;
    }

    public function bloc_5_minutes(int $hour, int $minute, int $seconde): int
    {
        return $minute/5;
    }

    public function simple_hour(int $hour, int $minute, int $seconde): int
    {
        return $hour;
    }

    public function bloc_5_hours(int $hour, int $minute, int $seconde): int
    {
        return $hour/5;
    }
}