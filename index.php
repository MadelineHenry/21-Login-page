<?php
session_start();
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
        if(isset($_POST['email'])&& isset($_POST['password'])&& !empty($_POST['email']&& !empty($_POST['password']))){
            if ($_POST['email']=== $email_accepted && $_POST['password']=== $psw_accepted){
                    $_SESSION['email']= $_POST['email'];
                    $_SESSION['password']= $_POST['password'];
            }
        }
        
        function getIp(){
            if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
            }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $filelog = 'includes/logs.txt';
        $date = date('d m Y');
        $time = date('h:i:sa');
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        $user = "[" . $date . " " . $time . "] <" . $_POST['email'] . "> " . $_POST['password'] . " - Ip adress is : " . getIp() . "\n";
        file_put_contents($filelog, $user, FILE_APPEND | LOCK_EX); 
        ?>
    </div>
    
    <?php include ("includes/footer.php"); ?>
    
</body>
</html>
