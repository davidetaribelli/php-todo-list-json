<?php

$list = [
    ['text' => 'Svegliarsi alle 8:00'],
    ['text' => 'Fare colazione'],
    ['text' => 'Lavarsi i denti'],
];

header('Content-Type: application/json');
$stringData = json_encode($list);

echo $stringData ;

?>