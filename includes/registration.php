<?php
session_start();

$firstName_accepted = "Aristo";
$lastName_accepted = "Cat";
$email_accepted ="lalalou@gmail.com";
$psw_accepted ="SuperWebmaster49";
?>

<div class="registrationPart">
        <h1>Registration</h1>
        <p class="second_title">Please enter your personal informations </p>
        <?php include ("includes/registrationForm.php"); ?>
        
    </div>
