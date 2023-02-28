<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div id="container-index">
        <h3>Connexion</h3>
        <form action="authentification.php" method="post" id="form-index">
            <label for="matricule">Matricule</label><sup>*</sup><br>
            <input type="text" name="matricule" id="matricule" class="inputs" placeholder="Entrez votre matricule"><br>
            <label for="password">Mot de passe</label><sup>*</sup><br>
            <input type="password" name="password" id="password" class="inputs" placeholder="Entrez votre mot de passe"><br>
            <div id="text-info">
                <div id="invalid-field"></div>
            </div>
            <div id="btn">
                <input type="submit" value="Se Connecter" class="btns" id="connect-btn">
            </div>
            <div id="fgt-pwd"><a href="form_recup_password.php">Mot de passe oublié ?</a></div>
        </form>
    </div>
    <script src="js\script.js"></script>
</body>

</html>