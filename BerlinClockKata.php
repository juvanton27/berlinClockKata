<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $heure, int $minute): int
    {
        if($minute === 1) return 1;
        return 0;
    }
}