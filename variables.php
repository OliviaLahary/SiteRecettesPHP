<?php

$users = [
    [
        'full_name' => 'Marion Cotillon ',
        'email' => 'marion.cotillon@exemple.fr',
        'age' => 26,
    ],
    [
        'full_name' => 'Guillaume Canardet ',
        'email' => 'guillaume.canardet@exemple.fr',
        'age' => 40,
    ],
    [
        'full_name' => 'Camille Lalouche ',
        'email' => 'camille.lalouche@exemple.fr',
        'age' => 20,
    ],
    [
        'full_name' => 'toto ',
        'email' => 'toto@exemple.fr',
        'age' => 20,
        'password' => 'toto',
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Cassoulet:  faire cuire les haricots ',
        'author' => 'marion.cotillon@exemple.fr',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Couscous: faire cuire les legumes ',
        'author' => 'guillaume.canardet@exemple.fr',
        'is_enabled' => true,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Escalope milanaise : faire cuire l&#700;escalope',
        'author' => 'guillaume.canardet@exemple.fr',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => 'Salade Romaine : mettre de la salade dans un plat.',
        'author' => 'camille.lalouche@exemple.fr',
        'is_enabled' => true,
    ],
];

if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}
