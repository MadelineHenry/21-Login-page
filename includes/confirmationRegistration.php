<?php

// if(isset($_POST['firstname'])&& isset($_POST['lastname'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['gender'])){

// }

// On ajoute une entrée dans la table users
$sql = "INSERT INTO users(firstname, lastname, email, password, gender) VALUES('". $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "' ,'" . $_POST['password'] . "','" . $_POST['gender'] . "');";

try{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=exercices;charset=utf8', 'root', '');
    $bdd->exec($sql);
    }
    
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>

<p> Your registration is registered </p>
<a class="home_button" href="index.php">Home</a>