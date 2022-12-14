<?php

namespace Tests\Oven;

use App\Oven\Chicken;
use PHPUnit\Framework\TestCase;

class ChickenTest extends TestCase
{
    public function testChickenHas6Grills()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Chicken
        $chicken = new Chicken("quemado");
        //WHEN-> Accion
        // Obtener el numero de grills
        $sut = $chicken->getGrills();
        //THEN-> Resultado
        $this->assertEquals(6, $sut);
    }

    public function testChickenHasStartDegrees0()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Chicken
        $chicken = new Chicken("hecho");
        //WHEN-> Accion
        // Obtener el numero de grados
        $sut = $chicken->getDegrees();
        //THEN-> Resultado
        $this->assertEquals(0, $sut);
   }

   public function testChickenWhenTemperatureDegreesIncreaseInNumber()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Chicken
        $chicken = new Chicken("poco hecho");
        //WHEN-> Accion
        // subir los grados de temperatura
        $chicken->temperature(150);
        $sut = $chicken->getDegrees();
        //THEN-> Resultado
        $this->assertEquals(300, $sut);
   }
}