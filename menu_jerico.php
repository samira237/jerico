
<div id="navbar">
	<a href="index_jerico.php"><i class="fa fa-fw fa-home"></i> Home</a>
	<a href="register_jerico.php" title="Register new user"><i class="fa fa-fw fa-registered"></i>Register</a>
	<a href="search_jerico.php" title="Users list"><i class="fa fa-fw fa-search"></i>Search</a>
	<a href="login_jerico.php" title="Login private area"><i class="fa fa-fw fa-user"></i>Login</a>
	<?php
	    if(isset($_SESSION['login']) && $_SESSION['login'] == "OK") {
		    echo '<li><a href="private.php" title="Private area">Private</a></li>';
		    echo '<li style="padding-left: 40px">' . $_SESSION['username'] . '</li>';
	    }
	?>
</div>

