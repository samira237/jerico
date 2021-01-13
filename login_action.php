	<?php
session_start();
 
  include 'db.php';
 
if(isset($_POST['valider'])) {
   $mailconnect = htmlspecialchars($_POST['email']);
   $mdpconnect = sha1($_POST['psw']);
   if(!empty($email) AND !empty($psw)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
      $requser->execute(array($email, $psw));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['name'] = $userinfo['name'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
	
?>