<?php
require "vendor/autoload.php";
require "BerlinClockKata.php";

use BerlinClockKata\BerlinClockKata;
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    //Étape 1

    public function test_simples_minutes_given00_00_shouldReturn0(){
        $berlinClockKata = new BerlinClockKata();

        $actual = $berlinClockKata->simple_minute(00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_simples_minutes_given00_01_shouldReturn1(){
        $berlinClockKata = new BerlinClockKata();

        $actual = $berlinClockKata->simple_minute(00, 01);

        $this->assertEquals("1", $actual);
    }
}
