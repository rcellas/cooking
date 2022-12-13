<?php
namespace App\Oven;

/**
 * 
 * @abstract class Oven
 * 
 */
abstract class Oven{

    /**
     * 
     * create data types
     * @protected @var int $grills -> parrillas
     * @protected @var int $degrees -> grados
     * @private @var string $cooking -> cocción
     * 
     */
    
    protected int $grills;
    protected int $degrees = 0;
    private string $cooking;
    
    /**
     * pass the parameters to the constructor
     * pass the value cooking to the constructor
     */
    public function __construct()
    {
        //Write your code here
    }

    /**
     * create a @abstract @method temperature
     * @return void
     * 
     */
    public function temperature()
    {
        //Write your code here
    }

    /**
     * return the value of the grills
     * @return int
     */
    public function getGrills()
    {
        // return $this->???;
    }

    /**
     * return the value of the cooking
     *
     */
    public function getCooking()
    {
       // write your code here
    }

    /**
     * return the value of the degrees
     * 
     */
    public function getDegrees()
    {
       //Write your code here
    }

}