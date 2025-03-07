<?php
// Функция для определения длины строки без использования встроенных функций
function customStrlen(string $str): int {
    $length = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $length++;
    }
    return $length;
}

// Пример использования
$str = "Привет мир!";
$custom_length = customStrlen($str);
echo "Длина строки: $custom_length"; // Выведет: Длина строки: 12
?>