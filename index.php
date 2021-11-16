<?php
session_start();
    require_once "php/connection.php";
    if(!isset($_GET['page']))
    {
        header("Location: index.php?page=all");
    }
    include"views/header.php";
    include"views/meni.php";
    include"views/category.php";
    include"views/content.php"; 
    include"views/footer.php";
?>