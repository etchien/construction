<?php

require ("database.php");
if(isset($_POST))
{
	$nom_user = verifyInput($_POST['nom']);
	$password = verifyInput($_POST['password']);

}

	$db = database::connect();
	$insert = $db-> prepare(" SELECT*FROM admin WHERE NOM_ADMIN=? AND PASSWORD_ADMIN=?");
	$insert ->execute(array($nom_user,$password));
	if($magara=$insert->fetch()) {
		header("location:admin.php");

	}
	else
	{
		header("location:admin.php");

}



	function verifyInput($mag)
	{
		$mag=trim($mag);
		$mag=stripcslashes($mag);
		$mag=htmlspecialchars($mag);

		return $mag;
	}



 ?>
