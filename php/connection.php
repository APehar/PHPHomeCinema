<?php

$serverBaze = 'localhost';
$username = 'id6242216_homeadmin';
$password = 'Kalgon123';
$bazaPodataka = 'id6242216_homecinema';

try{
    $connect = new PDO("mysql:host=$serverBaze;dbname=$bazaPodataka", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $x)
{
    echo $x->getMessage;
}


?>