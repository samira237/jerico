<?php
 
	session_start();

	include "header_jerico.php";
	include "menu_jerico.php";
	
	include 'db.php';



 
$articles = $conn->query('SELECT name FROM users ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $conn->query('SELECT name FROM users WHERE name LIKE "%'.$q.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $conn->query('SELECT name FROM users WHERE CONCAT(name, date_of_birth) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>

<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $articles->fetch()) { ?>
      <li><?= $a['name'] ?></li>
            <li><?= $a['info'] ?></li>
            <li><?= $a['date_of_birth'] ?></li>
          <li><?= $a['place_of_birth'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>

