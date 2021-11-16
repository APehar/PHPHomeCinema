<?php
session_start();
require_once "php/connection.php";
    include"views/header.php";
    include"views/meni.php";
    include"views/category.php";
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        switch($page)
        {
            case 'singup':
                include"views/singup.php";
                break;
            case 'login':
                include"views/login.php";
                break;
            case 'contact':
                include"views/contact.php";
                break;
            case 'form':
                include"views/form.php";
                break;
            case 'gallery':
            case 'gallery2':
            case 'gallery3':
            case 'gallery4':
            case 'gallery5':
            case 'gallery6':
            case 'gallery7':
            case 'gallery8':
            case 'gallery9':
                include"views/gallery.php";
                break;
            case 'user':
                include"views/user.php";
                break;
            case 'edit':
                include"views/edit.php";
                break;
        }
    }
include"views/footer.php";
?>