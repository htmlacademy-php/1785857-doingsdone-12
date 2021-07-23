<?php
function countTasksByCategory(array $arr, string $cat): int
{
    $counter = 0;
    foreach ($arr as $task) {
        if ($task['category'] === $cat) {
            ++$counter;
        }
    }
    return $counter;
}

// Перевести дату выполнения задачи в формат timestamp.

// Вычесть из этого числа текущий timestamp.

// Проверить, что разница меньше или равна 24 часам.

function countRemainingHours(array $arr, string $date): bool
{
    foreach ($arr as $task) {
        $deadline_date = strtotime($date);
        $current_date = time();
        $hours_remain = floor(($deadline_date - $current_date) / 3600);
    }
    if ($hours_remain <= 24) {
        return true;
    }
    else return false;
}
