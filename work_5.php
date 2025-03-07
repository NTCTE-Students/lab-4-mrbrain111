<?php
// Функция для преобразования строки в заглавные буквы
function toUpperCase(string $str): string {
    return strtoupper($str);
}

// Пример использования
$str = "привет мир";
$uppercase_str = toUpperCase($str);
echo "Строка в верхнем регистре: $uppercase_str"; // Выведет: Строка в верхнем регистре: ПРИВЕТ МИР
?>