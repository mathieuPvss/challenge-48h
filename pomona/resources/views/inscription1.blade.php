<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription PassionFroid</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nom Prénom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Répeter le mot de passe"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les <a href="https://www.passionfroid.fr/passionfroid/conditions-generales-de-vente" class="term-service">conditions d'utilisation</a></label>
                        </div>
                        <div class="form-group">
                            
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Inscrivez-vous"/>
                            
                        </div>
                    </form>
                    <p class="loginhere">
                        Déja un compte ? <a href="connexion.html" class="loginhere-link">Connectez-vous ici.</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

 
</body>
</html>


=======
<form  action="/inscription" method="post">
    {{csrf_field()}}
    <input type="email" name="email" placeholder="emaill" value = {{ old('email') }}>
    @if($errors->has('email'))
        <p>{{$errors->first('email')}}</p>
    @endif
    <input type="string" name="name" placeholder="name" >
    @if($errors->has('name'))
        <p>{{$errors->first('name')}}</p>
    @endif
    <input type="password" name="password" placeholder="password" >
    @if($errors->has('password'))
        <p>{{$errors->first('password')}}</p>
    @endif
    <input type="password" name="password_confirmation" placeholder="confirmation password" >
    @if($errors->has('password_confirmation'))
        <p>{{$errors->first('password_confirmation')}}</p>
    @endif
    <input type="submit" value="valider" >
</form>
>>>>>>> 501b471178c4d380a41f4e2b779fc4ce19bab001
