<?php
namespace BerlinClockKata;

class BerlinClockKata
{
    public function simple_minute(int $minute): int
    {
        return $minute%5;
    }

    public function bloc_5_minutes(int $minute): int
    {
        return $minute/5;
    }

    public function simple_hour(int $hour): int
    {
        return $hour;
    }

    public function bloc_5_hours(int $hour): int
    {
        return $hour/5;
    }

    public function seconds(int $second): int
    {
        if($second%2 === 0) return 1;
        return 0;
    }

    public function clock(int $hours, int $minutes, int $seconds): string
    {
        return strval($this->seconds($seconds)).", 0, "
            .strval($this->simple_hour($hours)).", "
            .strval($this->bloc_5_minutes($minutes)).", "
            .strval($this->simple_minute($minutes));
    }
}