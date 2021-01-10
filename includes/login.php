<?php 
//Vérifié que l'adresse email et le mot de passe encodés sont accepter pour ouvrir la session
if(isset($_POST['email'])&& isset($_POST['password'])&& !empty($_POST['email']&& !empty($_POST['password']))){
    if ($_POST['email']=== $email_accepted && $_POST['password']=== $psw_accepted){
        $_SESSION['email']= $_POST['email'];
        $_SESSION['password']= $_POST['password'];
    }
    
    //envoyer les données de l'utilisateur sur le document logs.text
    // $filelog = 'includes/logs.txt';
    // $date = date('d m Y');
    // $time = date('h:i:sa');
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    // $user = "[" . $date . " " . $time . "] <" . $email . "> " . $password . " - Ip adress is : " . getIp() . "\n";
    // file_put_contents($filelog, $user, FILE_APPEND | LOCK_EX);
}
?>