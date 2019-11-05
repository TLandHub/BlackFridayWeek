<?php
session_start();
// Compléter les pré requis de validation;
if(isset($_POST['first_name']) && isset($_POST['last_name']))
{
    // connexion à la base de données
    $db_username = 'id11454614_admin';
    $db_password = '00000';
    $db_name     = 'id11454614_concoursblackfriday';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
  
           $civilite = htmlspecialchars($_POST['civilite']);
           $nom = htmlspecialchars($_POST['first_name']);
           $prenom = htmlspecialchars($_POST['last_name']);
           $email = htmlspecialchars($_POST['email']);
           $phone = $_POST['phone'];
           $numberStreet = $_POST['numberStreet'];
           $codePostal = $_POST['codePostal'];
           $ville = htmlspecialchars($_POST['ville']);
           $adresse = htmlspecialchars($_POST['adresse']);

           if(!empty($_POST['camping'])) {
            $camping = 1;
             }
             else{
            $camping = 0;
             }

             if(!empty($_POST['newsletter'])) {
                $newsletter = 1;
                 }
                 else{
                $newsletter = 0;
                 }
                 if(!empty($_POST['partenaire'])) {
                    $partenaire = 1;
                     }
                     else{
                    $partenaire = 0;
                     }
                     if(!empty($_POST['CG'])) {
                        $CG = 1;
                         }
                         else{
                        $CG = 0;
                         }
       
           $req_pre = mysqli_prepare($db, 'INSERT INTO BlackFriday2019(Civilite, Nom, Prenom, Email, NumTelephone, NumeroRue, Adresse, CodePostal, Ville, Proprietaire, Newsletter, OffrePArtenaire, AccepteCG) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?)');
       
           mysqli_stmt_bind_param($req_pre, "sssssssssssss", $civilite, $nom, $prenom, $email, $phone, $numberStreet, $adresse, $codePostal, $ville, $camping, $newsletter, $partenaire, $CG);
       
           mysqli_stmt_execute($req_pre);
           flush();
           header('Location: ..\contact.php');
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>