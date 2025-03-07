<?php
// Функция для конвертации температуры из градусов Цельсия в Фаренгейты
function celsiusToFahrenheit(float $celsius): float {
    return $celsius * 1.8 + 32;
}

// Пример использования
$celsius = 37;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "Температура в Фаренгейтах: $fahrenheit °F"; // Выведет: Температура в Фаренгейтах: 98.6 °F
?>