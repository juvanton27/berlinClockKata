<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $hour, int $minute, int $second): int
    {
        return $minute;
    }

    public function bloc_5_minutes(int $hour, int $minute, int $second): int
    {
        return $minute/5;
    }

    public function simple_hour(int $hour, int $minute, int $second): int
    {
        return $hour;
    }

    public function bloc_5_hours(int $hour, int $minute, int $second): int
    {
        return $hour/5;
    }

    public function seconds(int $hour, int $minute, int $second): int
    {
        if($second%2 === 0) return 1;
        return 0;
    }
}