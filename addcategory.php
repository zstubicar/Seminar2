<?php
	session_start();
	// provjera dali je korisnik ulgoiran kao admin ako ne preusmjeri ga na index.php
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php?page=admin");
	}
?>
<h1>Add new category</h1>
<form method="post" action="index.php?page=entercategory" />
<p><input type="text" name="name" size="40" maxlength="50" /></p>
<p><input type="submit" name="submit" value="Add category" /></p>

</form>
