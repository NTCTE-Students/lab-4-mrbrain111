<?php
// Функция для нахождения количества слов в строке
function countWords(string $sentence): int {
    return count(explode(' ', $sentence));
}

// Пример использования
$sentence = "Привет мир!";
$word_count = countWords($sentence);
echo "Количество слов в строке: $word_count"; // Выведет: Количество слов в строке: 2
?>