	<?php
    session_start();
      
   include 'db.php';
 
if(isset($_POST['confirmer'])) {

   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $date_of_birth = htmlspecialchars($_POST['date_of_birth']);
   $place_of_birth = htmlspecialchars($_POST['place_of_birth']);
   $info = htmlspecialchars($_POST['info']);
   $nationality = htmlspecialchars($_POST['nationality']);
   $password1 = sha1($_POST['password1']);
   $password2= sha1($_POST['password2']);


   if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['date_of_birth']) AND !empty($_POST['place_of_birth']) AND !empty($_POST['info']) AND !empty($_POST['nationality']) AND !empty($_POST['password1']) AND !empty($_POST['password2'])){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
         $reqmail->execute(array($email));
         $mailexist = $reqmail->rowCount();
         if($mailexist == 0) {
            if($password1 == $password2) {
               $insertmbr = $bdd->prepare("INSERT INTO users(name, info, date_of_birth, place_of_birth, email, password, nationality) VALUES(?, ?, ?, ?, ?, ?, ?)");
               $insertmbr->execute(array($name, $info, $date_of_birth, $place_of_birth, $email, $password, $nationality));
                        $erreur = "Votre compte a bien été créé ! <a href=\"login_jerico.php\">Me connecter</a>";
                     } else {
                        $erreur = "Vos mots de passes ne correspondent pas !";
                     }
                  } else {
                     $erreur = "Adresse mail déjà utilisée !";
                  }
               } else {
                  $erreur = "Votre adresse mail n'est pas valide !";
               }
           
            }
        
      
    else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>