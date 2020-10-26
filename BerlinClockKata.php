<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $hour, int $minute): int
    {
        return $minute;
    }

    public function bloc_5_minutes(int $hour, int $minute): int
    {
        return $minute/5;
    }

    public function simple_hour(int $hour, int $minute): int
    {
        return $hour;
    }
}