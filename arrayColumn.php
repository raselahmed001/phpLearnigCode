<?php

$column = array(
    array(
        'id' => 1,
        'userName' => 'Rasel',
        'email' => 'r@gmail.com',
    ),
    array(
        'id' => 2,
        'userName' => 'Manik',
        'email' => 'm@gmail.com',
    ),
    array(
        'id' => 3,
        'userName' => 'Sayman',
        'email' => '3@gmail.com',
    ),
);
$userName = array_column($column, 'email');
print_r ($userName);

?>