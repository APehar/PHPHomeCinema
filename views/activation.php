<?php
session_start();
require_once "../php/connection.php";
    $token = $_GET['token'];
    $query = "UPDATE users SET active = 1 WHERE token = :token";
    $activate = $connect->prepare($query);
    $activate->bindParam(':token', $token);
	//echo $query;
	try{
       	$try = $activate->execute();
        if($try){
			//echo $query;
            $statusCode = 204;
            header("Location: ../form.php?page=login");
        } else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e){
        $statusCode = 500;
        //echo "catch";
	}    
?>