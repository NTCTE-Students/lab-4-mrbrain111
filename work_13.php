<?php
// Функция для вычисления среднего арифметического массива
function averageArray(array $numbers): float {
    return array_sum($numbers) / count($numbers);
}

// Пример использования
$numbers = [10, 20, 30, 40, 50];
$average = averageArray($numbers);
echo "Среднее арифметическое массива: $average"; // Выведет: Среднее арифметическое массива: 30
?>