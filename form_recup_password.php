<?php 
session_start();
require_once('dbconnexion.php');
@$matricule=isset($_POST['matricule-recup'])?$_POST['matricule-recup']:"";
@$nom=isset($_POST['nom-recup'])?$_POST['nom-recup']:"";
@$datenaiss=isset($_POST['datenaissance-recup'])?$_POST['datenaissance-recup']:"";
$requete="select * from users where matricule='$matricule'and datedenaissance='$datenaiss'" ;
$resultat=$pdo->query($requete);
if ($user=$resultat->fetch()){
    if($user['etat']==1 && $user['nom'].' '.$user['prenom']==$nom){
        $passRecup = $user['motdepasse'];
    }
    else{
        $_SESSION['errlogin']="<strong>Erreur</strong>Votre Compte est desactivé";
        header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperer Mon Mot de Passe</title>
    <link rel="stylesheet" href="css\style_recup.css">
</head>

<body>
    <h3>Vous souhaitez récuperer votre mot de passe ?</h3>
    <div id="container-index">
        <form action="form_recup_password.php" method="post" id="form-recup">
            <label for="matricule-recup">Matricule</label><sup>*</sup><br>
            <input type="text" name="matricule-recup" id="matricule-recup" class="inputs"
                placeholder="Entrez votre matricule"><br>
            <label for="nom-recup">Noms</label><sup>*</sup><br>
            <input type="text" name="nom-recup" id="nom-recup" class="inputs"
                placeholder="Entrez votre nom complet"><br>
            <label for="datenaissance-recup">Date de naissance</label><sup>*</sup><br>
            <input type="text" name="datenaissance-recup" id="datenaissance-recup" class="inputs"
                placeholder="jj/mm/aaaa"><br>
            <div id="text-info">
                <div id="invalid-field-recup"></div>
            </div>
            <div id="btn">
                <input type="submit" value="Envoyer" class="btns" id="connect-btn">
            </div>
            <div id="fgt-pwd">"Votre mot de passe est <b><?php print_r($passRecup)?></b>. Copiez le et <a href="index.php">quittez ici</a></div>
            </form>
        </div>
        <script src="js\script_recup.js"></script>
    </body>

</html>