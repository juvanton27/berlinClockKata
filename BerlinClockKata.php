<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $heure, int $minute): int
    {
        return $minute;
    }

    public function bloc_5_minutes(int $heure, int $minute): int
    {
        return 1;
    }
}