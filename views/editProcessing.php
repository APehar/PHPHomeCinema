<?php
session_start();
require_once "../php/connection.php";
if(isset($_POST['editUser'])){
	$id = $_POST['id'];
	$email = $_POST['email'];
	$username = $_POST['name'];
	$active = $_POST['active'];
	$role = $_POST['role'];
    //echo "dolazi";
	//echo $username . $email . $id;
	$regUsername = "/^[a-zA-Z0-9]{4,20}$/";
	$errors = [];
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "Email not valid";
	}
	if(!preg_match($regUsername, $username))
	{
		$errors[] = "Username not valid";
	}
	if($active!=1 && $active!=0)
	{
		$errors[] = "Active not valid";
	}
	if($role!="guest" && $role!="admin")
	{
		$errors[] = "Role not valid";
	}
	if($role == "admin")
	{
		$role = 1;
	}
	else if($role == "guest")
	{
		$role = 2;
	}
	//var_dump($errors);
	if(count($errors)>0)
	{
		//var_dump($errors);
		header("Location: ../form.php?page=user");
	}
	else
	{
		$update = "UPDATE users SET username = :user, email = :email, active = :active, role_id = :roles WHERE id_users = :id";
		$up = $connect->prepare($update);
		$up->bindParam(':user', $username);
		$up->bindParam(':email', $email);
		$up->bindParam(':active', $active);
		$up->bindParam(':roles', $role);
		$up->bindParam(':id', $id);
		//echo $update;
		try{
       		$try = $up->execute();
        	if($try){
				//echo $update;
            	$statusCode = 204;
            	header("Location: ../form.php?page=user");
        	} else {
            	$statusCode = 500;
        	}
    	}
    	catch(PDOException $e){
        	$statusCode = 500;
        	//echo "catch";
		}
	}
}
else
{
    header("Location: ../form.php?page=user");
}  
?>

