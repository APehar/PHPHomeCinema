<?php
session_start();
require_once "../php/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../php/php_mailer/src/Exception.php';
require '../php/php_mailer/src/PHPMailer.php';
require '../php/php_mailer/src/SMTP.php';
    if(isset($_POST['sub']))
    {
        $email = $_POST['email'];
        $username = $_POST['name'];
        $pass = $_POST['pass'];
        $regUsername = "/^[a-zA-Z0-9]{4,20}$/";
        $regPass = "/^[a-zA-Z0-9]{5,20}$/";
        $errors = [];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	    {
		    $errors[] = "Email not valid";
	    }
	    if(!preg_match($regUsername, $username))
	    {
	    	$errors[] = "Username not valid";
        }
        if(!preg_match($regPass, $pass))
	    {
	    	$errors[] = "Password not valid";
        }
        if(count($errors)>0)
	    {
		    var_dump($errors);
		    //header("Location: form.php?page=user");
	    }
	    else
	    {
            $pass = md5($pass);
            //echo $pass;
            $token = md5(time() . $email);
            $insert = "INSERT INTO users (username, email, pass, active, form, token, role_id) VALUES (:user, :email, :pass, 0, 0, :token, 2)"; 
            $in = $connect->prepare($insert); 
            $in->bindParam(':user', $username);
            $in->bindParam(':email', $email);
            $in->bindParam(':pass', $pass);
	        $in->bindParam(':token', $token);
            try{
                $try = $in->execute();
                //echo "pa sine";
                if($try){
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'homecinemaproject1337@gmail.com';
                    $mail->Password = 'Kalgon123';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    //Recipients
                    $mail->setFrom('homecinemaproject1337@gmail.com', 'Registration Form');
                    $mail->addAddress($email);    
                    //Content
                    $mail->isHTML(true);                                  
                    $mail->Subject = 'Activate your account';
                    $href = "homecinemaproject1337.000webhostapp.com/views/activation.php?token=" . $token;
                    $mail->Body = '<h1>Home Cinema</h1><br/><br/>If you want to activate your account, click the link: <a href="' . $href . '">HERE</a>';
                    $mail->send();
                    //echo "to";
                    header("Location: ../form.php?page=singup&sent=yes");
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
?>
