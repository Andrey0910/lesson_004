<?php
interface CarInterface{
    public function go();
}
class Car implements CarInterface
{
    public $distance;
    public $speed;
    private $way;
    public  $direction;
    public function __construct($distanc, $speed, $way)
    {
        $this->distanc = $distanc;
        $this->speed = $speed;
        $this->way = $way;
    }
    public function start(){
        echo "Включил двигатель";
    }
    public function onWay($direction){
        if (in_array($direction, $this->way)) {
            echo "Влключил передачу - " . $direction;
        }
        else{
            echo "У машины нет такой передачи.";
        }
    }
    public function go()
    {
        echo "Двигаюсь в соответствии с параметрами двигателя, при необходимости включаю охлаждение.";
    }
    public function stop($direction){
        echo "Выключаем двигатель.", "<br>";
        if (in_array($direction, $this->way)) {
            echo "Влключил передачу - " . $direction;
        }
        else{
            echo "У машины нет такой передачи.";
        }
    }
}
class Car2{
    public $distance;
    public $engine;
    public function __construct($distance, $engine)
    {
        $this->distance = $distance;
        $this->engine = $engine;
    }
}
class Engine{
    public $speed;
    public function __construct($speed)
    {
        $this->speed = $speed;
    }
    public function on(){
        echo "Двинатель включен.";
    }
    public function off(){
        echo "Двигатель выключен.";
    }
    public function cooling($t){
        echo "Включилось охлождение двигателя";
        return $t - 10;
    }
}
class Car3{
    public $speed;
    public $transmission;
    public function __construct($speed, $transmission)
    {
        $this->speed = $speed;
        $this->transmission = $transmission;
    }
}
abstract class Transmission{
    abstract public function drive($speed);
    abstract public function reverse();
}
class AutomaticTransmission extends Transmission{
    public function __construct()
    {
        echo "<p>", "Автоматическая коробка передач.", "</p>";
    }
    public function drive($speed = null)
    {
        echo "Режим езды в перед.";
    }
    public function reverse()
    {
        echo "Режим езды назад.";
    }
}
class ManualTransmission extends Transmission{
    public function __construct()
    {
        echo "<p>", "Ручная коробка передач.", "</p>";
    }
    public function drive($speed)
    {
        if ($speed <= 20){
            echo "Включена первая передача.";
        }
        else{
            echo "Включена вторая передача.";
        }
    }
    public function reverse()
    {
        echo "Включена задняя передача.";
    }
}