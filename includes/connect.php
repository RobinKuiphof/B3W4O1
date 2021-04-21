<?php 

	try {
		$conn = new PDO('mysql:host=localhost;dbname=dynamischeweb', 'root','mysql');
	} catch (PDOException $e) {
		print "Error ".$e->getMessage(). "<br/>";
		die();
	}

	$sql = "SELECT * FROM `characters` ORDER BY name ASC";
	$sth = $conn->prepare($sql);
	$sth->execute();
	$result = $sth->fetchAll();

	$sql2 = 'SELECT Count(*) FROM characters';
	$sth2 = $conn->prepare($sql2);
	$sth2->execute();
	$result2 = $sth2->fetchAll();

	$sql3 = 'SELECT * FROM characters';
	$sth3 = $conn->prepare($sql3);
	$sth3->execute();
	$result3 = $sth3->fetchAll();
 ?>
