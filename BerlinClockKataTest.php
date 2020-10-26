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
        $actual = $this->actSimple_minute(00,00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_simples_minutes_given00_01_shouldReturn1(){
        $actual = $this->actSimple_minute(00, 01, 00);

        $this->assertEquals("1", $actual);
    }

    //Étape 2

    public function test_bloc_5_minutes_given00_05_shouldReturn1(){
        $actual = $this->actBloc_5_minutes(00, 05, 00);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_06_shouldReturn1(){
        $actual = $this->actBloc_5_minutes(00,06,00);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_10_shouldReturn2(){
        $actual = $this->berlinClockKata->bloc_5_minutes(00, 10,00);

        $this->assertEquals("2", $actual);
    }

    //Étape 3
    public function test_simple_hours_given00_00_shouldReturn0(){
        $actual = $this->actSimple_hour(00,00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_simple_hours_given01_00_shouldReturn1(){
        $actual = $this->berlinClockKata->simple_hour(01, 00,00);

        $this->assertEquals("1", $actual);
    }

    //Étape 4
    public function test_bloc_5_hours_given00_00_shouldReturn0(){
        $actual = $this->berlinClockKata->bloc_5_hours(00,00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_bloc_5_hours_given01_00_shouldReturn0(){
        $actual = $this->berlinClockKata->bloc_5_hours(01,00,00);

        $this->assertEquals("0", $actual);
    }

    public function test_bloc_5_hours_given05_00_shouldReturn1(){
        $actual = $this->berlinClockKata->bloc_5_hours(05,00,00);

        $this->assertEquals("1", $actual);
    }

    //Étape 5


    public function actSimple_minute(int $hours, int $minutes, int $secondes): int
    {
        return $this->berlinClockKata->simple_minute($hours, $minutes, $secondes);
    }

    public function actBloc_5_minutes(int $hours, int $minutes, int $secondes): int
    {
        return $this->berlinClockKata->bloc_5_minutes($hours, $minutes, $secondes);
    }

    public function actSimple_hour(int $hours, int $minutes, int $secondes): int
    {
        return $this->berlinClockKata->simple_hour($hours, $minutes, $secondes);
    }

    public function actBloc_5_hours(int $hours, int $minutes, int $secondes): int
    {
        return $this->berlinClockKata->bloc_5_hours($hours, $minutes, $secondes);
    }
}