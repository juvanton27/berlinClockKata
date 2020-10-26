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
        $actual = $this->actSimple_minute(00);

        $this->assertEquals("0", $actual);
    }

    public function test_simples_minutes_given00_01_shouldReturn1(){
        $actual = $this->actSimple_minute( 01);

        $this->assertEquals("1", $actual);
    }

    //Étape 2

    public function test_bloc_5_minutes_given00_05_shouldReturn1(){
        $actual = $this->actBloc_5_minutes(05);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_06_shouldReturn1(){
        $actual = $this->actBloc_5_minutes(06);

        $this->assertEquals("1", $actual);
    }

    public function test_bloc_5_minutes_given00_10_shouldReturn2(){
        $actual = $this->berlinClockKata->bloc_5_minutes(10);

        $this->assertEquals("2", $actual);
    }

    //Étape 3

    public function test_simple_hours_given00_00_shouldReturn0(){
        $actual = $this->actSimple_hour(00);

        $this->assertEquals("0", $actual);
    }

    public function test_simple_hours_given01_00_shouldReturn1(){
        $actual = $this->actSimple_hour(01);

        $this->assertEquals("1", $actual);
    }

    //Étape 4

    public function test_bloc_5_hours_given00_00_shouldReturn0(){
        $actual = $this->actBloc_5_hours(00);

        $this->assertEquals("0", $actual);
    }

    public function test_bloc_5_hours_given01_00_shouldReturn0(){
        $actual = $this->actBloc_5_hours(01);

        $this->assertEquals("0", $actual);
    }

    public function test_bloc_5_hours_given05_00_shouldReturn1(){
        $actual = $this->actBloc_5_hours(05);

        $this->assertEquals("1", $actual);
    }

    //Étape 5

    public function test_seconds_given00_00_00_shouldReturn1(){
        $actual = $this->actSeconds(00);

        $this->assertEquals("1", $actual);
    }

    public function test_seconds_given00_00_01_shouldReturn0(){
        $actual = $this->actSeconds(01);

        $this->assertEquals("0", $actual);
    }

    //Étape 6

    public function test_clock_given00_00_00_shouldReturn1_0_0_0_0(){
        $actual = $this->actClock(00,00,00);

        $this->assertEquals("1, 00, 00, 00, 00", $actual);
    }


    private function actSimple_minute(int $minutes): int
    {
        return $this->berlinClockKata->simple_minute($minutes);
    }

    private function actBloc_5_minutes(int $minutes): int
    {
        return $this->berlinClockKata->bloc_5_minutes($minutes);
    }

    private function actSimple_hour(int $hours): int
    {
        return $this->berlinClockKata->simple_hour($hours);
    }

    private function actBloc_5_hours(int $hours): int
    {
        return $this->berlinClockKata->bloc_5_hours($hours);
    }

    private function actSeconds(int $seconds): int
    {
        return $this->berlinClockKata->seconds($seconds);
    }

    private function actClock(int $hours, int $minutes, int $seconds): string
    {
        return $this->berlinClockKata->clock($hours, $minutes, $seconds);
    }
}