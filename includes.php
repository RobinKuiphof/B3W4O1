<?php 

	try {
		$conn = new PDO('mysql:host=localhost;dbname=dynamischeweb', 'root','mysql');
	} catch (PDOException $e) {
		print "Error ".$e->getMessage(). "<br/>";
		die();
	}

	$sql = 'SELECT count(*) FROM characters';
	$sth = $conn->prepare($sql);
	$sth->execute();
	$result = $sth->fetchAll();
 ?>
