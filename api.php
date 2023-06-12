<?php

$list = [
    ['text' => 'Creare un index.php in cui includere Vue ed Axios, entrambi tramite CDN.'],
    ['text' => 'Creare una seconda pagina api.php'],
    ['text' => 'Restituire i dati in JSON'],
    ['text' => 'Fare una chiamata axios alla pagina api.php'],
    ['text' => 'Stampare in console o in pagina col v-for'],
];

header('Content-Type: application/json');
$stringData = json_encode($list);

echo $stringData ;

?>