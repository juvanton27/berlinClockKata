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

    //Étape 2

    public function test_bloc_5_minutes_given00_05_shouldReturn1(){
        $berlinClockKata = new BerlinClockKata();

        $actual = $berlinClockKata->bloc_5_minutes(00, 05);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_06_shouldReturn1(){
        $berlinClockKata = new BerlinClockKata();

        $actual = $berlinClockKata->bloc_5_minutes(00, 06);

        $this->assertEquals("1", $actual);
    }
}
