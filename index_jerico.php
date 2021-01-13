<?php
	session_start();// commence une session dés que la fonction est appelle. ca permette de garde les information de l'utilisateur pour un certain temps
	include "header_jerico.php";
	include "menu_jerico.php";
	// ajoute a la page les pages d'en-tete et le menu
?><br>
	<h2>Welcome to my modify miniFacebook</h2>
	<p>
	Your can start to <a href="register_jerico.php">register</a> as a new user.
	Then, you can <a href="search_jerico.php">search</a> others users.
	And you can <a href="login_jerico.php">login</a> to access your private area.
	</p>
<?php	
	include "footer_jerico.php";// ajoute le pied de la page du site
?>