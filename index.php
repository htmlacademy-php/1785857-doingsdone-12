<?php

require_once('helpers.php');
require_once('functions.php');

$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
    [
        'task' => 'Собеседование в IT компании',
        'date' => '12.07.2021',
        'category' => 'Работа',
        'result' => false,
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date' => '19.07.2021',
        'category' => 'Работа',
        'result' => false,
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date' => '15.07.2021',
        'category' => 'Учеба',
        'result' => true,
    ],
    [
        'task' => 'Встреча с другом',
        'date' => '20.07.2021',
        'category' => 'Входящие',
        'result' => false,
    ],
    [
        'task' => 'Купить корм для кота',
        'date' => '30.08.2021',
        'category' => 'Домашние дела',
        'result' => false,
    ],
    [
        'task' => 'Заказать пиццу',
        'date' => '31.08.2021',
        'category' => 'Домашние дела',
        'result' => false,
    ],
];

// HTML-код главной страницы
$page_content = include_template('main.php', ['categories' => $categories, 'tasks' => $tasks]);

// окончательный HTML-код
$layout_content = include_template('layout.php', ['content' => $page_content, 'title' => 'Дела в порядке', 'username' => 'Руслан Л.']);

print($layout_content);
