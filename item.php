<?php
	// redirect back to index page if no stockID has been set
	if(!isset($_GET['stockID'])) {
		header("Location: index.php");
	}
	$item_sql="SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
	if($item_query=mysqli_query($dbconnect, $item_sql)) {
		$item_rs=mysqli_fetch_assoc($item_query);
		?>
		<h1><?php echo $item_rs['name']; ?></h1>
		<p><?php echo $item_rs['price']; ?> kn</p>
		<p><?php echo $item_rs['description']; ?></p>
		<p><input type="submit" name="potvrda" value="Uzimam" /></p>
		<?php
	}
?>