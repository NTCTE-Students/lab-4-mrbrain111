<?php
// Функция для проверки простого числа
function isPrime(int $num): bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Пример использования
$number = 17;
if (isPrime($number)) {
    echo "$number является простым числом.";
} else {
    echo "$number не является простым числом.";
}
?>