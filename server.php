<?php 

$listJson = file_get_contents('data.json'); //prendo il file json e lo metto in una variabile
/* var_dump($listJson); */

//non va fatto il decode perchè è un json

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {
    $list = json_decode($listJson, true);
}

header('Content-Type: application/json'); //serve per specificare che il server restituisca un json

echo $listJson;

