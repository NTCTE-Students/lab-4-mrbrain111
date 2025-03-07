<?php
// Функция для генерации случайного пароля заданной длины
function generateRandomPassword(int $length = 8): string {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    
    return $password;
}

// Пример использования
$password = generateRandomPassword();
echo "Сгенерированный пароль: $password"; // Например, выведет: Сгенерированный пароль: aB7dE2Fh
?>