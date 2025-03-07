<?php
// Функция для форматирования даты
function formatDate(string $date): string {
    return date('d/m/Y', strtotime($date));
}

// Пример использования
$date = "2023-09-21";
$formatted_date = formatDate($date);
echo "Форматированная дата: $formatted_date"; // Выведет: Форматированная дата: 21/09/2023
?>