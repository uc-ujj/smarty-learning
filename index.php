<?php
require('./libs/Smarty.class.php');

$smarty = new Smarty;

// Creating Variable
$smarty->assign('title', 'Learning Smarty');

// Creating Array
$cities = array(
    array(
        'name' => 'New York',
        'population' => '8.4 million'
    ),
    array(
        'name' => 'London',
        'population' => '9 million'
    ),
    array(
        'name' => 'Tokyo',
        'population' => '13.9 million'
    )
);

$smarty->assign('word1', 'Ujjawal');

// Converting Array to String
$smarty->assign('name_arr', implode(', ' ,array('Ujjawal', 'Naman')));

$smarty->assign('cities', $cities);

// Creating Multi-Dimensional Array
$players = [
    '0' => [
        'name'=> 'Sunil Chhetri',
        'sport'=> 'Football'
    ],
    '1' => [
        'name'=> 'Pragnanantha',
        'sport' => 'Chess'
    ]
];

$smarty->assign('players', $players);

// Creating Objects
$user = new stdClass;
$user->name = 'Administrator';
$user->profile = 'admin';

$smarty->assign('user', $user);

function add($num1) {
    return $num1 * 2;
}

$smarty->display('./templates/index.tpl');



?>
