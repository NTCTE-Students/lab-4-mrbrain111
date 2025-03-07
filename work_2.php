<?php
// Функция для проверки палиндрома
function isPalindrome(string $str): bool {
    $str = strtolower(str_replace(' ', '', $str)); // Убираем пробелы и приводим к нижнему регистру
    return $str === strrev($str);
}

// Пример использования
$str = "Madam";
if (isPalindrome($str)) {
    echo "$str является палиндромом."; // Выведет: Madam является палиндромом.
} else {
    echo "$str не является палиндромом.";
}
?>