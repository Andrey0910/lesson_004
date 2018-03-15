# Домашнее задание №4
Задание #1. Практика с ООП
Опишите несложный, но вполне конкретный автомобиль с помощью ООП.
1. Автомобиль должен иметь функцию движения с заданным расстоянием и
скоростью и направлением. Например “Автомобиль->Двигаться(200 метров, 10
м\с, вперед)”. При начале движения автомобиля:
a. вы включаете двигатель
b. Включаете нужную передачу (вперед\назад)
c. двигаетесь в соответствии с параметрами двигателя, при необходимости
включая охлаждения.
d. выключаете двигатель и коробку передач
2. Ваш автомобиль должен иметь двигатель. Двигатель должен иметь функцию
включения, выключения и охлаждения. Считается что двигатель мгновенно
разгоняется до указанной скорости и двигается равномерно все это время.
Охлаждение может быть включено ТОЛЬКО двигателем. Параметры двигателя:
a. Кол-во лошадиных сил. 1 лошадиная сила позволяет развивать 2м\с.
b. температура. Каждые пройденные 10 метров повышают температуру на
5 градусов. При достижении 90 градусов, двигатель нужно охладить с
помощью включения вентилятора. Каждое включение вентилятора
охлаждает на 10 градусов.
3. Ваш автомобиль может поддерживать одну из двух коробок передач -
автоматическую или ручную. Необязательно​: добавить нейтральную передачу
a. Автоматическая имеет два состояния:
i. Режим езды вперед
ii. Режим езды назад
b. Ручная коробка передач имеет:
i. передачи от 1 до 2. При скорости от 0 до 20 используется
передача №1, в противном случае передача №2.
1. Т.к. характеристика разгона в данной задаче отсутствует - как только передана скорость
больше 20 - всегда используется передача №2. Переключение между передачами внутри
программы не требуется
ii. задняя
4. Остальные опции автомобиля остаются на ваши усмотрение, например, вы
можете установить сиденье для водителя или руль.
Пример структуры:
● NIVA наследуется от класса
○ Car использует механизм trait и содержит
■ Engine
■ TransmissionAuto, TransmissionManual
● используют общий трейт который позволяет ехать назад
Какая именно коробка передач будет использована в конечном классе выбираются в
конструкторе конечного класса (в данном случае NIVA). Каждое действие выводится
на экран с указанием расстояния, на котором находится автомобиль в данный момент.
