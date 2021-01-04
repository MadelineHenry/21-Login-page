<?php
session_start();

if(!isset($_SESSION['logged'])){
    $_SESSION['logged'] = false;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Login Page</title>
</head>
<body>
   
    <?php include ("./includes/header.php"); ?>
    
    <div class="AccessPart">
        <h1>Restricted access</h1>
        <p class="second_title">Please enter your credentials</p>
        <?php 
            if($_SESSION['logged']=== true){
                include('./includes/profil.php')
            }
            else if(isset($_POST['email'])&& isset($_POST['password'])){
                $username = "hopper@becode.org";
                $password = "phpsuper";

                file_put_contents('logs.txt', "tentative", FILE_APPEND);
                
                if($POST['email'] === $username && $_POST['password'] === $password){
                    include('./includes/formular.php')
                    $_SESSION['logged'] = true;
                    include('./includes/profil.php');
                }
                else{
                    echo "Wrong username/password";
                }
                file_put_contents(logs.txt)
            }
            else{
                include("./includes/formular.php")    
            }
        ?>
    </div>
    
    <?php include ("./includes/footer.php"); ?>
    
</body>
</html>