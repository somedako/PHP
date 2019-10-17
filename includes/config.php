<?php
 $config = [
    'title' => ' Блог  Lorum Ipsum!',
    'menu' => [
        'landing' => 'Главная',
        'blog' => 'Блог',
        'news' => 'Новости'
    ],
     'nav' => [
         'Компьютеры', 'Телефоны', 'Програмированние', 'Музыка', 'Железо'
     ],
    'db' => [
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'name' => 'test_blog'
    ]
];

 require_once 'db.php';