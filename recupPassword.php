<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="css\styleRecup.css">
</head>

<body>
    <h3>Vous souhaitez récuperer votre mot de passe ?</h3>
    <div id="container-index">
        <form action="" method="post" id="form-index">
            <label for="matricule">Matricule</label><sup>*</sup><br>
            <input type="text" name="matricule" id="matricule" class="inputs" placeholder="Entrez votre matricule"><br>
            <label for="nom">Noms</label><sup>*</sup><br>
            <input type="text" name="nom" id="nom" class="inputs" placeholder="Entrez votre nom complet"><br>
            <label for="datenaissance">Date de naissance</label><sup>*</sup><br>
            <input type="text" name="datenaissance" id="datenaissance" class="inputs" placeholder="jj/mm/aaaa"><br>
            <div id="text-info">
                <div id="invalid-field"></div>
            </div>
            <div id="btn">
                <input type="submit" value="Envoyer" class="btns" id="connect-btn">
            </div>
            <div id="fgt-pwd">Votre mot de passe est <b>XXXXXX</b>. Copiez le et <a href="index.php">quittez ici!</a></div>
        </form>
    </div>
    <script src="js\script.js"></script>
</body>

</html>