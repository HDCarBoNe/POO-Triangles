<?php include_once'config.php';
	
	$couleur = $_POST['couleur'];

	$db = new PDO("mysql:host=".Config::SERVERNAME.";dbname=".Config::DBNAME
                , Config::USER, Config::PASSWORD);

		$req1=$db->prepare("INSERT INTO polygones(couleur) VALUES(:couleur)");
		$req1->bindParam(":couleur",$couleur);
		$req1->execute();

		$id= $db->query("SELECT MAX(id) as ID FROM polygones")->fetch();

		$i = 1;
		while ($i <4) {
			$x = $_POST['x'.$i.''];
			$y = $_POST['y'.$i.''];
			$req3=$db->prepare("INSERT INTO points(x,y,idPolygone) VALUES (:x , :y, :idPoly)");
    	    $req3->bindParam(":x",$x);
    	    $req3->bindParam(":y",$y);
    	    $req3->bindParam(":idPoly",$id['ID']);
    	    $req3->execute();
			$i++;
		}
		$db = null;
  		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

     
?>