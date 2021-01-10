<?php
session_start();

$firstName_accepted = "Aristo";
$lastName_accepted = "Cat";
$email_accepted ="lalalou@gmail.com";
$psw_accepted ="SuperWebmaster49";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Login Page</title>
</head>
<body> 
    <?php include ("includes/header.php"); ?>
    <?php         
        //fonction pour récupérr l'adresse IP de l'utilisateur
        function getIp(){
            if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
            elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else{
            $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        //Si les informations sont confirmées, ouvrir la session; si non, renvoyé à la login page avec log out
        if ($_SESSION){
                include("includes/profil.php");   
        }
        else{
            if (isset($_GET['m'])){
                switch($_GET['m']){
                    //login utilisateur
                    case "login" : include("includes/login.php"); 
                        if ($_SESSION){
                            include("includes/profil.php");
                        }else{
                            echo "Invalid profile returned to the registration page";
                        }
                    break;
                    //affichage du formulaire d'enregistrement
                    case "displayRegistrationForm" : include("includes/registrationForm.php"); 
                    break;
                    //enregistrement d'un nouvel utilisateur
                    case "UserRegistration" : include("includes/confirmationRegistration.php");
                    break;
                } 
            }
            else{
                include("includes/LoginForm.php");
            } 
        }
    ?>    
    <?php include ("includes/footer.php");?>
</body>
</html>
