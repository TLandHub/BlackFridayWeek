<!DOCTYPE html>
<html>

<head>
    <title>Black Friday concours TLP.</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS // MATERIALIZE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- import css -->
    <link rel="stylesheet" href="Css\style.css" media="screen" type="text/css" />
</head>

<body>     
    <!-- banière -->
    <header>       
        <img id="BlackFridayHeader"src="Content\19op11_Black FridayTPL_180cmx80cm.jpg" alt="BlackFridayConcoursBanniere">  
    </header>
    <!-- formulaire -->
    <main>
        <div class="row center-align">
            <H1 class="col s12">Remportez un séjour exceptionnel pour 2 personnes en Autriche - Bavière !</H1>
            <H2 class="col s12">Je complète le formulaire ci-dessous pour tenter ma chance !</H2>
        </div>
        <div class="row">
            <form class="col s12" action="Php\validation.php" method="POST">
                <div class="row">
                    <p class="col s6">
                        <label>
                            <input name="civilite" type="radio" value="Monsieur" checked />
                            <span>Monsieur</span>
                        </label>
                    </p>
                    <p class="col s6">
                        <label>
                            <input name="civilite" type="radio" value="Madame"/>
                            <span>Madame</span>
                        </label>
                    </p>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" name="first_name" class="validate" required>
                        <label for="first_name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="last_name" class="validate" required>
                        <label for="last_name">Prenom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="email" type="email" name="email" class="validate" required>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="format email incorrect" data-success="right">Entrer un email valide</span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="phone" name="phone" type="number" class="validate" data-length="10" required>
                        <label for="phone">N° de téléphone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input id="numberStreet" name="numberStreet" type="number" class="validate" required>
                        <label for="numberStreet">N°</label>
                    </div>
                    <div class="input-field col s9">
                        <input id="adresse" name="adresse" type="text" class="validate" required>
                        <label for="adresse">Adresse</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input id="codePostal" name="codePostal" type="number" class="validate" data-length="5" required>
                        <label for="codePostal">Code postal</label>
                    </div>
                    <div class="input-field col s9">
                        <input id="ville" name="ville" type="text" class="validate" required>
                        <label for="ville">Ville</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            <label>
                                <input type="checkbox" name="camping" value="camping" required/>
                                <span>"Je suis l'heureux possesseur d'un camping-car/fourgon aménagé."</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s12">
                        <p>
                            <label>
                                <input type="checkbox" name="newsletter" value="newsletter" />
                                <span>"Je souhaite recevoir la newsletter TPL."</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s12">
                        <p>
                            <label>
                                <input type="checkbox" name="partenaire" value="partenaire"/>
                                <span>"Je souhaite recevoir les offres des partenaires TPL"</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s12">
                        <p>
                            <label id="eventCB">
                                <input id="CG" type="checkbox" name="CG" value="CG" required/>
                                <span>"J'accepte les conditions générales de participation à ce jeu concours"*</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 g-recaptcha" style="margin-top: 7%;" data-sitekey="6LcV2MAUAAAAAEPCCy5AQgBLjhMsRycbcBOwANFM"></div>
                    <div class="col s12 m6">
                         <img id="Sponsor"src="Content\ORCADA-LOGO-300x177.png" alt="LogoOrcada">
                    </div>
                </div>
                <div class="row center-align">
                     <button id="button" class="btn waves-effect waves-ligh disabled" type="submit" name="action">Je participe !</button>
                </div>
               
            </form>
        </div>
    </main>
    <footer>
        <div class="row center-align">
                <p class="font"> *conditions dans l’extrait du règlement du Grand Jeu Concours Black Friday week disponible en <a class="font" href="Content\CGDJ.txt">cliquant ici</a></p>     
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
    <script src="JS\script.js"><script>
    <script>>
    $(document).ready(function() {
    $('input#phone, input#codePostal').characterCounter();
    });
    </script>
   
</body>

</html>