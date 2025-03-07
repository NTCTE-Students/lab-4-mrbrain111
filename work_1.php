<?php
// Функция для нахождения максимального числа в массиве
function findMaxNumber(array $numbers): int|float {
    return max($numbers);
}

// Пример использования
$numbers = [10, 20, 30, 40, 50];
$max_number = findMaxNumber($numbers);
echo "Максимальное число: $max_number"; // Выведет: Максимальное число: 50
?>