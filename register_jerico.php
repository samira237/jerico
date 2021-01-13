<?php
	session_start();
	
	include "header_jerico.php";
	include "menu_jerico.php";
?><br>
<div class="container">
	<form method="post" action="register_action.php">
		
		
        <input type="submit" name="">
	    <p style="text-align: center;"><b>Register</b></p>
	    <div >
	    <label for="name">Full name:</label> <input type="text" name="name" id="name" required /> 
	    <br>
		<label for="email">Email:</label> <input type="email" name="email" id="email" required /> 
	    <br>
		<label for="password1">Password:</label> <input type="password" name="password1" id="password1" required />
	<br>
		<label for="password2">Confirm password:</label> <input type="password" name="password2" id="password2" required />
	<br>
		<label for="date_of_birth">Date of birth (yyyy-mm-dd):</label> <input type="date" name="date_of_birth" id="date_of_birth" required />
	<br>
		<label for="place_of_birth">Place of birth:</label> <input type="text" name="place_of_birth" id="place_of_birth" required />
	<br>
	    <div>
		    <label for="info">Information:</label> <textarea name="info" id="info" rows="5" cols="50" ></textarea>
		</div>
	<br>
		<label for="nationality">Nationality:</label> <input type="text" name="nationality" id="nationality" required/>

	</div>
	
	<p class="center"><input value="Register" name="confirmer" type="submit" /></p>
	</form>
</div><br>
<?php	
	include "footer_jerico.php";
?>
