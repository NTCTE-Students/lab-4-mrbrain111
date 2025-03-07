<?php
// Функция для нахождения второго по величине числа в массиве
function secondLargestNumber(array $numbers): ?int {
    // Сначала отсортируем массив по возрастанию
    sort($numbers);
    
    // Если массив содержит менее двух уникальных значений, возвращаем null
    if (count(array_unique($numbers)) < 2) {
        return null;
    }
    
    // Возвращаем второй по величине элемент после последнего уникального значения
    return $numbers[count($numbers) - 2];
}

// Пример использования
$numbers = [10, 20, 30, 40, 50];
$second_largest = secondLargestNumber($numbers);
echo "Второе по величине число: $second_largest"; // Выведет: Второе по величине число: 40

$numbers = [1, 1, 1, 1]; // В случае, когда нет второго по величине числа
$second_largest = secondLargestNumber($numbers);
var_dump($second_largest); // Выведет: null
?>