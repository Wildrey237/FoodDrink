<?php
require_once ("foodrink2.php");
$sqlQuery = 'SELECT * FROM menu';

$take = $dbh->prepare($sqlQuery);
$take->execute();
$recups = $take->fetchAll();

foreach ($recups as $recup){
    echo ($recup['nommenu']."\n <br>");
    echo("<img src=".$recup['photo']."></img>");
}
