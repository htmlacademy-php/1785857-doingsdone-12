<?php

require_once('helpers.php');
require_once('functions.php');

$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
    [
        'task' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'category' => 'Работа',
        'result' => false,
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'category' => 'Работа',
        'result' => false,
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'category' => 'Учеба',
        'result' => true,
    ],
    [
        'task' => 'Встреча с другом',
        'date' => '22.12.2019',
        'category' => 'Входящие',
        'result' => false,
    ],
    [
        'task' => 'Купить корм для кота',
        'date' => 'null',
        'category' => 'Домашние дела',
        'result' => false,
    ],
    [
        'task' => 'Заказать пиццу',
        'date' => 'null',
        'category' => 'Домашние дела',
        'result' => false,
    ],
];

// HTML-код главной страницы
$page_content = include_template('main.php', ['categories' => $categories, 'tasks' => $tasks]);

// окончательный HTML-код
$layout_content = include_template('layout.php', ['content' => $page_content, 'title' => 'Дела в порядке', 'username' => 'Руслан Л.']);

print($layout_content);
