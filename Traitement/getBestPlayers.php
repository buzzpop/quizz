<?php
require_once "pdo.php";
global $pdo;
$limit= $_POST['limit'];
$offset= $_POST['offset'];

$response="SELECT Prenom, Nom, score from utilisateur where role='player'
 order by score desc LIMIT {$offset} , {$limit}";

$response= $pdo->query($response);
if ($response->rowCount()> 0){
    $data= $response->fetchAll();

    echo json_encode($data);

}

