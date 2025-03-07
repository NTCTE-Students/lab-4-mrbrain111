<?php
// Функция для сортировки массива по возрастанию
function sortArrayAscending(array $numbers): array {
    sort($numbers);
    return $numbers;
}

// Пример использования
$numbers = [5, 3, 1, 4, 2];
$sorted_numbers = sortArrayAscending($numbers);
echo "Отсортированный массив: ";
print_r($sorted_numbers); // Выведет: Отсортированный массив: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>