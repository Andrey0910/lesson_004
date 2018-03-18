<?php
//Подключаем функции
require_once("functions.php");
//Включение буферизации вывода
ob_start();
// начало вывода первого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 1", "</h5>";
$distance = 200;
$speed = 10;
$way = ['Вперед', 'Назад', 'Нетралка'];
$car = new Car($distance, $speed, $way);
echo "<p>", $car->start(), "</p>";
echo "<p>", $car->onWay('Вперед'), "</p>";
echo "<p>", $car->go(), "</p>";
echo "<p>", $car->stop('Нетралка'), "</p>";
echo "</div>";
// конец вывода первого задания
// начало вывода второг задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 2", "</h5>";
$distance = 200;
$speed = 10;
$engine = new Engine($speed);
$car2 = new Car2($distance, $engine);
echo "<p>", $car2->engine->on(), "</p>";
for ($i=0, $t=0; $i < $car2->distance; $i+=10, $t+=5){
    if ($t == 90){
        echo "Температурп двигателя - ".$t.". ";
        $t = $car2->engine->cooling($t);
        echo "<br>";
    }
}
echo "<br>";
echo "<p>", $car2->engine->off(), "</p>";
echo "</div>";
// конец вывода второг задания
// начало вывода третьего задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 3", "</h5>";
$speed = 30;
$way = ['Вперед', 'Назад', 'Нетралка'];
$transmission = new AutomaticTransmission();
$car3 = new Car3($speed, $transmission);
echo "<p>", $car3->transmission->drive(), "</p>";
echo "<p>", $car3->transmission->reverse(), "</p>";
echo "<br>", "<br>";
$transmission = new ManualTransmission();
$car3 = new Car3($speed, $transmission);
echo "<p>", $car3->transmission->drive($car3->speed), "</p>";
echo "<p>", $car3->transmission->reverse(), "</p>";
echo "</div>";
// конец вывода третьего задания
//Возвращает содержимое буфера вывода
$content = ob_get_contents();
//Очищаем и отключаем буферизацию вывода
ob_end_clean();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Четвертое домашнее задание от loftschool.com</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Четвертое домашнее задание</h1>
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>