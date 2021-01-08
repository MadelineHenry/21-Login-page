<?php
session_start();
// try{
//     $bdd = new PDO('mysql:host=localhost;port=3307;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
?>

<?php
$name_accepted = "Aristo Cat";
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
    
    <div class="AccessPart">
        <h1>Restricted access</h1>
        <p class="second_title">Please enter your credentials</p>
        <?php 

        //vérifié que l'adresse email et le mot de passe encodés sont accepter pour ouvrir la session
        if(isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['name']) && !empty($_POST['email']&& !empty($_POST['password']&& !empty($_POST['name'])))){
            if ($_POST['email']=== $email_accepted && $_POST['password']=== $psw_accepted && $_POST['name']=== $name_accepted){
                $_SESSION['email']= $_POST['email'];
                $_SESSION['password']= $_POST['password'];
                $_SESSION['name']= $_POST['name'];
        }

        //envoyer les données de l'utilisateur sur le document logs.text
        $filelog = 'includes/logs.txt';
        $date = date('d m Y');
        $time = date('h:i:sa');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = "[" . $date . " " . $time . "] <" . $email . "> " . $password . " - Ip adress is : " . getIp() . "\n";
        file_put_contents($filelog, $user, FILE_APPEND | LOCK_EX);
        }
        
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
        
        //si les informations sont confirmées, ouvrir la session; si non renvoyé à la login page avec log out
        if ($_SESSION){
            include("includes/profil.php");
        }
        else{
            include("includes/LoginForm.php");
        }
        // else if {
        //     include("includes/registrationForm.php");
        // }
        ?>
        
    </div>
    
    <?php include ("includes/footer.php"); ?>
    
</body>
</html>
