<?php
session_start();
require_once('dbconnexion.php');
@$matricule=isset($_POST['matricule'])?$_POST['matricule']:"";
@$password=isset($_POST['password'])?$_POST['password']:"";
$requete="select * from users where matricule='$matricule'and motdepasse='$password'" ;
$resultat=$pdo->query($requete);
if ($user=$resultat->fetch()){
    if($user['etat']==1){
        $_SESSION['user']=$user;
        header('location:form.php');
    }
    else{
        $_SESSION['errlogin']="<strong>Erreur</strong>Votre Compte est desactivé";
        header('location:index.php');
    }
}
else{
    $_SESSION['errlogin']="<strong>Erreur</strong>Login ou mot de passe incorrect";
    header('location:index.php');
}
?>