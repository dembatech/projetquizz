<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <link rel="stylesheet" href='<?php echo WEB_ROOT."css".DIRECTORY_SEPARATOR."style.css"?>'>
    <title>Connexion</title>
</head>
<body>
    <header>
        <img src="img/photo_2022-03-03_15-50-10.png" alt="">
        <h1>Le plaisir de jouer</h1>
    </header>
    <?php
    if(isset($_SESSION[KEY_ERRORS])){
        $errors=$_SESSION[KEY_ERRORS];
        // var_dump($_SESSION[KEY_ERRORS]);die;
        unset($_SESSION[KEY_ERRORS]);
    }
    ?>
    <div class="container">
        <form action="" method="POST">
            <input type="hidden" name="controller" value=securite>
            <input type="hidden" name="action" value=connexion>
            <div class="entete">
                <h2>Login Form</h2>
                <i class="fa fa-close" style="font-size:30px"></i>
            </div>
            <div class="corps">
                <small>
                    <?php
                        if (isset($errors["connexion"]))
                            echo $errors["connexion"];
                    ?>
                </small>
                <div class="champs">
                    <input type="text" name="login" placeholder="login">
                    <img src="img/icones/ic-login.png" alt="">
                </div>
                <small>
                    <?php
                        if (isset($errors["login"]))
                            echo $errors["login"];
                    ?>
                </small>


                <div class="champs">
                    <input type="password" name="password"placeholder="password">

                    <i class="material-icons" style="font-size:36px;color:rgb(190, 190, 190);">lock</i>                
                </div>
                <small>
                    <?php
                        if (isset($errors["password"]))
                            echo $errors["password"];
                    ?>
                </small>

                <div class="connexion">
                    <input type="submit" value="Connexion">
                    <a href="#">S'inscrire pour jouer</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>