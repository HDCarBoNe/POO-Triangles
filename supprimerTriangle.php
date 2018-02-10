<?php include_once'config.php';
	$identity = $_GET['id'];

	$db = new PDO("mysql:host=".Config::SERVERNAME.";dbname=".Config::DBNAME
                , Config::USER, Config::PASSWORD);

		$req=$db->prepare("DELETE FROM polygones WHERE id = :idP") or die(print_r($bdd->errorInfo()));
		$req->bindParam(":idP",$identity);
		$req->execute() or die(print_r($db->errorInfo()));
		echo $identity;
		
		// $req2=$db->prepare("DELETE FROM points where idPolygone=:idP");
  //   	$req2->bindParam(":idP",$id);
  //   	$req2->execute();
		// $db = null;
  // 		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
