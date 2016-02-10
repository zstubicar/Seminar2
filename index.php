<?php

// ovo je baza za sve ostale strane na sajtu. Kada zelimo napraviti novi sajt uzmemo ovaj i spremimo kao novi web page koji zelimo
	include("dbconnect.php");
?>
<html>
<head>
<title>Darujmo.hr</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include("header.php");

	// provjera dali korisnik se nalazi na strani koja nije home page
	if(!isset($_GET['page'])) {
		?><div class="banner"><img src="images/banner.jpg" alt="Darujmo hr" /></div>
		<?php
	}
	
	?>
	
    <div class="maincontent">
		<?php 
			if(!isset($_GET['page'])) {
				include("home.php");
			} else {
				$page=$_GET['page'];
				include("$page.php");
			}
		?>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- kraj conteinera-->
</body>
</html>
