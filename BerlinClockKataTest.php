<?php
require "vendor/autoload.php";
require "BerlinClockKata.php";

use BerlinClockKata\BerlinClockKata;
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    private $berlinClockKata;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClockKata = new BerlinClockKata();
    }
    //Étape 1

    public function test_simples_minutes_given00_00_shouldReturn0(){
        $actual = $this->berlinClockKata->simple_minute(00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_simples_minutes_given00_01_shouldReturn1(){
        $actual = $this->berlinClockKata->simple_minute(00, 01);

        $this->assertEquals("1", $actual);
    }

    //Étape 2

    public function test_bloc_5_minutes_given00_05_shouldReturn1(){
        $actual = $this->berlinClockKata->bloc_5_minutes(00, 05);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_06_shouldReturn1(){
        $actual = $this->berlinClockKata->bloc_5_minutes(00, 06);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_10_shouldReturn2(){
        $actual = $this->berlinClockKata->bloc_5_minutes(00, 10);

        $this->assertEquals("2", $actual);
    }

    //Étape 3
    public function test_simple_hours_given00_00_shouldReturn0(){
        $actual = $this->berlinClockKata->simple_hour(00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_simple_hours_given01_00_shouldReturn1(){
        $actual = $this->berlinClockKata->simple_hour(01, 00);

        $this->assertEquals("1", $actual);
    }

    //Étape 4
    public function test_bloc_5_hours_given00_00_shouldReturn0(){
        $actual = $this->berlinClockKata->bloc_5_hours(00,00);

        $this->assertEquals("0", $actual);
    }
}