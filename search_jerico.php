<?php
	session_start();
	
	include "header_jerico.php";
	include "menu_jerico.php";
	// ajoute a la page les pages d'en-tete et le menu
?><br>
	<form class="example" method="post" action="search_result.php">
	<p>Search</p>
	<p><label for="name">Name:</label> <input type="text" placeholder="Search.." name="name" id="name" />
	<button type="submit"><i class="fa fa-search"></i></button></p>

	</form><br>
<?php	
	include "footer_jerico.php";
?>