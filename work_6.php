<?php
// Функция для вычисления суммы цифр числа
function sumOfDigits(int $number): int {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = floor($number / 10);
    }
    return $sum;
}

// Пример использования
$number = 12345;
$digit_sum = sumOfDigits($number);
echo "Сумма цифр числа $number равна: $digit_sum"; // Выведет: Сумма цифр числа 12345 равна: 15
?>