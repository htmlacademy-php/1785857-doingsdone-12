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
