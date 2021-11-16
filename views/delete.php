<?php
session_start();
require_once "../php/connection.php";
    
    $delete="DELETE  FROM users WHERE id_users = :id";
    //echo $delete;
    $user = $_GET['user'];
    //$user = substr($user, 1, -1);
    //echo $user;
    $del = $connect->prepare($delete);
    $del->bindParam(':id', $user);
    try{
        $finsih = $del->execute();
        if($finsih){
            $statusCode = 204;
            header("Location: ../form.php?page=user");
        } else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e){
        $statusCode = 500;  
    }
?>