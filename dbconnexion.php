<?php

    $serveur = "localhost";
    $dbname = "dbcertificat";
    $user = "root";
    $pass = "";


    try{
        //On se connecte à la BDD
        $pdo = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'bd connected';
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>

<?php
$dsn = 'mysql:host=localhost;dbname=dbcertificat';
$username = "root";
$password = "";
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
// echo 'connexion success';
} catch(PDOException $e) {

}
?>

<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbcertificat');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>