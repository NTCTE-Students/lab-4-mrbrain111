<?php
// Функция для удаления дубликатов из массива
function removeDuplicates(array $arr): array {
    return array_values(array_unique($arr));
}

// Пример использования
$arr = [1, 2, 2, 3, 4, 4, 5];
$unique_arr = removeDuplicates($arr);
echo "Массив без дубликатов: ";
print_r($unique_arr); // Выведет: Массив без дубликатов: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>