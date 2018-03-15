<?php
interface CarInterface{
    public function go();
}
class Car implements CarInterface
{
    public $distance;
    public $speed;
    private $way = ['Впред', 'Назад'];
    public  $direction;
    public function __construct($distanc = 0, $speed = 0, $direction = 'Впред')
    {
        $this->distanc = $distanc;
        $this->speed = $speed;
        if (in_array($direction, $this->way)){
            $this->direction = $direction;
        }
        else{
            echo "Напарвление движения задано не верно.";
            return;
        }
    }
    public function go()
    {
        echo $this->direction;
    }

}