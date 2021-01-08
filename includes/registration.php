<?php
session_start();

$firstName_accepted = "Aristo";
$lastName_accepted = "Cat";
$email_accepted ="lalalou@gmail.com";
$psw_accepted ="SuperWebmaster49";
?>

<div class="registrationPart">
        <h1>Registration</h1>
        <p class="second_title">Please enter your personal information </p>
        <?php 

        if(isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['firstName']) && isset($_POST['lastName']) && !empty($_POST['email']&& !empty($_POST['password']&& !empty($_POST['firstName']&& !empty($_POST['lastName'])))){
            if ($_POST['email']=== $email_accepted && $_POST['password']=== $psw_accepted && $_POST['firstName']=== $firstName_accepted && $_POST['lastName']=== $lastName_accepted){
                $_SESSION['email']= $_POST['email'];
                $_SESSION['password']= $_POST['password'];
                $_SESSION['fistName']= $_POST['fistName'];
                $_SESSION['lastName']= $_POST['lastName'];

        ?>
        
    </div>
