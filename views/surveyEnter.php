<?php
session_start();
require_once "../php/connection.php";
if(isset($_POST['select'])){	
    $select = $_POST['select'];
    //echo $select;
    $user = $_SESSION['user'];
    $user_id = $user['id_users'];
    //echo $user_id;
    $surveyUpdate = "UPDATE users SET movies_id = :sel, form = '1' WHERE id_users = :id";
	$survey = $connect->prepare($surveyUpdate);
	$survey->bindParam(':sel', $select);
	$survey->bindParam(':id', $user_id);
		//echo $surveyUpdate;
		try{
       		$try = $survey->execute();
        	if($try){
				//echo $surveyUpdate;
            	$statusCode = 204;
            	header("Location: ../index.php?page=all");
        	} else {
            	$statusCode = 500;
        	}
    	}
    	catch(PDOException $e){
        	$statusCode = 500;
        	//echo "catch";
		}
}
else
{
    header("Location: ../form.php?page=form");
}
?>
