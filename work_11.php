<?php
// Функция для вычисления факториала числа с использованием цикла
function factorial(int $num): int {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

// Пример использования
$number = 5;
$factorial_result = factorial($number);
echo "Факториал числа $number равен: $factorial_result"; // Выведет: Факториал числа 5 равен: 120
?>