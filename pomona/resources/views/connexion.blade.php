<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion² PassionFroid</title>

    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Connexion</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nom Prénom ou email"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Connectez-vous"/>

                        </div>
                    </form>
                    <p class="loginhere">
                        Aucun compte ? <a href="inscription.html" class="loginhere-link">Inscrivez-vous ici.</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

 
</body>
</html>


