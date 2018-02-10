<?php include_once'config.php';
	
	$id = $_GET['id'];

	$db = new PDO("mysql:host=".Config::SERVERNAME.";dbname=".Config::DBNAME
                , Config::USER, Config::PASSWORD);

		$req1=$db->prepare("SELECT x from points where idPolygone=:id");
		$req1->bindParam(":id",$id);
		$req1->execute();
		$result=$req1->fetchAll();
		var_dump($result);

  		

     
?>
<!-- echo "<script type='text/javascript'>document.location.replace('index.php');</script>"; -->