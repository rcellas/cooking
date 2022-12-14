<?php

namespace Tests\Oven;

use App\Oven\Cannelloni;
use PHPUnit\Framework\TestCase;

class CannelloniTest extends TestCase
{
    // numero de parrillas
    public function testCannelloniHas4Grills()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Cannelloni
        $cannelloni = new Cannelloni("quemado");
        //WHEN-> Accion
        // Obtener el numero de grills
        // sut = system under test
        $sut = $cannelloni->getGrills();
        //THEN-> Resultado
        $this->assertEquals(4, $sut);
    }

    // punto de cocción de la comida
    public function testCannelloniHasCooking()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Cannelloni
        $cannelloni = new Cannelloni("quemado");
        //WHEN-> Accion
        // Obtener si la comida esta cocinado
        // sut = system under test
        $sut = $cannelloni->getCooking();
        //THEN-> Resultado
        $this->assertEquals("quemado", $sut);
    }

    // encender horno
    public function testCannelloniHasStartDegrees0()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Cannelloni
        $cannelloni = new Cannelloni("hecho");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $cannelloni->getDegrees();
        //THEN-> Resultado
        $this->assertEquals(0, $sut);
    }

    public function testCannelloniWhenTemperatureDegreesIncreaseInNumber()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Cannelloni
        $cannelloni = new Cannelloni("poco hecho");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $cannelloni->temperature(150);
        $sut = $cannelloni->getDegrees();
        //THEN-> Resultado
        $this->assertEquals(150, $sut);
    }
}
