<?php
session_start();
require_once "../php/connection.php";
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    //echo $pass;
    $query = "SELECT * FROM users WHERE email = ? AND pass = ? AND active = 1";
    $stmt = $connect->prepare($query);
    try{
        $stmt->execute([$email, $pass]);
        $log = $stmt->fetch();
        if(count($stmt) == 1)
        {
            //echo "Uspeso ste ulogovani";
            $_SESSION['user'] = $log;
            //var_dump($log);
            $user = $_SESSION['user'];
            //var_dump($user);
            header("Location: ../index.php?page=all");
        }
        else
        {
            //echo "ne moze";
            header("Location: ../form.php?page=login&try=yes");
        }
    }
    catch(PDOException $e){
            $statusCode = 500;  
        }      
?>
