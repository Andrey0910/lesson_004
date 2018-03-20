<?php

interface CarInterface
{
    public function go($distance);
}

class Car implements CarInterface
{
    public $distance;
    public $speed;
    private $way;
    public $direction;
    public $transmission;
    public $season;
    use Engine, AutomaticTransmission, ManualTransmission, Wheels;

    public function __construct($distance, $speed, $way, $transmission, $season)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->way = $way;
        $this->transmission = $transmission;
        $this->season = $season;
        echo "Расстояние - " . $this->distance;
        echo "<br>", "Скорость - " . $this->speed;
        echo "<br>", "Коробка передач - " . $this->transmission;
        echo "<br>", $this->rubber($season);
    }

    public function start()
    {
        $this->on();
    }

    public function onWay()
    {
        if ($this->transmission == "automatic") {
            $this->driveAutomatic();
        } elseif ($this->transmission == "manual") {
            $this->driveManual($this->speed);
        }
    }

    public function go($distance)
    {
        for ($i = 0, $t = 0; $i < $this->distance; $i += 10, $t += 5) {
            if ($t == 90) {
                echo "Температурп двигателя - " . $t . ". ";
                $t = $this->cooling($t);
                echo "<br>";
            }
        }
    }

    public function stop()
    {
        $this->off();
    }
}

trait Engine
{
    public function on()
    {
        echo "<br>", "Включил двигатель.";
    }

    public function off()
    {
        echo "Выключил двигатель.";
    }

    public function cooling($t)
    {
        echo "Включилось охлождение двигателя";
        return $t - 10;
    }
}

class Car3
{
    public $speed;
    public $transmission;

    public function __construct($speed, $transmission)
    {
        $this->speed = $speed;
        $this->transmission = $transmission;
    }
}

trait AutomaticTransmission
{
    public function driveAutomatic()
    {
        echo "Включил на каробке передач режим езды в перед.";
    }

    public function reverseAutomatic()
    {
        echo "Включил на каробке передач режим езды назад.";
    }
}

trait ManualTransmission
{
    public function driveManual($speed)
    {
        if ($speed <= 20) {
            echo "Включил на каробке передач первая передача.";
        } else {
            echo "Включил на каробке передач вторая передача.";
        }
    }

    public function reverseManual()
    {
        echo "Включил на каробке передач задняя передача.";
    }
}

trait Wheels
{
    public function rubber($season)
    {
        if ($season == "winter") {
            echo "Одета зимняя резина.";
        } else {
            echo "Одета леняя резина.";
        }
    }

}